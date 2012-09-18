<?php
ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);


$my_array = array(1,2,3,4,5);

//$my_array = array ( 0 => 1, 1 => 2,...);

$my_array[] = 6;
$my_array[] = 7;
$my_array[] = 8;
$my_array[] = 9;
$my_array[] = 10;

//our array now is like that of commented line where the key of each item is the element of -1.

for( $i = 0; $i < count($my_array); ++$i)
{
	print $my_array[$i] . ',';

}
print '<br />';

for( $i = 0; $i < count($my_array); ++$i)
{
$my_array[$i] = $i + 10;

}
	//using print, print/dump this recursively
	print_r( $my_array );
	
	
