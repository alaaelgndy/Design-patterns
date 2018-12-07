<?php 

require 'vendor/autoload.php';

use Adapter\Person;
use Adapter\Book;
use Adapter\eReaderAdapter;
use Adapter\Kindle;
use Adapter\Nook;

(new Person)->read(new eReaderAdapter(new Nook));



 ?>