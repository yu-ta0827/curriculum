<?php


function DB_connect(){
    define('DB_DATABES','checktest4');
    define('DB_USRNAME','root');
    define('DB_PASSWORD','root');
    define('DB_DSN','mysql:host=localhost;charset=utf8;dbname='.DB_DATABES);

    try{
        $pdo = new pdo(DB_DNS.DB_USRNAME.DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCPTION)
        return $pdo;
    }catch(PDOException $e){
        $e->getmessage();
        die();
    }
    
}
