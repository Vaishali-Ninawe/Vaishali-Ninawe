
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="web.css">
	<h2 class="h">WELCOME TO LOG-IN</h2>
</head>
<body id="b">
	<div id="d">
		<form action="login.php" method="post">
			
			

			<b><label>USER-EMAIL: </label></b>
			<input type="email" name="email" id="form" placeholder="ENTER EMAIL" required><br><br>

			<b><label>PASSWORD: </label></b>
			<input type="password" name="pass" id="form" placeholder="ENTER PASSWORD" required><br><br>

			

			<div>
			<input type="submit" name="login" id="button" value="LOGIN" ><br><br>

			<a href="reg.php"><input type="button" name="reg" id="button" value="BACK TO REGISTRATION" ></a>
		    </div>

		</form>
	</div>

	<?php

		include 'config.php';

		if(isset($_POST['login'])){
			$email=$_POST['email'];
			$pa=$_POST['pass'];

			$ep="select * from user where email='$email' && password='$pa'";

			$res=mysqli_query($con,$ep);
			$row=mysqli_num_rows($res);
			if($row>0){
				?>
				<script>
				alert("INSERTION SUCCESSFUL");
				window.location.href='home.php';</script>
				<?php
			}
			else{
				?>
				<script>
				alert("EMAIL OR PASSWORD NOT CORRECT");
				window.location.href='reg.php';</script>
				<?php
			}
		}
	?>
</body>
</html>