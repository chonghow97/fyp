<?php
	if(isset($_POST['email'])){
		$link = mysqli_connect('localhost','root','','fyp');
		$email = $_POST['email'];
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$query = "INSERT INTO feedback VALUE(NULL,'$email','$title','$desc',NOW())";
		$result = mysqli_query($link,$query);
		if(!$result){
			echo mysqli_error($link);
		}else{
			echo "<script>alert('sent');window.location.replace('feedback.php')</script>;";
			mysqli_close($link);
		}
	}
	include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
 ?>