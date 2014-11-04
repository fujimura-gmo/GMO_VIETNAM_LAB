<?php
$str = 'Hello';
echo insertNum($str);


/**
 * Insert number to String Function
 *
 * @param $str
 * @return String : Input String is inserted by number
 *
 */
function insertNum($str = null)
{
    if (empty($str)) {
        echo "Input is not set or empty <br>";
        return "";
    }
    $str_result = ""; // target String
    $cur_pos_str = 0; // current possion of str
    $cur_num = 1; // current number
    $str_length = strlen($str);
    while ($cur_pos_str < $str_length) {
        // insert number and substring in OriginString to targetString
        $str_result .= $cur_num . substr($str, $cur_pos_str, $cur_num);
        // update current possion and current number
        $cur_num++;
        $cur_pos_str += $cur_num - 1;
    }
    // insert final number
    $str_result .= $cur_num;
    return $str_result;
}

?>