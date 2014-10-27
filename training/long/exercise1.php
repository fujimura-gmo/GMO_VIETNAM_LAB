<?php
$san = 3;
$go  = 5;
$i   = 1;
$j   = 1;
$flag = false;
for ($x=0; $x<=100; $x++) {
	
	if($x==($i*$san)){
		echo "Fizz";
		$i++;
		$flag=true;
	} 
	if ($x==($j*$go)) {
		echo "Buzz";
		$j++;
		$flag=true;
	} 
	if(!$flag){
		echo "$x ";
	}
	echo "</br>";
	$flag = false;
} 
?>