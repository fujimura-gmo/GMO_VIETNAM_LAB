<?php
/**
 * @author HieuTran
 */
$pathA = 'C:\Users\usr0101857\workspace\Training2014';
$pathB = 'C:\Users\usr0101857\workspace\.\Training2014';
checkSamePath ( $pathA, $pathB );

/**
 * checkSamePath関数
 * 渡された２つのパスが同じ場所を指しているかチェックする
 * 
 * @param string $pathA        	
 * @param string $pathB        	
 */
function checkSamePath($pathA, $pathB) {
	$flag = false;
	if (isset ( $pathA ) && isset ( $pathB )) {
		// 絶対パスを取得
		$realPathA = realpath ( $pathA );
		$realPathB = realpath ( $pathB );
		
		// 二つのパス判断
		if ($realPathA != false && $realPathB != false) {
			if ($realPathA == $realPathB) {
				$flag = true;
			}
		}
		
		// 表示結果
		if ($flag) {
			echo 'Match';
		} else {
			echo 'Not Match';
		}
	}
}
