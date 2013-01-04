<?php
class Post extends Eloquent{

	public static $table = 'posts';

     public $includes = array('comments');

	public function topic()
     {
          return $this->belongs_to('Topic');
     }

     public function parent()
     {
          return $this->belongs_to('Post');
     }

     public function comments()
     {
          return $this->has_many('Post');
     }

     public function get_linktitle(){
          $linktitle = $this->title;

          if($this->link != '')
               $linktitle = HTML::link($this->link,  $this->title);
          
          return $linktitle;
     }
}