
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
$my_name =$_POST['my_name'];
$my_answer1 =$_POST['my_answer1'];
$my_answer2 =$_POST['my_answer2'];
$my_answer3 =$_POST['my_answer3'];


?>
<link rel="stylesheet" href="totonoe.css">
<div><!--POST通信で送られてきた名前を表示--><?php echo $my_name;?> さんの結果は・・・？</div>
<div>①の答え</div>
<!--作成した関数を呼び出して結果を表示-->
<div>

<?php
$answer = $_POST["answer1"];
if($answer === "$my_answer1"){
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
if($answer === "$my_answer2"){
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
if($answer === "$my_answer3"){
    echo "正解！";
}else{
    echo "残念・・・";
}
?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- functionは１行目にまず引数が入り、その後のかっこの中で処理される
そのため、１行目の引数と関数の処理の中身を変えてしまっては動かない 
1,送られた答えanswer1~3は-->

<?php
$answer1 = $_POST["answer1"];
$answer2 = $_POST["answer2"];
$answer3 = $_POST["answer3"];
function answer($answer,$key){
    if($answer === $key){
        echo "正解！";
        echo "<br>";
    }else{
        echo "残念・・・";
        echo "<br>";
    }
}
?>

<div>
<div>①の答え</div>
<br>
<?=answer($answer1,"80");?>
<br>
<div>②の答え</div>
<br>
<?=answer($answer2,"HTML");?>
<br>
<div>③の答え</div>
<br>
<?=answer($answer3,"select");?>
</div>



