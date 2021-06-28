
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="web.css">
	<h2 class="h">WELCOME TO HOME PGE</h2>
</head>
<body id="b">
	<div id="d">
		<form action="home.php" method="post">
			
			

			

			<div>
			<input type="submit" name="logout" id="button" value="LOG-OUT" ><br><br>

			

		</form>
	</div>

	<?php

		include 'config.php';

		if(isset($_POST['logout'])){
			
				?>
				<script>
				alert("YOU ARE LOGGED OUT");
				window.location.href='login.php';</script>
				<?php
			}
		
	?>
</body>
</html>