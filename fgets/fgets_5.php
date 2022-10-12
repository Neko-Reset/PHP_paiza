<?php
// 半角スペースで出力
// 先に変数に出力する値を格納
// 受け取った値n回足す
// 先に変数にpaizaを入れてるからforの条件を-1を追加
// forの中で$aに半角を足す

$n = trim( fgets( STDIN ) );
$a = "paiza";

for ( $i = 0; $i < $n - 1; $i++ ) {
    $a .=  " paiza"; 
}

echo $a;

?>
