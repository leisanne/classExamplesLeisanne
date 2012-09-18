<?php

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

class MyBaseClass
{
	public function printMe($ln)
	{
	print $ln . '<br/>';
	}
	
}
$base_class = new MyBaseClass();
$base_class -> printMe ( 'Hello world' );
