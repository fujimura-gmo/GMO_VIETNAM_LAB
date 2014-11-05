<?php
$pathA = '/home/user/../admin/./index.html';
$pathB = '/home/admin/public_html/../index.html';
echo 'pathA = ' . $pathA . ' </br>';
echo 'pathB = ' . $pathB . ' </br>';
if(checkSamePath($pathA,$pathB)) {
    echo 'Match </br>';
} else {
    echo 'Not Match </br>';
}
echo '-------------------------------------------------------- </br>';

$pathA = '/home//admin//index.html';
$pathB = '/home/admin/index.html';
echo 'pathA = ' . $pathA . ' </br>';
echo 'pathB = ' . $pathB . ' </br>';
if(checkSamePath($pathA,$pathB)) {
    echo 'Match </br>';
} else {
    echo 'Not Match </br>';
}

function checkSamePath($pathA=null,$pathB=null){
	$path1 = dirname($pathA);
	$path2 = dirname($pathB);
	//replace path	
	$path1 = str_replace(array('\\','//'),'/', $path1);
	$path2 = str_replace(array('\\','//'),'/', $path2); 
	// check same path
	if($path1 == $path2) {
	    return true;
	} 
	return false;
}
