<html>

<head>
	<title>GuestBook</title>
</head>
<body>
	<center>
		
	<div class = "span4 well">
	<div class = "well span3"><h3><font face = "Adobe Caslon Pro Bold" >Post New Message</font></h3></div>
	<div class = "well span3">
	<form method = "POST" action = "code.php" name = "mailling">
	<div>
	Name:
	<input type = "text" name = "name" autofocus>
	</div>
	<div>
	Email:
	<input type = "text" name = "email" >
	</div>
	<div>
	Message:
	<textarea name = "message" ></textarea>	
	</div>
	<div>
		<input type = "submit" value = "POST Message"></td></tr>
	</form>

	<a href="mid.php">	<input type = "button" value = "View Messages"></a>
	</div>
	</div>
	</div>
	</center>
</body>
</html>