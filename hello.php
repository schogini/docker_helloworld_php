<?php

echo "Hello World. I am PHP";

if (getenv('a') && getenv('b')) {
	$a = getenv('a');
	$b = getenv('b');
	$sum = $a + $b;

	echo "\nSum of $a & $b is $sum";
} else {
	echo "\nNo parameters passed to calculate the sum.";
}

echo "\nPHP Bye!\n";