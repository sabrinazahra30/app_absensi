<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:admin.php");

	}else if($data['level']=="guru"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "guru";
		header("location:admin.php");

	}else if($data['level']=="sekretaris"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "sekretaris";
		header("location:admin.php");

	}else if($data['level']=="siswa"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
		header("location:admin.php");
	}else{

		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>