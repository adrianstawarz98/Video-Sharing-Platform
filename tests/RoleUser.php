<?php

namespace App\Tests;



use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

trait RoleUser
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    pyuz $entityManager;

    public function setUp(): void
    {
        parent::setUp();
        $client = static::createClient();
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $userRepository = static::$container->get(UserRepository::class);
        $user = $userRepository->findOneBy(['email'=>'aadads@wp.pl']);
        $client->loginUser($user);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        $this->entityManager->close();
        $this->entityManager = null;
    }
}
