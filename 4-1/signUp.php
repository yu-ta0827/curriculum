<?php

// db_connect.phpの読み込みFILL_IN
require_once('db_connect.php');
// POSTで送られていれば処理実行
// nameとpassword両方送られてきたら処理実行
// PDOのインスタンスを取得FILL_IN
$name = $_POST['name'];
$passowrd = $_POST['password'];
$pdo = db_connect();
try {
// SQL文の準備 FILL_IN 
    $sql = "INSERT INTO users(name, password) VALUES(':name', ':password')";
// パスワードをハッシュ化
// プリペアドステートメントの作成 FILL_IN 
    $hash = password_hash($passowrd,PASSWORD_DEFAULT);
    $stmt = $pdo->prepare($sql);
// 値をセット　FILL_IN
    $stmt->bindparam(':name', $name);
    $stmt->bindparam(':password', $hash);
// 実行 FILL_IN
    $stmt->execute();
//　登録完了メッセージ出力
    echo "登録が完了しました。";
}catch (PDOException $e) {
// エラーメッセージの出力 FILL_IN 
    echo "ERROR", $e->getMessage();
// 終了 FILL_IN
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="signUp.php">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>