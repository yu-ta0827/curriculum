<?php
// データベースとユーザー情報の呼び出し
require("getData2.php");

// getData2のクラスgetDataからfunctionのgetUserDataを持ってきてから$users_data1に入れている
$getData = new getData();
$users_data1 = $getData->getUserData();
// getData2のクラスgetDataからfunctionのgetPostDataを持ってきてから$users_data2に入れている
$getData = new getData();
$users_data2 = $getData->getpostData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- ヘッダー -->
    <div id ="wapper">
        <div class ="header">
            <img src="file:/Applications/MAMP/htdocs/LetsEngineer/curriculum/3-4/1599315827_logo.png" alt="logo">
            <div class ="header_right">
                <div class ="header_right_top">ようこそ <?=$users_data1['last_name'].$users_data1['first_name']?> さん</div>
                <div class ="header_right_bot">最終ログイン日 : <?=$users_data1['last_login'];?></div>
            </div>
        </div>
    <!-- メイン -->   
        <div class ="main">    
            <table>
                <!-- テーブルのタイトル -->
                <tr>
                    <th>記事ID</th>
                    <th>タイトル</th>
                    <th>カテゴリ</th>
                    <th>本文</th>
                    <th>投稿日</th>
                </tr>
                <!-- $user_data2から一つずつ整列した状態でレコードを出し切るまで続けるループ文 -->
                <?php    while ($row = $users_data2->fetch(PDO::FETCH_ASSOC)) {?>
                <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['title']?></td>
                    <td>
                        <?php 
                            if($row['category_no'] == '1') {
                                echo '食事';
                            } elseif($row['category_no'] == '2') {
                                echo '旅行';
                            } else {
                                echo 'その他';
                            }
                            ?>
                    </td>
                    <td><?= $row['comment']?></td>
                    <td><?= $row['created']?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    <!-- フッター -->   
        <div class ="footer">Y&I gropu.inc</div>
    </div>

    
</body>
</html>