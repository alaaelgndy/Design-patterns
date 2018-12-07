<?php 
namespace Adapter;

use Adapter\eReaderInterface;

/**
* 
*/
class Nook implements eReaderInterface
{
	
	public function turnOn()
	{
		return var_dump('this book is in open nook status');
	}

	public function pressNextButton()
	{
		return var_dump('this book is in turn oage nook status');
	}
}