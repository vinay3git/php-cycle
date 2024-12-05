<?php
	$conn = mysqli_connect("localhost","root","","student");
	//mysql_select_db("student");

	if(!$conn){
		die("failed to connect".mysqli_connect_error());
	}
	else{
		echo" success";
	}


	$uname= $_POST["uname"];
	$names = $_POST["name"];
	$state = $_POST["state"];
	$mail = $_POST["email"];
	$pass = $_POST["pass"];

	$sql = "insert into student ('uname', 'name', 'state', 'mail', 'password') values('$uname','$names','$state','$mail','$pass')";

	$result = mysqli_query($sql);

	if($result){
		echo" insert :success";
		header("location: stud-login.php");
	}
	else{
		echo "not inserted";
	}
?>
