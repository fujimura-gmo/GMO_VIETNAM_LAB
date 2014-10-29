<?php
/*
Date : 2014年10月27日
@author LongTa
insertNum関数
	与えられた文字列に対して、数字を挿入する関数。
	挿入ルールは、最初に"1",1文字あけて"2",2文字あけて"3",...
	最後はあける文字数によらず数字で終わらせる。
*/

/**
* 数字を追加
* @param　$str 入力String
* @return 数字が追加されたString 
*/
function insertNumber($str) {
  $len     = strlen($str);
  $index   = 1;
  $curNum  = 0;
  $res     = "";
  
  for($i =0; $i < $len ;$i++){
	// 数字をプリントチェック
	if(($i + 1 - $curNum) == $index){
		$res.="$index$str[$i]";
		$index+=1;
		$curNum = $i;
	}
	// 以外ー＞数字をプリントしない
	else {
		$res.="$str[$i]";
	}
  }
  $res.="$index";
  return $res;
}

// テスト
$str="Hello Jason, how are you?";
echo insertNumber($str);
 
?>