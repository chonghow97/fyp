<?php 
	$link = mysqli_connect('localhost','root','','fyp');
	include "./html/".basename($_SERVER['PHP_SELF'], ".php").".html";
?>