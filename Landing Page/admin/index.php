<?php 
date_default_timezone_set('Asia/Jakarta');
session_start();

include '../config.php';

if (isset($_SESSION['user'])) {
	echo "<script>window.location='dashboard.php' </script>";
}else{

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url(../images/dark-wood.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
				<div class="card card-signin my-5">

					<div class="card-body">
						<h5 class="card-title text-center "> Sign IN</h5>
						<?php 
						if (isset($_POST['submit'])) {
							$user = trim(mysqli_real_escape_string($koneksi, $_POST['user']));
							$pass = sha1(trim(mysqli_real_escape_string($koneksi, $_POST['pass'])));
							$sql_login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($koneksi));
							if (mysqli_num_rows($sql_login) > 0) {
								$_SESSION['user']= $user;
								echo "<script>window.location='dashboard.php' </script>";
							} else  {?>
								<div class="row">
									<div class="col-lg-12 col-lg-offset-6">
										<div class="alert alert-danger alert-dismissable" role="alert">
											<a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
											<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
											<strong>Login Gagal!</strong> username / password salah!
										</div>
									</div>
								</div>
								<?php
							}
						}

						?>

						<form class="form-signin" action="" method="POST">
							<div class="form-label-group text-center">
								<label for="inputUsername" > <p>Username</p> </label>
								<input type="text" name="user" placeholder="Username . ." class="form-control" required autofocus>
								
							</div>
							<br>
							<div class="form-label-group text-center">
								<label for="inputUsername" > <p>Password</p> </label>
								<input type="password" name="pass" placeholder="Password . ." class="form-control" required >
								
							</div>
							<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit"> Sign IN</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
}
?>
