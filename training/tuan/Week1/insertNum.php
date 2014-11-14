<?php
/*
Date : 2014年10月31日
@author TuanNA
insertNum関数
	与えられた文字列に対して、数字を挿入する関数。
	挿入ルールは、最初に"1",1文字あけて"2",2文字あけて"3",...
	最後はあける文字数によらず数字で終わらせる。
*/

/**
* 入力文字例に数字を追加
* @param　$str 入力文字例
* @return 数字が追加された文字例
*/
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
	return $result;
}

do {
	echo "Input string: ";
	$input_handle = fopen("php://stdin", "r");
	$input_string = trim(fgets($input_handle), "\r\n");
	echo insertNum($input_string)."\n";
	echo "Please type 'yes' to continue: ";
	$response = trim(fgets($input_handle));
} while($response === 'yes')

?>