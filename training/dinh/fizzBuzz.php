<?php
$maxLength = 100;
print_r(fizzBuzz($maxLength));

function fizzBuzz($maxLength=0){
	$str='';
	$k3 = 1;
	$k5 = 1;
	for($i =1; $i<=$maxLength; $i++){
		if($k3 == 3 && $k5 == 5){
			$str .=  " FizzBuzz </br>";
		}else if($k3 == 3){
			$str .= "Fizz </br>";
		}else if($k5 == 5){
			$str .= " Buzz </br>";
		}else{
			$str .= $i . " </br>";
		}
		
		if($k3 == 3){
			$k3 = 1;
		}else {
			$k3++;
		}
		if($k5 == 5){
			$k5 = 1;
		}else {
			$k5++;
		}
	}
	return $str;
}