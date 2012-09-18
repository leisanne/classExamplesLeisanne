<?php

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

/*
*print_ln
*
*prints the desired string
*
*@access public
*@param string contains the string to print
*@param bool determines whether a new line os to be used.
*@retrun void
*/
function print_ln($line , $ln_break = true)
{
	// type cast: $line = (string) $line;
	print my_trim($line);
	if( $ln_break )
	{
	print '<br />';
	}
}
function my_trim($str)
{
	return trim($str);
}


print_ln('first and foremost');
print_ln ( 'Hello world'  );

print_ln( ' hello world from foo bar... ');