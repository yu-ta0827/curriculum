<?php

function check_user_logged_in(){
    session_start();

    if(empty($_SESSION["user_name"])){
        header("location: login.php");
        exit;
    }
}