<?php
$ports =["80","22","20","21"];
$langs =["PHP","Python","JAVA","HTML"];
$sqls =["join","select","insern","update"];
$my_name =$_POST['my_name'];
$ports_answer =$ports[0];
$langs_answer =$langs[3];
$sqls_answer =$sqls[1]
//POST送信で送られてきた名前を受け取って変数を作成

//①画像を参考に問題文の選択肢の配列を作成してください。

//② ①で作成した、配列から正解の選択肢の変数を作成してください
?>
<!-- スタイルシートを連携 -->
<link rel="stylesheet" href="totonoe.css">

<div>お疲れ様です<?php echo $my_name;?>さん</div>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<div>
<?php foreach($ports as $port):?>
    <form action="answer.php" method="POST">
        <input type="radio" name="answer1" value="<?=$port?>" >
     <?php echo $port?>
<?php endforeach; ?>
</div>
<!-- メンターに教えてもらったところ
・divでphp全体を囲っている
valueの部分はphpから外してるためタグをつけてphpにしている
格納されている内容が分からなければまずは,var_dumpで中身を確認する 
endforeachを使う場合は最初の変数の後に:をつける
command＋shift＋Rでページを新しくする
-->

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<div>
<?php foreach($langs as $lang):?>
    <form action="answer.php" method="POST">
        <input type="radio" name="answer2" value="<?=$lang?>" >
     <?php echo $lang?>
<?php endforeach; ?>
</div>


<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<div>
<?php foreach($sqls as $sql):?>
    <form action="answer.php" method="POST">
        <input type="radio" name="answer3" value="<?=$sql?>" >
     <?php echo $sql?>
<?php endforeach; ?>
</div>
<!-- 内容の答え
    join=内部結合 
    select=データを取得
    insern=データを追加 インサート
    update=データを更新する-->




<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<p>
<form action="answer.php" method="post">
<input type="hidden" name="my_answer1" value="<?= $ports_answer; ?>">
<input type="hidden" name="my_answer2" value="<?= $langs_answer; ?>">
<input type="hidden" name="my_answer3" value="<?= $sqls_answer; ?>">
<input type="hidden" name="my_name" value="<?= $my_name; ?>">
    <input type="submit" value="回答する">
</p>
</form>
