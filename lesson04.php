<?php
// 連想配列の要素name, age, genderに
// 山田,20,女性
// という値を格納し、

// 山田
// 20歳・女性

// という形で出力してください。

$women = array("name" => "山田", "age" => 20, "gender" => "女性");
echo $women["name"]."\n";
echo $women["age"]."歳"."・".$women["gender"];
