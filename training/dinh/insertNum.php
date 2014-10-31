<?php
$str = 'Hello Dinhpt, how are you?';
$maxLeng = strlen($str);

print_r(insertNum($str,$maxLeng));

function insertNum($str=null,$maxLeng=0){
	$str = substr_replace($str,"1",0,0);
	$i = 1;
	$index = 0;
	$condition = true;
	while($condition){
		$i++;
		$index += $i;
		$str = substr_replace($str,$i,$index,0);
		if($index > $maxLeng){
			$condition = false;
		}
	}
	$str = substr_replace($str,$i+1,strlen($str)+1,0);
	return $str;
}
