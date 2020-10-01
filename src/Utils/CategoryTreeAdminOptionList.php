<?php


namespace App\Utils;


use App\Utils\AbstractClasses\CategoryAbstractTree;

class CategoryTreeAdminOptionList extends CategoryAbstractTree
{

        public function getCategoryList(array $categories_array, $repeat = 0)
        {
            foreach ($categories_array as $value){
                $this->categorylist[] = ['name' => str_repeat("-", $repeat).$value['name'], 'id'=>$value['id']];
                if(!empty($value['children']))
                {
                    $repeat += 2;
                    $this->getCategoryList($value['children'],$repeat);
                    $repeat -= 2;
                }
            }
            return $this->categorylist;
        }
}