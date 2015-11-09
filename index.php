<?php
/**
 * Created by PhpStorm.
 * User: 1208470
 * Date: 09/11/2015
 * Time: 15:27
 */
$db = new mysqli(
    "eu-cdbr-azure-west-c.cloudapp.net",
    "ba3185d0da41b9",
    "814afc85",
    "firsttry1693" );
echo 'wololo';
// test our connection
if ($db->connect_errno) {
    die ('Connection Failed :'.$db->connect_error );
    echo 'wololoERROR';
}

$section = $_GET['section'];
echo $_GET['section'];
?>