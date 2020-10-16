<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;
use App\Entity\Video;
use App\Entity\User;
class VideoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->videoData() as [$title, $path, $category_id]) {
            try {
                $duration = random_int(0, 200);
            } catch (\Exception $e) {
            }
            $video = new Video;
            $video->setDuration($duration);
            $video->setCategory($manager->getRepository(Category::class)->find($category_id));
            $video->setPath(Video::VimeoPath . $path);
            $video->setTitle($title);
            $manager->persist($video);
        }
        $manager->flush();
        $this->loadLikes($manager);
        $this->loadDislikes($manager);
    }
    private function videoData()
    {
        return [
            ["Movies 1", 156543332, 4],
            ["Movies 2", 156543531, 4],
            ["Movies 3", 156543654, 4],
            ["Movies 4", 156543321, 4],
            ["Movies 5", 156543567, 4],
            ["Movies 6", 156543531, 4],

            ["Family 1", 123643421, 17],
            ["Family 2", 123643421, 17],
            ["Toys 1", 123498421, 2],
            ["Toys 2", 234498421, 2],
            ["Toys 3", 653498421, 2],
            ["Toys 4", 654498421, 2],
            ["Toys 5", 444498421, 2],
            ["Romantic Comedy 1", 123642421, 19],
            ["Romantic Drama 1", 123641231, 20],



        ];
    }

    public function loadLikes(ObjectManager $manager)
    {
        foreach ($this->likesData() as [$video_id, $user_id])
        {
            $video = $manager->getRepository(Video::class)->find($video_id);
            $user = $manager->getRepository(User::class)->find($user_id);
            $video->addUsersThatLike($user);
            $manager->persist($video);
        }
        $manager->flush();
    }

    public function loadDislikes(ObjectManager $manager)
    {
        foreach ($this->dislikesData() as [$video_id, $user_id])
        {
            $video = $manager->getRepository(Video::class)->find($video_id);
            $user = $manager->getRepository(User::class)->find($user_id);
            $video->addUsersThatDontLike($user);
            $manager->persist($video);
        }
    $manager->flush();
}
    private function likesData(): array
    {
        return [
            [12,1],
            [12,2],
            [12,3],
            [11,2],
            [11,1],
            [1,2],
            [1,1],
            [1,3],
            [2,3],
            [2,2],
        ];
    }
    private function dislikesData(): array
    {
        return [
            [10,1],
            [10,2],
            [10,3],
        ];
    }
}
