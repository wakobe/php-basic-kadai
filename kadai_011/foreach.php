<?php
// 連想配列の作成
$item = [
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
];

// foreachを使って出力
foreach ($item as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>
