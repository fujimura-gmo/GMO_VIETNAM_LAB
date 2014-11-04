<?php

// FizzBuzz問題
// Hieu

$list = array();

for($i=3;$i<=100;$i=$i+3) {
	$list[$i]= "Fizz";
}

for($i=5;$i<=100;$i=$i+5) {
	$list[$i]= "Buzz";
}

for($i=15;$i<=100;$i=$i+15) {
	$list[$i]= "FizzBuzz";
}

for($i=1;$i<=100;$i++) {

	if(empty($list[$i])) {
		echo $i." ";
	} else {
		echo $list[$i]." ";	
	}

}

?>