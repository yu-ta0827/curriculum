<!-- count（要素の数を数える） -->
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo count($members);
// => 5
?>
<br>
<!-- sort（要素の並べ替え） -->
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
sort($members);
var_dump($members);
?>
<br>
<!-- 数字だと小さい順に並ぶ -->
<?php
$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
?>
<br>
<!-- in_array（配列に中にある要素が存在しているか） -->
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
var_dump(in_array("tanaka", $members));
// in_array(調べたい文字もしくは数値, 対象の配列)
// 論理値が結果として返る => bool(true)
?>
<br>
<!-- if文でよく使う -->
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";
}
?>
<br>
<!-- implode（配列を結合して文字列に変換） -->
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
?>
<br>
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode($members);
var_dump($atstr);
// 区切り文字がいらないしただ結合したいだけならこれ！
?>
<br>
<!-- explode（文字列を指定の区切りで配列にする） -->
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo '<br>';
$re_members = explode("@", $atstr);
var_dump($re_members);
?>
<!-- implodeの逆 上は一度くっ付けているが、再度explodeで剥がしている -->
<br>
<?php
$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);
?>
<!-- こちらも文字列で１〜５がくっついてるがカンマでくぎらせている -->
<br>
<!-- 課題 -->

<?php
$dorakue =["yusya","mahoutukai","kensi"];
echo count($dorakue);
// 中身の要素は何個ですか？ ３
?>
<br>
<?php
$dorakue =["yusya","mahoutukai","kensi","asobinin"];
sort($dorakue);
var_dump($dorakue);
// 文字数ならアルファベット順になる aから始まるためasobininが最初でyusyaは最後の方になる
?>
<br>
<?php
$dorakue =[45,92,25];
sort($dorakue);
var_dump($dorakue);
// 数列の場合小さい順
?>
<br>
<?php
$dorakue =["yusya","mahoutukai","kensi","asobinin"];
if(in_array("kensi",$dorakue)){
    echo "勇者パーティーに剣士がいるよ！";
}else{
    echo "勇者パーティーに剣士はいないよ";
}
// In_arrayを使いif文で要素の中にあればtrue いなければfalse
?>
<br>
<?php
$ff =["final","fantasy","10","yaritai!"];
$atstr = implode($ff);
var_dump($atstr);
// カンマで区切っているがimplodeでくっ付けて出力している
?>
<br>
<?php
$ff ="FF10・FF13・FF14・FF16・やりたい！";
$yaru = explode("・",$ff);
var_dump($yaru);
// ただの文字列を・で区切る方法
?>