<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- データベースのusersから２つの名前だけを取って表示させたいクラス -->
<?php
require("getData2.php");
    class getdata_name{
        public $sql_name;
        public $users_data;

        public function users_name(){
            $sql_name = "select * from users where last_name ='隼田' and first_name ='翔伍'";
            $pdo =DB_connect();
            try{
                $smtm =$pdo->prepare($sql_name);
                $smtm->execute();
            }catch(PDOException $e){
                echo 'error'.$e->getmessage();
            }
        }

        
    }
// sql文で名前二つを表示させたいけどうまく表示されない・・・
$user_name = new getdata_name();
$user_name->users_name();

    ?>



<!-- なぜか表示されない・・・ -->
aaaaaaaa

<?= 
require("getData2.php");
var_dump($users_data) ?>
</body>
</html>








