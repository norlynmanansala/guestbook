<?php 
	include "config.php";
	$output = new MessageDAO();
	$row = $output->getAllMessages();
?>
<html>

<head>
	<title>GuestBook</title>
</head>

<body>
	<div class = "span11 well">
		<div class = "span10 well">
			<center><h3><font face = "Adobe Caslon Pro Bold">Message(s)</font></h3></center>
		</div>
		<div>
			<div >
				<div >
					<?php
								 if( $row['is_approved']  == ('Y')){
								?>

					<div class = "span1 well" >
						<div class = "span2 well">
							<?=$row['name']?><br>
							<?=$row['date_posted']?>
						</div>
						<div class = "span5 well">
							<?=$row['message']?>
						</div>
					

					</div>
					<?php
					}else{
							
						}
					
					}}else{
						echo "no record";
					}

					?>
					<a href="front.php"><input type = "submit" value = "Back" ></a>
					<a href="back.php"><input type = "submit" value = "View Message Data" ></a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>