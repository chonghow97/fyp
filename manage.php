<?php 
  include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
  if(isset($_POST['update'])){
		$psw = array($_POST['opsw'],$_POST['npsw'],$_POST['cpsw']);
		$id=$_SESSION['id'];
		$pswz = mysqli_fetch_array(mysqli_query($link,"SELECT `password` from user WHERE `uid`='$id'"));		
		if(password_verify($psw[0],$pswz[0])){
			if($psw[1]===$psw[2]){
				$hash = password_hash($psw1[0],PASSWORD_DEFAULT);
				$change = mysqli_query($link,"UPDATE user SET `password`='$hash' WHERE `uid`='$id'");
				echo "<script>alert('Password changed succesfully')</script>";
			}
		}else{
			echo "<script>alert('Wrong old password')</script>";
		}
	}
 ?>