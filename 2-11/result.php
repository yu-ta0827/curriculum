<!-- ＄_POSTまたは$_GET 送られてくるページによってかえる
内容を確認する場合はvar_dump(確認したいもの)を入れればわかる
※コメント表記にしたいため<とphpの間にアスタリスクを入れている-->

<!-- <*php
$my_name = $_POST['my_name'];
$password = $_POST['password'];
?>
<p>私の名前は、<*?php echo $my_name; ?></p>
<p>私のパスワードは、<*?php echo $password; ?></p> -->


<?php
$my_name = $_POST['my_name'];
$mail = $_POST['mail'];
$password = $_POST['password'];
?>

<p>私の名前は、<?php echo $my_name; ?></p>
<p>メールアドレスは、<?php echo $mail; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>

