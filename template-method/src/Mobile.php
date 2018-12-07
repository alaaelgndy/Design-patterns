<?php 
namespace App;


abstract class Mobile {

	public function make()
	{
		return $this->getMobileType()
		->screen()
		->memory()
		->getMobileColor()
		->camera();
	}

	protected function screen(){
		var_dump('all mobiles have screen');
		return $this;
	}


	protected function memory(){
		var_dump('all mobiles have memory');
		return $this;
	}

	protected function camera(){
		var_dump('all mobiles have camera');
		return $this;
	}

	abstract protected function getMobileColor();
	abstract protected function getMobileType();


}