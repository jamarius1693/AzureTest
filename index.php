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
echo 'wololo2';
// test our connection
if ($db->connect_errno) {
    die ('Connection Failed :'.$db->connect_error );
    echo 'wololoERROR';
}

$topicID=5;
$result =mysql_query('select topicName from topics where topicID=5');


echo $result;
?>