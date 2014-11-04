<?php
/*
Date : 2014年10月27日
@author LongTa
FizzBuzz問題
	1から100まで順番に数を表示する
	ただし、その数が3で割り切れるなら“Fizz”、5で割り切れるなら“Buzz”、両方で割り切れるなら“FizzBuzz”と表示する
	プログラムでは、剰余演算子(%)を使ってはならない
*/
$num_three = 3;
$num_five  = 5;
$i         = 1;
$j         = 1;
$flag = false; // 数字をプリントフラグ
for ($x=0; $x<=100; $x++) {
	// 「x == 自然数 * 3 」　確認
	if($x==($i*$num_three)){
		echo "Fizz";
		$i++;
		$flag=true;
	} 
	// 「x == 自然数 * 5 」　確認
	if ($x==($j*$num_five)) {
		echo "Buzz";
		$j++;
		$flag=true;
	} 
	// flag==false => 数字プリント
	if(!$flag){
		echo "$x ";
	}
	echo "</br>";
	$flag = false;
} 
?>