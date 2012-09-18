<?php
ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

$array = array();
for( $i = 0; $i < 10; ++$i ) {
$array[] = $i;
}
	print_r( $array ); //dump to screen for visual.
	print '<br />'

foreach( $array as $key => $value )
{
	print $key . '->' . $value . '<br />';

}










?>