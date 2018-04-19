<?php 
  $link = mysqli_connect('localhost','root','','fyp');
  $plan = mysqli_fetch_all(mysqli_query($link,"SELECT `pname`,`price` FROM plans"));
  include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
  if(isset($_POST['plan'])){
  	$id = $_SESSION['id'];
  	$amt = $_POST['price'];
  	if($subscribe= mysqli_query($link,"UPDATE user SET `Amount`=Amount-'$amt' WHERE `uid`='$id'")){
  		echo "<script>alert('Subscript succesfully');window.location.replace('newregister.php')</script>";
  	}else{
  		echo mysqli_error($link);
  	}
  }

 ?>
