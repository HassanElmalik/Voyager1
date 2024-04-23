<?php
//1
 $Course = "Elzero Courses"
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo $Course ?>>
    <title>Welcome To <?php echo $Course ?></title>
  </head>
  <body>
    <h1><?php echo $Course ?></h1>
    <p>Here In <?php echo $Course ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $Course ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $Course ?></footer>
  </body>
</html>

<?php 
//2
$name = "elzero";
$$name = "Web";

echo "Web";
echo $elzero;
echo "$elzero";
echo $$name;
echo "{$$name}<br>";


//3
$a = 200;
$b = &$a;
$a = 100;

echo $b ."<br>"; // 100


//4

echo '<pre>';
print_r ($_SERVER["DOCUMENT_ROOT"]);
echo '</pre>';
echo '<pre>';
print_r ($_SERVER["SERVER_NAME"]);
echo '</pre>';
echo '<pre>';
print_r ($_SERVER["SystemRoot"]);
echo '</pre>';
echo '<pre>';
print_r ($_SERVER["OPENSSL_CONF"]);
echo '</pre>';


//5
/*
__halt_compiler()	abstract	and	array()	as
break	callable	case	catch	class
clone	const	continue	declare	default
die()	do	echo	else	elseif
empty()	enddeclare	endfor	endforeach	endif
endswitch	endwhile	eval()	exit()	extends
final	finally	fn (as of PHP 7.4)	for	foreach
function	global	goto	if	implements
include	include_once	instanceof	insteadof	interface
isset()	list()	match (as of PHP 8.0)	namespace	new
or	print	private	protected	public
readonly (as of PHP 8.1.0) *	require	require_once	return	static
switch	throw	trait	try	unset()
use	var	while	xor	yield
yield from	 	 	 	 
*/


//6
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;