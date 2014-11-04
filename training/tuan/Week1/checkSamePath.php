<?php

function checkSamePath($pathA, $pathB) {
	$dir_name_arrA = getDirNameArrFromPath($pathA);	
	$dir_name_arrB = getDirNameArrFromPath($pathB);
	if(count($dir_name_arrA) != count($dir_name_arrB)) {
		return false;
	} else {
		for($i = 0; $i < count($dir_name_arrA); $i++) {
			if($dir_name_arrA[$i] != $dir_name_arrB[$i]){
				return false;
			}
		}
		return true;
	}
}

function getDirNameArrFromPath($path) {
	$name_list = explode("/", $path);
	$dir_name_arr = array();
	for($i = 0; $i < count($name_list); $i++) {
		$dir_name = $name_list[$i];
		if($dir_name == "..") {
			array_pop($dir_name_arr);
		} elseif($dir_name != "." and !empty($dir_name)) {
			$dir_name_arr[] = $dir_name;
		}
	}
	return $dir_name_arr;
}

do {
	echo "Input pathA: ";
	$input_handle = fopen("php://stdin", "r");
	$pathA = trim(fgets($input_handle));
	echo "Input pathB: ";
	$pathB = trim(fgets($input_handle));
	if(checkSamePath($pathA, $pathB)) {
		echo "Match\n";
	} else {
		echo "Not Match\n";
	}
	echo "Please type 'yes' to continue: ";
	$response = trim(fgets($input_handle));
} while($response === 'yes')

?>