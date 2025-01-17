<?php
/*
|-----------------------------------------------------------
| available only at Udemy.com | copyright netprogs.pl | further distribution is prohibited
|-----------------------------------------------------------
*/
namespace App\Controller\Admin\Superadmin;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\Interfaces\UploadInterface;

use App\Entity\User;
use App\Entity\Video;
use App\Form\VideoType;


/**
 * @Route("/admin/su")
 */
class SuperAdminController extends AbstractController
{


    /**
     * @Route("/upload-video-locally", name="upload_video_locally")
     */
    public function uploadVideoLocally(Request $request, UploadInterface $fileUploader)
    {
        $video = new Video();
        $form = $this->createForm(VideoType::class, $video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $file = $video->getUploadedVideo();
            $fileName = $fileUploader->upload($file);

            $base_path = Video::uploadFolder;
            $video->setPath($base_path.$fileName[0]);
            $video->setTitle($fileName[1]);

            $em->persist($video);
            $em->flush();

            return $this->redirectToRoute('videos');
        }


        return $this->render('admin/upload_video_locally.html.twig',[
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/delete-video/{video}/{path}", name="delete_video", requirements={"path"=".+"})
     */
    public function deleteVideo(Video $video, $path, UploadInterface $fileUploader)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($video);
        $em->flush();

        if( $fileUploader->delete($path) )
        {
            $this->addFlash(
                'success',
                'The video was successfully deleted.'
            );
        }
        else
        {
            $this->addFlash(
                'danger',
                'We were not able to delete. Check the video.'
            );
        }

        return $this->redirectToRoute('videos');

    }

    /**
     * @Route("/users", name="users")
     */
    public function users()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findBy([], ['name' => 'ASC']);
        return $this->render('admin/users.html.twig',['users'=>$users]);
    }


    /**
     * @Route("/delete-user/{user}", name="delete_user")
     */
    public function deleteUser(User $user)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($user);
        $manager->flush();

        return $this->redirectToRoute('users');
    }

    /**
     * @Route("/update-video-category/{video}", name="update_video_category", methods={"POST"})
     */
    public function updateVideoCategory(Video $video, Request $request)
    {
        $manager = $this->getDoctrine()->getManager();
        $category = $this->getDoctrine()->getRepository(Category::class)->find($request->get('video_category'));
        $video->setCategory($category);
        $manager->persist($video);
        $manager->flush();
        return $this->redirectToRoute('videos');
    }


}
