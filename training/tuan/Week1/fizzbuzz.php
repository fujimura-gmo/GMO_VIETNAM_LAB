<?php
	
$fizzbuzz = 1;
$buzz = 1;
$fizz = 1;

for($i = 1; $i <= 100; $i ++) {
	if($fizzbuzz == 15)	{
		echo "FizzBuzz\n";
		$fizzbuzz = 0;
		$buzz = 0;
		$fizz = 0;
	} elseif($fizz == 3) {
		echo "Fizz\n";
		$fizz = 0;
	} elseif($buzz == 5) {
		echo "Buzz\n";
		$buzz = 0;
	} else {
		echo $i."\n";
	}
	$fizzbuzz++;
	$fizz++;
	$buzz++;
}

?>