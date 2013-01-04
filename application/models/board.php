<?php
class Board extends Eloquent{

	public static $table = 'boards';

	public function topics()
     {
          return $this->has_many('Topic');
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

     public function get_mostcommentedtopics(){

          return $this->topics()
               ->limit(10)->get();
     }
}