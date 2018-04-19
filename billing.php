<?php
	$link = mysqli_connect('localhost','root','','fyp');
	$sql = mysqli_query($link,"SELECT `uid`,`uname`,`Amount` FROM user");
	$row = mysqli_fetch_all($sql);
	if(isset($_POST['edit'])){
		$amt = $_POST['amt'];
		$id = $_POST['id'];
		if(mysqli_query($link,"UPDATE user SET `Amount`='$amt'")){
			echo "<script>alert('update successfully');window.location.replace('billing.php');</script>";
		}
	}
  include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
 ?>