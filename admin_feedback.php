<?php 
	$link = mysqli_connect('localhost','root','','fyp');
	$sql = "SELECT `email`,`date`,`title`,`description` FROM feedback";
	$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$feedback[] = $row;
	}
	mysqli_close($link);
  include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
 ?>