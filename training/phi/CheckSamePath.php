<?php
$pathA = 'D:\\xampp\\..\\xampp\\htdocs';
$pathB = 'D:\\xampp\\htdocs';
if (checkSamePath($pathA, $pathB)) {
    echo 'Match';
} else {
    echo 'Not Match';
}

/**
 * check 2 path is same function
 *
 * @param $pathA
 * @param $pathB
 * @return true : $pathA and $pathB is exists in System and $pathA same $pathB
 * @return false : $pathA and $pathB is not exists in System or $pathA is not set or $pathB is not set or $pathA != $pathB
 */
function checkSamePath($pathA = null, $pathB = null)
{
    // $pathA is not set or $pathB is not set
    if (!isset($pathA) || !isset($pathB)) {
        echo "pathA or pathB is not set <br>";
        return false;
    } else {
        // Real Path in System
        $realPathA = realpath($pathA);
        $realPathB = realpath($pathB);
        // $pathA or $pathB is not exists in System
        if ($realPathA == false || $realPathB == false) {
            echo "pathA or pathB is not exists in system <br>";
            return false;
        } else if ($realPathA == $realPathB) {
            // $pathA or $pathB is same in System
            return true;
        } else {
            // $pathA or $pathB is not same in System
            return false;
        }
    }
}

?>