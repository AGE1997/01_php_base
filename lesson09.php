<?php
// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。
$scores = array(10, 60, 90, 70, 50);
foreach ($scores as $score) {
    if ($score >= 80) {
        $value = "優";
    } elseif ($score >= 60) {
        $value = "良";
    } elseif ($score >= 40) {
        $value = "可";
    } else {
        $value = "不可";
    }
    echo $score."点は「".$value."」です。"."\n";
}
