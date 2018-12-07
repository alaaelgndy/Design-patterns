<?php 
namespace Adapter;


use Adapter\BookInterface;
use Adapter\Kindle;

/**
* 
*/
class Person
{
	public function read(BookInterface $book)
	{
		$book->open();
		$book->turnPage();
	}
	
}

