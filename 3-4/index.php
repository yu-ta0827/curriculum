<?php
// データベースとユーザー情報の呼び出し
    require("getData2.php");
// getdata2.phpのユーザー情報の特定のレコードだけど抽出するためのsql文
    $first_sql = "select first_name from users where id = 1";
    $last_sql = "select last_name from users where id = 1";
    $login_time = "select last_login from users where id = 1";


    

// ファーストネームを出す
$first_name = new getData();
// ラストネームを出す
$last_name = new getData($last_sql);
$last_name->getUserData();
// ログイン時間を出す
$time = new getData($login_time);
$time->getUserData();

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // ループ文を使用して、1行ずつ読み込んで$rowに代入する
    // 読み込むものがなくなったらループ終了
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id'] . '、' . $row['name'] . '、' . $row['password'];
        echo '<br />';
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
