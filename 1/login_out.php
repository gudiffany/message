<?php
session_start();
if(isset($_POST['submit1']))
{
    session_destroy();
    setcookie('Auth', 1 , time()-3600);
    $_SESSION["username"]="";
    $_COOKIE["Auth"]="";
    header ('Location: login.php');
}
?>