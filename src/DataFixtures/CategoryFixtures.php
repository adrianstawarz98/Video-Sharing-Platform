<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadMainCategories($manager);
        $this->loadElectronicsData($manager);
        $this->loadComputersData($manager);
        $this->loadLaptopsData($manager);
        $this->loadBooksData($manager);
        $this->loadMoviesData($manager);
        $this->loadRomanceData($manager);
    }
    private function loadMainCategories($manager)
    {
        foreach ($this->getMainCategoriesData() as [$name]) {
            $category = new Category;
            $category->setName($name);
            $manager->persist($category);
        }
        $manager->flush();
    }
    private function getMainCategoriesData(): array
    {
        return [
            ["Electronics", 1],
            ["Toys", 2],
            ["Books", 3],
            ["Movies", 4],
        ];
    }
    private function getElectronicsData(): array
    {
        return [
            ["Cameras", 5],
            ["Computers", 6],
            ["Cell Phones", 7],
        ];
    }
    private function getComputersData(): array
    {
        return [
            ["Laptops", 8],
            ["Deskops", 9],
        ];
    }
    private function getLaptopsData(): array
    {
        return [
            ["Apple", 10],
            ["Asus", 11],
            ["Lenovo", 12],
            ["Dell", 13],
            ["HP", 14],
        ];
    }
    private function getBooksData(): array
    {
        return [
            ["Children's Books", 15],
            ["Adult's eBooks", 16],
        ];
    }
    private function getMoviesData(): array
    {
        return [
            ["Family", 17],
            ["Romance", 18],
        ];
    }
    private function getRomanceData(): array
    {
        return [

            ["Romantic Comedy", 19],
            ["Romantic Drama", 20]
        ];
    }
    private function loadElectronicsData($manager)
    {
        $this->loadSubcategories($manager, "Electronics", 1);
    }
    private function loadMoviesData($manager)
    {
        $this->loadSubcategories($manager, "Movies", 4);
    }
    private function loadRomanceData($manager)
    {
        $this->loadSubcategories($manager, "Romance", 18);
    }
    private function loadBooksData($manager)
    {
        $this->loadSubcategories($manager, "Books", 3);
    }
    private function loadLaptopsData($manager)
    {
        $this->loadSubcategories($manager, "Laptops", 8);
    }
    private function loadComputersData($manager)
    {
        $this->loadSubcategories($manager, "Computers", 6);
    }
    private function loadSubcategories($manager, $category, $parent_id)
    {
        $parent = $manager->getRepository(Category::class)->find($parent_id);
        $methodName = "get{$category}Data";
        foreach ($this->$methodName() as [$name]) {
            $category = new Category;
            $category->setName($name);
            $category->setParent($parent);
            $manager->persist($category);
        }
        $manager->flush();
    }
}
