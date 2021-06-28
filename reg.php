<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="web.css">
	<h2 class="h">WELCOME TO WEB</h2>
</head>
<body id="b">
	<div id="d">
		<form action="reg.php" method="post">
			
			<b>
			<label>USERNAME: </label></b>
			<input type="text" name="name" id="form" placeholder="ENTER NAME" required><br><br>

			<b><label>USER-EMAIL: </label></b>
			<input type="email" name="email" id="form" placeholder="ENTER EMAIL" required><br><br>

			<b><label>PASSWORD: </label></b>
			<input type="password" name="pass" id="form" placeholder="ENTER PASSWORD" required><br><br>

			<b><label>CONFIRM-PASSWORD: </label></b>
			<input type="password" name="cpass" id="form" placeholder="REPEAT-PASSWORD" required><br><br>

			<div>
			<input type="submit" name="reg" id="button" value="SignUp" ><br><br>

			<a href="login.php"><input type="button" name="back" id="button" value="BACK TO LOGIN" ></a>
		    </div>

		</form>

		<?php
			if(isset($_POST['reg'])){
				$name=$_POST['name'];
				$email=$_POST['email'];
				$pa1=$_POST['pass'];
				$pa2=$_POST['cpass'];

				if($pa1===$pa2){
					$que="select * from user where email='$email' ";

					$query=mysqli_query($con,$que);
					$re=mysqli_num_rows($query);

					if($re>0){
						?>
							<script>
								alert("EMAAIL ALREAADDY EXIST");
								window.location.href="login.php";
							</script>
							<?php
					}
					else{
						$ique="insert into user(name,email,password)values('$name','$email','$pa1')";
						$iquery=mysqli_query($con,$iquery);

						if($iquery){
							?>
							<script>
								alert("INERTION SUCCESS");
								window.location.href="home.php";
							</script>
							<?php
						}
						else{
							?>
							<script>
								alert("INERTION CONNECTION FAILED");
								window.location.href="reg.php";
							</script>
							<?php
						}
					}
				}

				else{
					?>
							<script>
								alert("PASSWORD NOT MATCH");
								window.location.href="reg.php";
							</script>
							<?php
				}
			}
		?>
	</div>
</body>
</html>