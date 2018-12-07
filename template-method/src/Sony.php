<?php 
namespace App;

use App\Mobile;


/**
* 
*/
class Sony extends Mobile
{
	protected function getMobileColor()
	{
		var_dump('this mobile colors (red , green , blue) its a Sony');
		return $this;
	}


	protected function getMobileType()
	{
		 var_dump('this mobile is Sony');
		 return $this;
	}

}