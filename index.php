<!DOCTYPE html>
<html>
<head>
	<title>Sign in | MY FURNITURE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/awe/font-awesome.min.css">
</head>
<body>
	<div id="wrapper">
	
			<div id="log-in-box"><br>
				<center><h1 class="h-colore">Sign in</h1></center>
				<form action="check_login.php" method="POST">
  					<input type="text" placeholder='Username' required='' type='text' name="name_member" pattern="^[a-zA-Z0-9-_\.]{1,20}$">
  					<input type="password" placeholder='Password' required='' type='text' name="password" pattern="^[a-zA-Z0-9-_\.]{1,11}$">
  					<br>
  					<br>
  					<center><input type="submit" id="blue-btn" value="Sign in"><br>OR<br>
  						<button id="face-btn"><i class="fa fa-facebook"></i>&nbsp;&nbsp; Login with Facebook</button>
  						<br><br>
  						<div>Don't have account <a href="register.php" class="h-colore ">Sign up</a> now </div>
  					</center>
  					<br>	
				</form>
			</div>

					

	</div><!-- end wrapper -->

</body>
</html>