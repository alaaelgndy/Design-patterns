<?php  
namespace Adapter;


use Adapter\BookInterface;

/**
* 
*/
class Book implements BookInterface
{
	public function open()
	{
		return var_dump('this book is in open status');
	}

	public function turnPage()
	{
		return var_dump('this book is in turn oage status');
	}
}

