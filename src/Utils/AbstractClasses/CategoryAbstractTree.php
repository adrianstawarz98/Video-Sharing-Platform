<?php


namespace App\Utils\AbstractClasses;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

abstract class CategoryAbstractTree
{
 protected static $dbconnection;
 public $categoriesArrayFromDb;
 public $categorylist;
 public function __construct(EntityManagerInterface $manager, UrlGeneratorInterface $generator)
 {
     $this->generator  = $generator;
     $this->manager  = $manager;
     $this->categoriesArrayFromDb = $this->getConnection();
 }
 abstract public function getCategoryList(array $categories_array);
public function getConnection():array
{
    if(self::$dbconnection){
        return self::$dbconnection;
    }
    else
    {
        $conn = $this->manager->getConnection();
        $sql = "SELECT * FROM categories";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return self::$dbconnection = $stmt->fetchAll();
    }
}
public function buildTree(int $parent_id = null):array
{
    $subcategory = [];
    foreach ($this->categoriesArrayFromDb as $category)
    {
    if ($category['parent_id'] == $parent_id)
    {
        $children = $this->buildTree($category['id']);
        if($children)
        {
            $category['children'] = $children;
        }
        $subcategory[] = $category;
    }
    }
    return $subcategory;
}
}