<?php 
namespace App;

use App\Mobile;


/**
* 
*/
class Nokia extends Mobile
{
	protected function getMobileColor()
	{
		 var_dump('this mobile colors (red , green , blue) its a Nokia');
		return $this;
	}


		protected function getMobileType()
	{
		 var_dump('this mobile is Nokia');
		 return $this;
	}
}