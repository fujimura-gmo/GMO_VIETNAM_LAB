<?php

$str = "Hello Jason, how are you?";

insertNum($str);

function insertNum($inputString) {

	$lengStr = strlen($inputString);

	$total=0;

	for ($i=1;$i<$lengStr;$i++) {
		$total=$total+$i;

		$strtemp = substr($inputString, 0,$i);

		echo $i.$strtemp;

		$inputString = substr($inputString, $i);

		if ($total>=$lengStr) {
			echo $i+1;
			break;
		} 
			
	}

	

}
?>