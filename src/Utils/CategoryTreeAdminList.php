<?php


namespace App\Utils;

use App\Utils\AbstractClasses\CategoryAbstractTree;

class CategoryTreeAdminList extends CategoryAbstractTree
{
        public $html1 = '<ul class="fa-ul text-left">';
        public $html2= '<li><i class ="fa-li fa fa-arrow-right"></i>';
        public $html3= '<a href = "';
        public $html4= '"> ';
        public $html5= '</a><a onclick="return confirm(\'Are you sure?\');" href="';
        public $html6= '"> ';
        public $html7= '</a>';
        public $html8= '</li>';
        public $html9= '</ul>';
        public function getCategoryList(array $categories_array)
    {
        $this->categorylist .= $this->html1;
        foreach ($categories_array as $value)
        {
            $url_edit = $this->generator->generate('edit_category', ['id' => $value['id']]);
            $this -> categorylist .= $this->html2 . $value['name'].$this->html3 . $url_edit. $this->html4.'Edit'.$this->html5.$this->html6.$this->html7;
            if (!empty($value['children']))
            {
                $this->getCategoryList($value['children']);
            }
            $this->categorylist .=$this->html8;
        }
        $this->categorylist .=$this->html9;
        return $this->categorylist;
    }
}