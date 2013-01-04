<?php
class Topic extends Eloquent{

	public static $table = 'topics';

	public function board()
     {
          return $this->belongs_to('Board');
     }

     public function posts()
     {
          return $this->has_many('Post');
     }

     
     public function get_fulltitle(){

          $fulltitle=$this->title;

          if($this->description != "")
               $fulltitle.=" <small>".$this->description."</small>";

          return $fulltitle;
     }

     public function get_fulltitledash(){

          $fulltitle=$this->title;

          if($this->description != "")
               $fulltitle.=" - <small>".$this->description."</small>";

          return $fulltitle;
     }

     public function get_parentposts(){

         return $this->posts()->where_null('post_id')->get();
     }
}