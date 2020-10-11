<?php

namespace App\Tests;

use App\Repository\CategoryRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminCategoriesTest extends WebTestCase
{
    private $client;
    private $crawler;
    /**
     * @var EntityManager
     */
    private $entityManager;
    public function setUp()
    {
        parent::setUp();
        $this->client = static::createClient();
        static::$kernel->getContainer()->get('doctrine')->getConnection()->beginTransaction();
        $userRepository = static::$container->get(UserRepository::class);
        $testUser=$userRepository->findOneBy(['email'=>'adrianstawarz98@wp.pl']);
        $this->client->loginUser($testUser);
        $this->crawler = $this->client->request('GET', '/admin/categories');

    }

    public function testCategoriesOnPage():void
    {
        self::assertSame('Go to public site',$this->crawler->filter('a')->text());
        self::assertEquals(200, $this->client->getResponse()->getStatusCode());

    }
    public function testCategoriesCount():void
    {
        self::assertCount(23, $this->crawler->filter('option'));
    }
    public function testAddingCategories():void
    {
        $form = $this->crawler->selectButton('Add')->form(['category[name]' => 'Other Categories', 'category[parent]' => 1]);
        $category = self::$container->get(CategoryRepository::class)->findOneBy(['name' => 'Other Categories']);
        $this->client->submit($form);
        self::assertNotNull($category);
        self::assertSame('Other Categories', $category->getName());
    }
    public function tearDown(): void
    {
        parent::tearDown();
        static::$kernel->getContainer()->get('doctrine')->getConnection()->rollback();
        $this->entityManager->rollback();
        $this->entityManager->close();
        $this->entityManager=null;

    }
}
