<?php

class skateboard{
	
	public $name;
	public $id;
	
	public function __construct($id){
		
		$this->id = $id;
		$this->parseName();
	}
	
	public function parseName(){
		$this->name = get_the_title();
	}
	
}

?>