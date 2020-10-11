<?php


namespace App\Utils;


use App\Twig\AppExtension;
use App\Utils\AbstractClasses\CategoryAbstractTree;

class CategoryTreeFrontPage extends CategoryAbstractTree
{   public $html1 = '<ul>';
    public $html2= '<li>';
    public $html3= '<a href = "';
    public $html4= '">';
    public $html5= '</a>';
    public $html6= '</li>';
    public $html7= '</ul>';
public function getCategoryListAndParent(int $id): string
{
    $this->slugger = new AppExtension();
    $parentData = $this->getMainParent($id);
    $this->mainParentId = $parentData['id'];
    $this->mainParentName = $parentData['name'];
    $key = array_search($id, array_column($this->categoriesArrayFromDb, 'id'));
    $this->currentCategoryName = $this->categoriesArrayFromDb[$key]['name'];
    $categories_array = $this->buildTree($parentData['id']);
    return $this->getCategoryList($categories_array);
}
 public function getCategoryList(array $categories_array): string
 {
    $this->categorylist .= $this->html1;
    foreach ($categories_array as $value)
    {
        $catname = $this->slugger->slugify($value['name']);
        $url = $this->generator->generate('video_list', ['category' => $catname, 'id' => $value['id']]);
        $this -> categorylist .= $this->html2 . $this->html3 . $url. $this->html4.$value['name'].$this->html5;
        if (!empty($value['children']))
        {
        $this->getCategoryList($value['children']);
        }
        $this->categorylist .=$this->html6;
    }
     $this->categorylist .=$this->html7;
    return $this->categorylist;
 }
 public function getMainParent(int $id):array
 {
     $key = array_search($id, array_column($this->categoriesArrayFromDb,'id'));
    if($this->categoriesArrayFromDb[$key]['parent_id'] != null)
    {
        return $this->getMainParent($this->categoriesArrayFromDb[$key]['parent_id']);
    }
    else
    {
        return [
            'id' => $this->categoriesArrayFromDb[$key]['id'], 'name'=> $this->categoriesArrayFromDb[$key]['name']
        ];

    }
 }
 public function getChildIds(int $parent): array
 {
     static $ids=[];
     foreach($this->categoriesArrayFromDb as $val)
     {
        if($val['parent_id'] == $parent)
        {
            $ids[] = $val['id'].',';
            $this->getChildIds($val['id']);
        }
        return $ids;
     }
 }
}