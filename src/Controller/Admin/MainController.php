<?php

namespace App\Controller\Admin;

use App\Entity\Video;
use App\Utils\CategoryTreeAdminOptionList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
/**
 * @Route("/admin")
 */
class MainController extends AbstractController
{
    /**
     * @Route("/", name="admin_main_page", methods={"GET", "POST"})
     */
    public function index(Request $request, UserPasswordEncoderInterface $password_encoder)
    {
        $user = $this->getUser();
        $form =$this->createForm(UserType::class, $user, ['user' => $user]);
        $form->handleRequest($request);
        $is_invalid = null;
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $user->setName($request->get('user')['name']);
            $user->setEmail($request->get('user')['email']);
            $user->setLastName($request->get('user')['last_name']);
            $password = $password_encoder->encodePassword($user, $request->get('user')['password']['first']);
            $user->setPassword($password);
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'Your changes were saved!');
           return $this->redirectToRoute('admin_main_page');
        }
        elseif($request->isMethod('POST'))
        {
            $is_invalid = 'is-invalid';
        }
        return $this->render('admin/my_profile.html.twig', [
            'subscription' => $this->getUser()->getSubscription(),
            'form' => $form->createView(),
            'is_invalid' => $is_invalid
        ]);
    }

    /**
     * @Route("/videos", name="videos")
     */
    public function videos(CategoryTreeAdminOptionList $categories)
    {

        if ($this->isGranted('ROLE_ADMIN'))
        {
            $categories->getCategoryList($categories->buildTree());
            $videos = $this->getDoctrine()->getRepository(Video::class)->findBy([],["title"=>"ASC"]);
        }
        else
        {
            $categories = null;
            $videos = $this->getUser()->getLikedVideos();
        }

        return $this->render('admin/videos.html.twig',[
            'videos'=>$videos,
            'categories' => $categories
        ]);
    }
    /**
     * @Route("/cancel-plan", name="cancel_plan")
     */
    public function cancelPlan()
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());
        $subscription = $user->getSubscription();
        $subscription->setValidTo(new \DateTime());
        $subscription->setPaymentStatus(null);
        $subscription->setPlan('canceled');
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->persist($subscription);
        $entityManager->flush();
        return $this->redirectToRoute('admin_main_page');

    }




    /**
     * @Route("/delete-account", name="delete_account")
     */
    public function deleteAccount()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($this->getUser());
        $em->remove($user);
        $em->flush();
        session_destroy();
       return $this->redirectToRoute('main_page');
    }

}
