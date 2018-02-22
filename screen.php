<?php

$myHeight = "Your Screen Width is " .  $_POST['width'];
$myWidth = 'Your Screen Heigth is ' . $_POST['height'];
$myUser = $_SERVER['HTTP_USER_AGENT'];

echo nl2br("$myHeight \n");
echo nl2br("$myWidth \n");
echo $myUser;

?>
