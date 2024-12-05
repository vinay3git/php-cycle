<?php
$conn = mysql_connect("localhost","root","web123");
mysql_select_db("student");

if(!$conn){
 	die("cant connect".mysql_connect_error());
}

$id = $_POST["userid"];
$pass = $_POST["password"];

$sql = "select * from student where id = $id and password =  '$pass'";
$result = mysql_query($sql);
$query = mysql_fetch_assoc($result);

if($query){
	//header("location: welcome.php");
	echo "login success";
}
else{
  	echo "login error";
 
}

?>
