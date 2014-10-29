<?php
/*
Date : 2014年10月27日
@author LongTa
checkSamePath関数
	渡された２つのパスが同じ場所を指しているかチェックする関数。
	同じパスなら “Match”, 異なるパスなら “Not Match”を表示する。
*/

/**
* パス編集
*　	/ab/cd../ef -> /ab/ef
*　	/ab/cd/./ef -> /ab/cd/ef
* @param　$path
* @return 「./」と「../」編集されたパス 
*/
function fixPath ($_path) {
	
	$arr      = explode ("/",$_path); // 「/」で区切り
	$path     = "/";
	$arrFixed = array();
	$i        = 0;
	
	foreach($arr as &$dir){
		if ($i>=1) {
			// 「./」　＝＞むし
			if ( strcmp($dir,".") == 0 ){
				$path=$path;
			}
			// 「../」＝＞親もディレクトリになる
			else if ( strcmp($dir,".." ) == 0 ){
				array_pop($arrFixed);
			} 
			// 以外はそのまま
			else {
				array_push($arrFixed,$dir);
			}
		}
		$i++;
	}
	
	$path .=implode ( "/",$arrFixed);// array -> string 
	return $path;
}

/**
* パス比較
* @param　$path１
* @param　$path2
* @return 同じパス＝＞true,逆にfalse 
*/
function checkSamePath($path1,$path2) {
	
	$p1   = fixPath($path1);
	$p2   = fixPath($path2);
	
	if(!strcmp($p1,$p2)){
		return true;
	}else{
		return false;
	}
}

// テスト
if ( checkSamePath("/./home/user/../admin/./index.html","/home/admin/public_htmla/../indexa.html") ) {
	echo "Match</br>";
} else {
	echo "NotMatch</br>";
}
if ( checkSamePath("/../home/user/../admin/./index.html","/home/admin/public_htmla/../index.html") ) {
	echo "Match</br>";
} else {
	echo "NotMatch</br>";
}

?>
