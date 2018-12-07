<?php 
namespace Adapter;

use Adapter\eReaderInterface;

/**
* 
*/
class Kindle implements eReaderInterface
{
	
	public function turnOn()
	{
		return var_dump('this book is in open kinlde status');
	}

	public function pressNextButton()
	{
		return var_dump('this book is in turn oage kinlde status');
	}
}