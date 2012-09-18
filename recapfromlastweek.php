<?php

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

echo "Hello world using the echo language contruct!<br />";

for($i = 0; $i < 10; ++$i){
	print $i.','; //string concat long form 
}

/*

//print numbers 0-9, comma sep, no last comma
$string 
for( $i =0; #i < 10; ++$i){
	print $i;
	if($i <= 9)
	{
	print ',';
	}


for ( $i = 0; $i < 10; ++$i)
{
$string .= $i.(9> $i? ',': ' ');

}
print 'T-OP: ' . $string. '<br/>';

//another control structure for looping....
while ( $i < 9)
{
print $i;
if (9 > $i)
print ',';

++$i; 
}
*/
?>