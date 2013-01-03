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
}