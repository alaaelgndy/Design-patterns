<?php 


abstract class HomeChecker {
	protected $succeeded;

	abstract public function check(HomeStatus $home);


	public function success(HomeChecker $succeeded)
	{
		$this->succeeded = $succeeded;
	}

	public function next(HomeStatus $home)
	{
		if ($this->succeeded) {
			return $this->succeeded->check($home);
		}
	}

}




class Door extends HomeChecker
{
	public function check(HomeStatus $home){
		if (! $home->door ) {
			 throw new Exception("Door not closed check it now");
		}

		$this->next($home);

	}
	
}


class Light extends HomeChecker
{
	public function check(HomeStatus $home){
		if (! $home->lightOff ) {
			 throw new Exception("light not closed check it now");
		}

		$this->next($home);

	}
	
}




class Alarm extends HomeChecker
{
	public function check(HomeStatus $home){
		if (! $home->alarm ) {
			 throw new Exception("alarm not closed check it now");
		}

		$this->next($home);

	}
	
}



class HomeStatus
{
	public $door = true;
	public $lightOff = true;
	public $alarm = true;
}



$door  = new Door;
$light = new Light;
$alarm = new Alarm;

$door->success($light);
$light->success($alarm);


$door->check(new HomeStatus);


