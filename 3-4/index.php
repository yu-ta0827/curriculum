<?php
require("getData2.php");

    class getdata{
        $sql_name = "select * from users where last_name ='隼田' and first_name ='翔伍'"
        $pdo =DB_connect();
        try{
            $smtm =$pdo->prepare($sql_name)
            $smtm->execute();
        }catch{
            $e->getmessage;
        }

        
    }
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>