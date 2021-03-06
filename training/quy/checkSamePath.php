<?php
/**
●渡された２つのパスが同じ場所を指しているかチェックする関数。
●同じパスなら “Match”, 異なるパスなら “Not Match”を表示する。
*/

// a（path1）,b(path2)という引数を対象として取得する

$options = getopt("a:b:");

if(!empty($options["a"])){
	$path1 = $options["a"];
}else{
	$path1 = '/vagrant/20144Q_PHPStudy/../20144Q_PHPStudy2/./test.txt';
}

if(!empty($options["b"])){
	$path2 = $options["b"];
}else{
	$path2 = '/vagrant//20144Q_PHPStudy2/./test.txt';
}

echo "path1: ".$path1."\n";
echo "path2: ".$path2."\n";

if(checkSamePath($path1, $path2)) {
    echo 'Match'." \n";
} else {
    echo 'Not Match'." \n";
}


/**
 @function: checkSamePath
 @param1: $path1
 @param1: $path2
 @return: true if match
          false if not match
*/
function checkSamePath($path1, $path2){
	$rt = false;
	// ファイルと
	if (file_exists($path1) && file_exists($path2)) {
		echo "path1 and path2 is valid \n";
		
		// 比較しやすくようにパスの『/』という文字を削除する
		if(realpath($path1) == realpath($path2)){
			$rt = true;
		}		
	} else{
		echo "path1 or path2 is invalid \n";
	
	}
	
	return $rt;

}

?>
