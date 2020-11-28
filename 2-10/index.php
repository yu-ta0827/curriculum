<?php
// function getTriangleArea($base, $height) {
//     $area = $base * $height / 2;
//     print "三角形の面積は".$area."だよ。";
// }

// // 1)
// getTriangleArea(10,5);
// // 2)
// getTriangleArea(15,8);
// // 3)
// getTriangleArea(8,6);
?>

<?php
// function sayHi($name = "goto") {
//     // 関数の中で定義する変数 => ローカル変数
//     $myname = "php";
//     return "Hi! ".$name." from ".$myname;
// }

// echo sayHi();
?>

<?php
// 意味ローカル変数 functionないでは上書きされているが、{}からでて結果を出すとrubyに戻る
// $myname = "ruby";

// function sayHi($name = "goto") {
//     // 関数の中で定義する変数 => ローカル変数
//     $myname = "php";
//     return "Hi! ".$name." from ".$myname;
// }

// echo sayHi();
// echo '<br>';
// echo $myname;
?>

<!-- 課題内容 -->
<?php
function getTriangleArea($tate,$yoko,$takasa){
    $area = $tate * $yoko * $takasa;
    print "直方体の体積は".$area."です";
}

getTriangleArea(5,10,8);
?>