<?php

if(isset($_POST["submit"]))
{
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
}

// contr
include "dbh.classes.php";
include "login.classes.php";
include "login-contr.classes.php";

$login = new LoginContr($uid, $pwd);

$login -> loginUser();

header("location:welkom.php");