<?php
/*
Date : 2014年10月31日
@author TuanNA
FizzBuzz問題
	1から100まで順番に数を表示する
	ただし、その数が3で割り切れるなら“Fizz”、5で割り切れるなら“Buzz”、両方で割り切れるなら“FizzBuzz”と表示する
	プログラムでは、剰余演算子(%)を使ってはならない
*/

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