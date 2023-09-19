<?php

if(isset($_POST["submit"]))
{
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];
}

// contr
include "dbh.classes.php";
include "signup.classes.php";
include "signup.contr.classes.php";

$signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

$signup -> signupUser();

header("location:welkom.php?error=none");