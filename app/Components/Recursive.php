<?php 
namespace App\Components;

class Recursive{
  private $data;
  public function __construct($data)
  {
    $this->data = $data;
  }
  public function categoryRecursive($parent_id = 0, $level = 0){
    $result = [];
    foreach($this->data as $item){
        if($item['parent_id'] == $parent_id){      
              $item['level'] = $level;       
              $result[] = $item;
              // unset($this->data[$item['id']]);          
              $child =  $this->categoryRecursive($item['id'], $level + 1);
              $result = array_merge($result, $child);
        }
    }
    return $result;
    
}

}