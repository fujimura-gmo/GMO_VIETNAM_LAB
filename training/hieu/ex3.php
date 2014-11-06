<?php
/**
 * @author HieuTran
 */
$pathA = 'C:\Users\usr0101857\workspace\Training2014';
$pathB = 'C:\Users\usr0101857\workspace\.\Training2014';
checkSamePath ( $pathA, $pathB );

/**
 * checkSamePath�֐�
 * �n���ꂽ�Q�̃p�X�������ꏊ���w���Ă��邩�`�F�b�N����
 * 
 * @param string $pathA        	
 * @param string $pathB        	
 */
function checkSamePath($pathA, $pathB) {
	$flag = false;
	if (isset ( $pathA ) && isset ( $pathB )) {
		// ��΃p�X���擾
		$realPathA = realpath ( $pathA );
		$realPathB = realpath ( $pathB );
		
		// ��̃p�X���f
		if ($realPathA != false && $realPathB != false) {
			if ($realPathA == $realPathB) {
				$flag = true;
			}
		}
		
		// �\������
		if ($flag) {
			echo 'Match';
		} else {
			echo 'Not Match';
		}
	}
}
