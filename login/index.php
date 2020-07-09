<?php  
	session_start();
	if (isset($_SESSION['login'])) {
		header("location: ../");
	}
	include "../connection.php";

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$pass = $_POST['pass'];

		$query = "SELECT * FROM tbl_users WHERE (nik = '$username' or email = '$username') AND password = '$pass'";
		$result = mysqli_query($con, $query);
		if ($data = mysqli_num_rows($result) == 0) {
			$pesan = "Username or Password Invalid";
		} else {
			$_SESSION['login'] = mysqli_fetch_assoc($result);
			header("location: ../");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">


<style>
	* {
		box-sizing: border-box;
		font-size: 16px;
	}

	.login100-form {
		margin-top: 40px;
		height: 200px;
	}

	.wrap-login100 {
		box-shadow: 6px -4px 14px black, -6px 4px 14px black;
		box-shadow: 6px -12px 20px black, -6px 15px 14px black;
		height: 429px;
		position: relative;
	}

	.input-sty {
		/*background-color: red;*/
		margin-bottom: 30px;
		text-align: left;
		/*box-shadow: 6px -4px 14px black;*/
		position: relative;
	}
	
	.input-sty input::placeholder {
		color: white;
	}

	.input-sty input {
		background-color: #4c343042;
		color: white;
		border-radius: 4px;
		font-size: 16px;
		padding: 3px 10px;
		height: 50px;
		width: 100%;
		transition: .3s;
	}

	.input-sty input:focus + label,
	.input-sty input:valid + label
	 {
		padding-left: 15px;
		opacity: 0;
		visibility: hidden;
	}/*

	.input-sty input:focus {
		border-bottom: 1px solid white !important;
	}*/

	.input-sty label {
		transition: .3s;
		cursor: text;
		position: absolute;
		height: 50px;
		top: 0;
		line-height: 50px;
		padding-left: 10px;
		color: #b3b3b3;
		font-size: 16px;
	}

	.btn {
		border: 0px solid transparent;
		width: 90%;
		border-radius: 4px !important;
		position: absolute !important;
		bottom: 40px;
		transition: .3s;
		position: relative;
	}

	.btn::after {
		position: absolute;
		content: "LOGIN";
		line-height: 16px;
		width: 100%;
		border-radius: 4px !important;
		background: -webkit-linear-gradient(left, red, black, #fa4299);
		background: -webkit-linear-gradient(left, #636bc5, #c36188, #da832c);
		padding: 13px 0;
		background-color: red;
		opacity: 0;
		transition: .3s;
	}

	.btn:hover:after {
		opacity: 1;
	}

	.pesan {
		background-color: #ffcbd3;
		padding: 4px 8px;
		color: #e2435c;
		margin-top: 12px;
	}
</style>
	<!-- <link rel="stylesheet" type="text/css" href="css/util.css"> -->
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../asset/images/bg.jpg');">
			<div class="wrap-login100 py-3" style="padding: 20px; background-color: rgba(0,0,0,.3);">
				<span class="login100-form-title pb-4 pt-3">
					Account Login
				</span>
				
				<?php
					if (isset($pesan)) {
				?>
						<p class="pesan">
							Username or Password Invalid
						</p>
				<?php
					}
				?>
		

				<form class="login100-form validate-form" style="background-color: transparent;" method="POST">


					<div class="input-sty" data-validate = "Enter username">
						<input class="" type="text" name="username" id="username" required="">
						<label for="username">Email or NIK</label>
					</div>

					<div class="input-sty" data-validate="Enter password">
						<input class="" type="password" name="pass" id="pass" required="">
						<label for="pass">Password</label>
					</div>

					<div class="container-login100-form-btn mt-4">
						<button class="login100-form-btn btn" name="login">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/select2/select2.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/daterangepicker/moment.min.js"></script> -->
	<!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>