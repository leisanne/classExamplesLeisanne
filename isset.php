<?php
ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

//build an array of data, mixed key types
$array = array( 2,5,10, 'hello' => 'world');

print_r( $array );

$array['bye']) = 'world';

if( isset( $array['bye']))
{
	print 'Bye exists<br />';
}
else
{
	print 'bye does not exist';
}

