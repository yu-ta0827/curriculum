<?php

define('DB_DATABASE','YIGroupBlog');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('PDO_DSN','mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);



function db_connect(){
    try{
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD, [PDO::ATTR_EMULATE_PREPARES=>false]);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e){
        echo "error".$e->getMessage();
        die();
    }
}

