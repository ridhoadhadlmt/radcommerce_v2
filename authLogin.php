<?php
session_start();

include 'koneksi.php';
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
	$login = mysqli_query($koneksi,$sql);
	$row = mysqli_num_rows($login);

	if($login > 0){
		$cek = mysqli_fetch_assoc($login);
		if($cek['level'] == 'admin')
		{	
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;	
			$_SESSION['level'] = 'admin';
			header('location:admin/');
		}
		else if($cek['level'] == 'customer')
		{
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['level'] = 'customer';
			header('location:index.php');
		}
		
	}
	else{
		// echo $sql;
		header('location:login.php?pesan=gagal');
	}
}

?>