<!-- ceil（切り上げ） -->
<?php
    // index.php
    $x = 3.1;
    echo ceil($x);
    ?>
    <br>
<!-- floor（切り捨て）-->
<?php
    // index.php
    $x = 5.2;
    echo floor($x);
    ?>
    <br>
<!--round（四捨五入）-->
<?php
    // index.php
    $x = 5.2;
    echo round($x);
    ?>
    <br>
<!--pi（円周率）-->
    <!-- index.php -->
<?php
echo pi();
    
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
    echo '<br>';    
// 半径が2の円の面積の計算
circleArea(2);
?>
<br>
<!--mt_rand（乱数）-->
     <!-- index.php -->
    <?php
    echo mt_rand(1, 100);
?>
<br>
<!-- 文字列に関する関数 -->
<!-- strlen（文字列の長さ） -->
<?php
    $str = "hogehoge";
    echo strlen($str);
    ?>
    <br>
<!-- strpos（検索）-->
<?php
    $str = "yoneyama";
    echo strpos($str, "a");
    // => 5と出力される
    ?>
    <br>
<!-- substr（文字列の切り取り） -->
<?php
    $str = "yoneyama";
    echo substr($str, -2, 2);
    // => maと出力される
    ?>
<!-- substr(対象の文字列, 開始位置, 文字数) -->
<br>
<!-- str_replace（置換） -->
<?php
    $str = "yoneyama";
    echo str_replace("neya", "NEYA", $str);
    ?>
    <br>
    <!-- str_replace(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列) -->
<?php
    $str = "I am Yoneyama";
    echo str_replace(" ", "", $str);
    ?>
<!-- 空白を無くす使い方もある -->
    <br>
<!-- 日本語において、文字列操作の関数を使用する場合 -->
<?php
    $str = "あいうえお";
    
    echo strlen($str);
    // => 15
    ?>
    <br>
<!-- 日本語はマルチバイト文字列のため mb_をつける -->
<?php
    $str = "あいうえお";
    echo mb_strlen($str);
    // => 5
    ?>
    <br>
<!-- printf（フォーマット化した文字列を出力）-->
<?php
    $name = "米山さん";
    $limit_number = 40;
    echo $name."の残り時間はあと".$limit_number."です";
    echo "<br>";
    printf("%sの残り時間はあと%dです", $name, $limit_number);
?>
<!-- %s…文字列 %d…数値 -->
<br>
<?php
    $name = "米山さん"; 
    $limit_time = 40; 
    $price = 4000; 
    printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);
?>
<br>
<!-- printf（フォーマット化した文字列を出力） -->
<?php
    $limit_hour = 20;
    $limit_minute = 10;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo '<br>';
    $limit_hour = 4;
    $limit_minute = 4;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    ?>
<!-- %02dと02を入れることで、桁数を指定することができ、空いた桁に0を自動で入れてくれます。 -->
<br>
<!-- sprintf（変数に代入できるprintf） -->
<?php
    $limit_hour = 4;
    $limit_minute = 4;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo '<br>';
    
    // sprintfだけでは出力までできない
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo $limit_time;
// echoが必要
?>
<br>

<!-- 課題 -->

<?php
    $x = 10.5;
    echo ceil($x);
    // 繰り上げられる
    echo "<br>";
    $x = 10.5;
    echo floor($x);
    // 繰り下げられる10.9だろうが１０になる
    echo "<br>";
    $x = 10.5;
    echo round($x);
    // 四捨五入される
    echo "<br>";
    echo pi();
    // 円周率
    echo "<br>";
    echo mt_rand(1, 100);
    // １から１００までが勝手に出てくる スマホガチャみたいなやつ
    echo "<br>";
    $str = "ikebukuro";
    echo strlen($str);
    // 文字の数は？ 9
    ?>
    <br>
    <?php
    $str = "japanese";
    echo strpos($str, "e");
    // eは何番目？ 0から始まるから５
    ?>
    <br>
    <?php
    $str = "macbookpro";
    echo substr($str, -3, 3);
    // 文字列の後ろから３個目を３文字出てくる pro 負の数字なら−１からスタート 正の数字なら0スタート
    ?>
    <br>
    <?php
    $str = "macbookpro";
    echo str_replace("pro", "PRO", $str);
    // proをPROに変える
    ?>
    <br>
    <?php
        $game = "FGO";
        $gatya = 100;
        $kakin = 10000;

        printf("%sで%d回ガチャを回した 出ないので%d円課金した",$game,$gatya,$kakin);
        // %sは文字列 %dは数列を入れることができる
    ?>
    <br>
    <?php
        $game = "FGO";
        $gatya = 100;
        $kakin = 10000;

        $fgoyami = sprintf("%sで%d回ガチャを回した 出ないので%d円課金した",$game,$gatya,$kakin);
        echo $fgoyami;
        // sprontfは処理だけするのでechoで出力する必要がある
        ?>