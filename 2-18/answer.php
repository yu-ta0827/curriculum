
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
$my_name =$_POST['my_name'];

?>
<link rel="stylesheet" href="totonoe.css">
<div><!--POST通信で送られてきた名前を表示--><?php echo $my_name;?> さんの結果は・・・？</div>
<div>①の答え</div>
<!--作成した関数を呼び出して結果を表示-->
<div>

<?php
$answer = $_POST["answer1"];
if($answer === "80"){
    echo "正解！";
}else{
    echo "残念・・・";
}
?>
</div>
<div>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->

<?php
$answer = $_POST["answer2"];
if($answer === "HTML"){
    echo "正解！";
}else{
    echo "残念・・・";
}
?>
</div>
<div>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
$answer = $_POST["answer3"];
if($answer === "select"){
    echo "正解！";
}else{
    echo "残念・・・";
}
?>
</div>
