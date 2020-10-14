<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\VideoRepository;
use App\Utils\CategoryTreeFrontPage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;
use App\Entity\Video;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="main_page")
     */
    public function index()
    {

        return $this->render('front/index.html.twig');
    }

    /**
     * @Route("/video-list/{category}/{id}/{page}", defaults={ "page":"1" },name="video_list")
     */
    public function videoList($id, $page,CategoryTreeFrontPage $categories, Request $request)
    {


        $categories->getCategoryListAndParent($id);
        $ids = $categories ->getChildIds($id);
        $ids[] = $id;



        $videos = $this->getDoctrine()->getRepository(Video::class)->findByChildIds($ids, $page, $request->get('sortby'));
        return $this->render('front/video_list.html.twig', [
            'subcategories' => $categories ,
            'videos' => $videos,
        ]);
    }

    /**
     * @Route("/video-details/{video}", name="video_details")
     */
    public function videoDetails($video, VideoRepository $repository)
    {
        $videos = $repository->videoDetails($video);
        return $this->render('front/video_details.html.twig',[
            'video' => $videos
        ]);
    }

    /**
     * @Route("/search-results/{page}", methods={"GET"}, defaults={"page" = "1"},name="search_results")
     */
    public function searchResults($page, Request $request)
    {
        $videos = null;
        $query = null;
        if ($query = $request->get('query'))
        {
           $videos = $this->getDoctrine()->getRepository(Video::class)->findByTitle($query,$page,$request->get('sortby'));
            if(!$videos->getItems()) $videos = null;
        }
        return $this->render('front/search_results.html.twig',[
            'videos' => $videos,
            'query' => $query
        ]);
    }

    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricing()
    {
        return $this->render('front/pricing.html.twig');
    }

    /**
     * @Route("/register", name="register", methods={"POST", "GET"})
     */
    public function register(Request $request,UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager = $this->getDoctrine()->getManager();
            $user->setName($request->get('user')['name']);
            $user->setLastname($request->get('user')['last_name']);
            $user->setEmail($request->get('user')['email']);
            $password = $passwordEncoder->encodePassword($user,$request->get('user')['password']['first']);
            $user->setPassword($password);
            $user ->setRoles(['ROLE_USER']);
            $manager->persist($user);
            $manager->flush();
            $this->loginUserAutomatically($user,$password);
            return $this->redirectToRoute('admin_main_page');

        }
        return $this->render('front/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('front/login.html.twig');
    }

    /**
     * @Route("/payment", name="payment")
     */
    public function payment()
    {
        return $this->render('front/payment.html.twig');
    }

    public function mainCategories()
    {

        $categories = $this->getDoctrine()->getRepository(Category::class)->findBy(['parent' => null], ['name' => 'ASC']);
        return $this->render('front/_main_categories.html.twig', [
            'categories' => $categories
        ]);
    }
    private function loginUserAutomatically($user, $password): void
    {
    $token = new UsernamePasswordToken($user,$password,'main',$user->getRoles());
    $this->get('security.token_storage')->setToken($token);
    $this->get('session')->set('_security_main',serialize($token));
    }
    /**
     * @Route("/new-comment/{video}", name="new_comment", methods={"POST"})
     */
    public function newComment(Video $video, Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
        if(!empty(trim($request->get('comment')))){
            $comment = new Comment();
            $comment->setContent($request->get('comment'));
            $comment->setUser($this->getUser());
            $comment->setVideo($video);
            $em=$this->getDoctrine()->getManager();
            $em->persist($comment);
        }
        $em->flush();
        return $this->redirectToRoute('video_details', ['video'=>$video->getId()]);
    }
    /**
     * @Route("/delete-comment/{comment}", name="delete_comment")
     * @Security("user.getId() == comment.getUser().getId()")
     */
    public function deleteComment(Comment $comment, Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
            $em=$this->getDoctrine()->getManager();
            $em->remove($comment);
        $em->flush();
        return $this->redirect($request->headers->get('referer'));
    }
}
