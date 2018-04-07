<?php 
	$link = mysqli_connect('localhost','root','','fyp');
	$sql = "SELECT fa,fq FROM faq";
	$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$question[]= $row['fq'];
		$answer[] = $row['fa'];
	}
	include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
 ?>