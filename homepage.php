<?php
/**
 * Created by PhpStorm.
 * User: 1208470
 * Date: 02/11/2015
 * Time: 14:00
 */
echo "<p>hello</p>";
$access_level = $_COOKIE['access_level'];
function displayAccessLevelInformation($access_level) {

    if ($access_level == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_level == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}
?>