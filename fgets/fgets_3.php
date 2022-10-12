<?php
// 複数の入力
// 受け取った値の数,入出力
// 改行
$n = trim( fgets( STDIN ) );
for ( $i = 0; $i < $n; $i++ ) {
  echo trim( fgets( STDIN ) );
  echo "<br>";
}
?>
