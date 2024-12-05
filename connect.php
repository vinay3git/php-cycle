<?php

$conn = mysql_connect("localhost","root","web123");
mysql_select_db("student");

if(!$conn)
{
 die("cant connect".mysql_connect_error());
}

?>
