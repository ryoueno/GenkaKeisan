<?php

require_once('common/common.php');
$db = connectDB();
mysql_query('SET NAMES utf8');
$id = ctype_digit($_POST['id']) ? $_POST['id'] : null;
$sql = "UPDATE items SET views = views+1 WHERE id =".$id.";";
$result = mysql_query($sql);
