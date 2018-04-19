<?php
	$link = mysqli_connect('localhost','root','','fyp');
	$plans = mysqli_fetch_all(mysqli_query($link,"SELECT * FROM plans"));
if(isset($_POST['add1'])){
		$info = array($_POST['name'],$_POST['type'],$_POST['price']);
		if($result=mysqli_query($link,"INSERT INTO plans VALUES(NULL,'$info[0]','$info[1]','$info[2]')")){
			echo "<script>alert('added');window.location.replace('admin_plans.php');</script>";
		}
	}
	if(isset($_POST['edit'])){
		$ia = array($_POST['name'],$_POST['type'],$_POST['price'],$_POST['id']);
		if(mysqli_query($link,"UPDATE plans SET `pname`='$ia[0]',`ptype`='$ia[1]',`price`='$ia[2]' WHERE `pid`='$ia[3]'")){
			echo "<script>alert('Updated');window.location.replace('admin_plans.php')</script>;";
		}else{
			echo mysqli_error($link);
		}
	}
	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		if(mysqli_query($link,"DELETE FROM plans WHERE `pid`='$id'")){
			echo "<script>alert('Deleted');window.location.replace('admin_plans.php');</script>";
		}
	}
  include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
 ?>