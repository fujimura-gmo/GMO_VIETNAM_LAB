<?php

function insertNum($str) {
	$result = '1';
	$count = 0;
	$num = 2;
	$char_array = preg_split('/(?<!^)(?!$)/u', $str);
	for($i = 0; $i <= count($char_array); $i++) {
		if($i == count($char_array)) {
			if($count != 0) {
				$result = $result.$num;
			}
		} else {
			$count ++;
			$result = $result.$char_array[$i];
			if($count == $num - 1) {
				$result = $result.$num;
				$count = 0;
				$num++;
			}
		}
	};
	return $result."\n";
}

do {
	echo "Input string: ";
	$input_handle = fopen("php://stdin", "r");
	$input_string = trim(fgets($input_handle), "\r\n");
	echo insertNum($input_string);
	echo "Please type 'yes' to continue: ";
	$response = trim(fgets($input_handle));
} while($response === 'yes')

?>