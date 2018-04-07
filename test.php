<?php 
	$link = mysqli_connect('localhost','root','','fyp');
	$sql = "SELECT * FROM state";
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_all($result);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<select>
 		<?php 
	 		foreach($row as $r){
	 			echo "<option value='$r[0]'>$r[1]</option>";
	 		}
 		 ?>
 	</select>
 </body>
 </html>