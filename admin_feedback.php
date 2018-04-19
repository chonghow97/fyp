<?php 
$link = mysqli_connect('localhost','root','','fyp');
if(isset($_POST['sub'])){
	$date = $_POST['date'];
	$sql = "SELECT `email`,`date`,`title`,`description`,`fid` FROM feedback WHERE date LIKE '$date%'";
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_all($result);
}
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql1 = "SELECT `title`,`description`,`fid` FROM feedback WHERE `fid`=$id";
	$result1 = mysqli_query($link,$sql1);
	$row1 = mysqli_fetch_array($result1);
}
if(isset($_POST['upt'])){
	$info = array($_POST['id'],$_POST['title1'],$_POST['desc']);
	if(mysqli_query($link,"UPDATE feedback SET title='$info[1]', description='$info[2]' WHERE fid='$info[0]'")){
		echo "<script>alert('update sucessful');window.location.replace('admin_feedback.php');</script>";
	}else{
		echo mysqli_error($link);
	}
}
if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	if(mysqli_query($link,"DELETE FROM feedback where fid='$id'")){
		echo "<script>alert('delete sucessfully');window.location.replace('admin_feedback.php');</script>";
	}
}
mysqli_close($link);
include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
?>