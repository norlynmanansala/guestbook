	<?php 
	mysql_connect("localhost","root","") && mysql_select_db("message") or die("error");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mess = $_POST['message'];
	$app = "N";

	$query = "INSERT INTO messages(name, email, message,date_posted, is_approved) VALUES ('$name', '$email','$mess',current_date, '$app')";
	$sql = mysql_query($query);

	if($sql){
		echo "<script>alert('New Data Inserted!!');window.location.href='front.php'</script>";
		
	}else{
		echo 'errr';
	}
	 ?>