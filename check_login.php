<?php
/**
 * Created by PhpStorm.
 * User: 1208470
 * Date: 02/11/2015
 * Time: 13:48
 */
var $username = "suchUser";
var $password = "123456";
$myusername=trim($_POST["myusername"]);
$mypassword=trim($_POST["mypassword"]);
if (($myusername==$username) && ($mypassword==$password))
{
    echo "Login successful!";
    setcookie("access_level","standarduser");
    header("Location: homepage.php");
    exit();
}
else
{
    echo "Wrong Username or Password";
}
?>