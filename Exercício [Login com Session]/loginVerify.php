<?php
    $user = $_POST['txtUser'];
    $password = $_POST['txtPassword'];
    $error = false;

    if(($user == 'adm') && ($password == '123')){
        session_start();
        $_SESSION['usernameSession'] = $user;
        $_SESSION['passwordSession'] = $password;
        header("Location: RestricArea/indexRestric.php");
    }else{
        header("Location: index.php");
        $error = true;
    }
?>