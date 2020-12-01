<?php
echo time();
echo '<br>';
var_dump(time());
?>
<br>
<?php
// 現在時刻を取得
echo date("Y-m-d H:i:s", time());
echo '<br>';
// 例：2017/4/12 16:00:00のタイムスタンプを変換
echo date("Y-m-d H:i:s", 1491980400);
echo '<br>';
echo date("Y-m-d H:i:s", 1286853345);
?>
<br>
<?php
echo date("Y年m月d日 H時i分s秒", time());
?>
<br>
<?php
// 2017年2月16日午前11時25分00秒のタイムスタンプ
echo strtotime("2017/2/16 11:25:00");
?>
<br>
<?php
// 先週の日曜日
echo strtotime("last Sunday");
echo '<br>';
// 2日後
echo strtotime("+2 day");
?>
1. ログ(意味、確認の仕方)
2. クラウドサーバー、レンタルサーバー、VPSの違い
3. PHPのFWの種類と特徴