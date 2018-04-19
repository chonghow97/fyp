<?php
	$link = mysqli_connect('localhost','root','','fyp');
	if(isset($_POST['add1'])){
		$q = $_POST['question'];
		$a = $_POST['answer'];
		if(mysqli_query($link,"INSERT INTO faq VALUES(NULL,'$q','$a')")){
			echo "<script>alert('added');window.location.replace('faq.php');</script>";
		}
	}
	$sql2 = mysqli_query($link,"SELECT * FROM faq");
	$info = mysqli_fetch_all($sql2);
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$q = $_POST['question1'];
		$a = $_POST['answer1'];
		if(mysqli_query($link,"UPDATE faq SET `fa`='$q',`fq`='$a' WHERE `fid`='$id'")){
			echo "<script>alert('Updated');window.location.replace('faq.php');</script>";
		}
	}
	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		if(mysqli_query($link,"DELETE FROM faq WHERE `fid`='$id'")){
			echo "<script>alert('Deleted');window.location.replace('faq.php');</script>";
		}
	}
	include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
 ?>