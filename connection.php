<?php
$con = mysql_connect("localhost","root","vertrigo");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("cargo management", $con);
?>
