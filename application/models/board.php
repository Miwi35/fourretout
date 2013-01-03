<?php
class Board extends Eloquent{

	public static $table = 'boards';
	public $includes = array('topics');

	public function topics()
     {
          return $this->has_many('Topic');
     }

}