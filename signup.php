<?php
	$link = mysqli_connect('localhost','root','','fyp');
	$sql1 = "SELECT * FROM state";
	$sresult = mysqli_query($link,$sql1);
	while($srow = mysqli_fetch_assoc($sresult)){
		$state[] = $srow;
	}
	if(isset($_POST['register'])){
		$username = htmlentities($_POST['uname']);	
		$firstname = htmlentities($_POST['fname']);	
		$lastname = htmlentities($_POST['lname']);	
		$ic = htmlentities($_POST['ic']);	
		$password = htmlentities(password_hash($_POST['pass'],PASSWORD_DEFAULT));	
		$phone = htmlentities($_POST['phone']);	
		$add1 = htmlentities($_POST['add1']);	
		$add2 = htmlentities($_POST['add2']);	
		$state = htmlentities($_POST['state']);	
		$sql = "INSERT INTO user VALUES(NULL,'$username','$firstname','$lastname','$ic','$password','$phone','$add1','$add2','$state',0)";

		if($result = mysqli_query($link,$sql)){
			echo "<script>alert('created successfully')</script>";
		}else{
			echo "<script>alert('".mysqli_error($link)."')</script>";
		}
	}
  	include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
 ?>