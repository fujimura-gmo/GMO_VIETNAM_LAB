<?php
function insertNumber($str) {
  $len = strlen($str);
  $index=1;
  $curNum =0;
  $res="";
  for($i =0; $i < $len ;$i++){
	if(($i + 1 - $curNum) == $index){
		$res.="$index$str[$i]";
		$index+=1;
		$curNum = $i;
	}else {
		$res.="$str[$i]";
	}
  }
  $res.="$index";
  return $res;
}
$str="Hello Jason, how are you?";
echo insertNumber($str);
 
?>