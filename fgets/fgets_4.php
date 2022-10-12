<?php
// 受け取った値を配列にする方法
$n = trim( fgets( STDIN ) );

// phpで空の配列の作り方
// Rubyのarray = Array.new();
$a = [];

for ( $i = 0; $i < $n; $i++ ) {
  $a[] = trim( fgets( STDIN ) ); 
}

echo max($a);

?>
