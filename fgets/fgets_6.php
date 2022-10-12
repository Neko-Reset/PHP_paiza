<?php
// 改行区切りでの出力
// $n = fgets(STDIN);
$n = "1 5";

// explodeで分割して配列にしてる
// Rubyのsplit(" ")と同じ
$a = explode( " ", ($n) );
foreach ($a as $value) {
    echo $value;
    echo "<br>";
}
?>
