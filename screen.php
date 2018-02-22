<?php

$myHeight = nl2br('Your Screen Width is \r' .  $_POST['width']);
$myWidth = 'Your Screen Heigth is ' . $_POST['height'];


echo nl2br($myHeight);
echo $myWidth;

?>
