<?php
function fixPath($arr){
	$path="/";
	$arrFixed = array();
	$i=0;
	foreach($arr as &$dir){
		if($i>=1){
			if(strcmp($dir,".")==0){
				$path=$path;
			} else if (strcmp($dir,"..")==0){
				array_pop($arrFixed);
			} else {
				array_push($arrFixed,$dir);
			}
		}
		$i++;
	}
	
	print_r($arrFixed);
	$path .=implode ( "/",$arrFixed);
	return $path;
}

function checkSamePath($path1,$path2) {
  $arr1 = explode ("/",$path1);
  $arr2 = explode ("/",$path2);
  $p1 = fixPath($arr1);
  echo "$p1</br>";
  $p2 = fixPath($arr2);
  echo "$p2</br>";
  if(!strcmp($p1,$p2)){
	echo "Match";
	return true;
  }else{
  echo "NotMatch";
	return false;
	}
}
$str="Hello Jason, how are you?";
echo checkSamePath("/./home/user/../admin/./index.html","/home/admin/public_html/../index.html");
 
?>
