
<?php
require 'minium_log.php';
$mid=$_GET['mid'];
$sno=mysql_real_escape_string($_GET['mid'])or die("bolo");
$image=mysql_query("SELECT * FROM `Manager_DB` WHERE `mid`='$mid'") or die(mysql_error());
$image=mysql_fetch_assoc($image);
$image=$image['img_dp'];
header("Content-type: image/jpeg");
echo $image;
?>