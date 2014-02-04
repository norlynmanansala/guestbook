<?php 
	mysql_connect("localhost","root","") && mysql_select_db("message") or die("error");
	
	$id = $_GET['id'];
	$query = "UPDATE messages SET is_approved = 'Y' WHERE id ={$id}";
	$result = mysql_query($query);	
	echo "<script>alert('Message Approved!!');window.location.href='back.php';</script>";
 ?>