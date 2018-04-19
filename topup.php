<?php
  include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
	$link = mysqli_connect('localhost','root','','fyp');
	if(isset($_POST['top'])){
		$id = $_SESSION['id'];
		$amt = $_POST['amt'];
		if($topup = mysqli_query($link,"UPDATE user SET amount=amount+'$amt' WHERE `uid`='$id'")){
			echo "<script>alert('top-up succesfully');window.location.replace('topup.php')</script>";
		}
	} 
 ?>