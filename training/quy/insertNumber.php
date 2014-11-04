<?php
/**
●与えられた文字列に対して、数字を挿入する関数。
●挿入ルールは、最初に"1",1文字あけて"2",2文字あけて"3",...
●最後はあける文字数によらず数字で終わらせる。
*/

// sという引数を対象として取得する
$options = getopt("s:");
if(!empty($options["s"])){
	$str = $options["s"];
}else{
	$str = 'Hello Jason, how are you?';
}

echo insertNum($str)."\n";

/**
 @function: insertNum
 @param: $str
 @return: string
 　文字列に数字を挿入すること
*/
function insertNum($str){
	
	// 文字列値が空の場合　処理するようにしない
	if(empty($str)) return "";
	
	$rt = $str;	
	$rpStr = 1;
	$strLen = strlen($rt);
	
	//文字を挿入すうための計算
	$cal = 1;
	
	$insertPos = 0;
     while($insertPos < $strLen){
		if($cal == $rpStr){
		  
		  // 文字列に文字を付く
		  $rt = substr_replace($rt,$rpStr,$insertPos,0);		  
		  // 挿入する数字に1を加える		  
		  $rpStr++;
		  
		  // 挿入するポジションに1を加える
		  $insertPos++;	
		  
		  // 文字サイズに1を加える
		  $strLen++;
		  
		  // 計算が1へリセット
		  $cal = 1;
		}
		
		// 計算引数に１を加える
		$cal++;
		
		// 挿入するポジションに1を加える
		$insertPos ++;
	 }
	
	// 文字列の最後に挿入する数字を付く
	$rt .= $rpStr;
	
	return  $rt;
}

?>
