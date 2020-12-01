
<?php
// is_writable=書き込みができる if文なので書き込みができればtrue
// fopen=対象のファイルを開く
// wは完全上書き aにすると追記になる rは読み込み
// fwrite=書き込み 第一関数で開いたtxtに書き込んでいる
// fclose=ファイルを閉じる

    $testFile = "test.txt";
    $contents = "こんにちは！";
    
    if (is_writable($testFile)) {
        // 書き込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($testFile, "w");
        // 対象のファイルに書き込む
        fwrite($fp, $contents);
        // ファイルを閉じる
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!";
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }
    ?>
    <br>
    <?php
    // is_readable=is_writableと逆で読み込みができるか if文だから読み込み可能ならtrue
    // fgetは１行ずつ読み込み 
    // while文は処理をループさせるので今回はfgetがループしてる
    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        // 読み込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($test_file, "r");
        // 開いたファイルから1行ずつ読み込む
        while ($line = fgets($fp)) {
            // 改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        // ファイルを閉じる
        fclose($fp);
    } else {
        // 読み込み不可のときの処理
        echo "not readable!";
        exit;
    }
?>
<br>
<!-- 課題 -->
<?php
$kakikomi ="test.txt";
$iphone ="アイフォン12";

    if (is_writable($kakikomi)){
        $f = fopen($kakikomi,"w");
        fwrite($f,$iphone);
        fclose($f);
        echo "書き込めたよ";
    } else {
        echo "書き込めてないよ";
        exit;
    }
?>
<br>
<?php
$apple = "test2.txt";

    if (is_readable($apple)) {
        $g = fopen($apple,"r");
        while($watch = fgets($g)){
            echo "$watch". '<br>';
        }
    } else {
        echo "読み取れてないよ";
        exit;
    }
?>