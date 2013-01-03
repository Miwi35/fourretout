<?php
class Post extends Eloquent{

	public static $table = 'posts';

	public function topic()
     {
          return $this->belongs_to('Topic');
     }

     public function post()
     {
          return $this->belongs_to('Post');
     }

     public function comments()
     {
          return $this->has_many('Post');
     }
}