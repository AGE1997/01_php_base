<?php
// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から３日後
// ・現在日時から１２時間前
// ・2020年元旦から現在までの経過日数

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください

date_default_timezone_set('Asia/Tokyo');

echo "現在日時 (".date('Y年m月d日 H時i分s秒').")";
echo "\n";

echo "現在日時から3日後 ".date('Y年m月d日 H時i分s秒', strtotime("+3 day"));
echo "\n";

echo "現在日時から12時間前 ".date('Y年m月d日 H時i分s秒', strtotime("-12 hour"));
echo "\n";

$today = new DateTime('now');

$date_time = new DateTime('2020-01-01');

$diff = $today->diff($date_time);

echo "2020年元旦から現在までの経過日数は".$diff->days."日です。";
