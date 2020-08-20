<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
 
	<div class="login">
		<h3 style="text-align: center">Menu login</h3>
 
		<form action="login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" placeholder="Password" required="required">
 
			<center><input type="submit" class="tombol" value="Login"></center>
 
			<br/>
			<br/>
		</form>
		
	</div>
 
 
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>