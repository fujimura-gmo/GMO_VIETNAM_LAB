<?php
$FIZZ = 3;
$BUZZ = 5;
$FIZZBUZZ = 15;

const MAX_NUM = 100;
for ($number = 1; $number <= MAX_NUM; $number++) {
    $number_value = $number;
    switch ($number) {
        // if FizzBuzz
        case $FIZZBUZZ:
            $number_value = "FizzBuzz";
            $FIZZBUZZ += 15;
            $FIZZ += 3;
            $BUZZ += 5;
            break;
        // if Fizz
        case $FIZZ:
            $number_value = "Fizz";
            $FIZZ += 3;
            break;
        // if Buzz
        case $BUZZ:
            $number_value = "Buzz";
            $BUZZ += 5;
            break;
        default:
            break;
    }
    echo $number_value . " ";
}
?>