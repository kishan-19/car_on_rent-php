<?php
    $cookieName =$_COOKIE["name"];
    setcookie("name",$cookieName,time());
    header('Location:login.php');
    exit();
?>
