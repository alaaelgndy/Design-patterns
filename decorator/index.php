<?php 


interface CarService {
	public function getCost(); //25
	public function getDesc();
}


/**
* 
*/
class BasicInspection implements CarService
{
	public function getCost()
	{
		return 25 . $this->getDesc();
	}


	public function getDesc()
	{
		return 'this is BasicInspection';
	}
}


/**
* 
*/
class OilChange implements CarService
{
	protected $CarService;
	function __construct(CarService $CarService)
	{
		$this->CarService = $CarService;
	}

	public function getCost()
	{
		return 40 + $this->CarService->getCost(); 
	}


	public function getDesc()
	{
		return  $this->CarService->getDesc() .  ' ,and .this is OilChange';
	}
}


class TireRotation implements CarService
{
	protected $CarService;
	function __construct(CarService $CarService)
	{
		$this->CarService = $CarService;
	}

	public function getCost()
	{
		return 30 + $this->CarService->getCost(); 
	}


	public function getDesc()
	{
		return $this->CarService->getDesc() .  ' ,and .this is TireRotation';
	}
}



echo ( new OilChange( new TireRotation(new BasicInspection)))->getDesc();