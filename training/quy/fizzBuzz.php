<?php
/**
開発内容
●　1から100まで順番に数を表示する
●　ただし、その数が3で割り切れるなら“Fizz”、5で割り切れるなら“Buzz”、両方で割り切れるなら“FizzBuzz”と表示する
●　プログラムでは、剰余演算子(%)を使ってはならない

*/

// 1から　100にかけて　ループする
for($i=1; $i <= 100; $i++){
 $display = $i;	

 // $displayは3を割り
  $div3 = $display/3;
 
 // $displayは5を割り
   $div5 = $display/5;
 
 if(!strpos($div3, '.') && !strpos($div5, '.')){
    $display = 'FizzBuzz';
 } elseif(!strpos($div3, '.')){
    $display = 'Fizz';
 } elseif(!strpos($div5, '.')){
    $display = 'Buzz';
 }
  echo $display."\n";
}


?>
