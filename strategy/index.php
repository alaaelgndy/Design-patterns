<?php

/**
* this design name pick strategy
* interface have methods we need in all classes whitch implement it
* classes inpelement this interface and use its functions to return data
* make a class will be execute the code 
* this class have a execution method with a needed paramters and inestance of interface
*/


interface Logger {
	public function logger($data);
}



class LogToFile implements Logger
{
	public function logger($data)
	{
		var_dump($data);
	}
}



class LogToDB implements Logger
{
	public function logger($data)
	{
		var_dump($data);
	}
}


class LogToApi implements Logger
{
	public function logger($data)
	{
		var_dump($data);
	}
}


/**
* default log is file
*/
class App
{
	public function log($data , Logger $logger = null)
	{
		$logger = $logger ?: new LogToFile;
		return $logger->logger($data);	
	}
}


(new App)->log('Test null instance');


