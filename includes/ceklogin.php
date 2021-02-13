<?php 
require 'conn.php';
if (isset($_POST["submit"]) ){ 
	$nip = $_POST['nip'];
	$password = $_POST['password'];
	$query = mysqli_query($link,"SELECT * FROM tb_user WHERE nip = '$nip' ");
	if (mysqli_num_rows($query) == 1) {
		if ($result = mysqli_fetch_assoc($query)) {
			if (password_verify($password, $result["password"])) {
				session_start();
					$_SESSION['id'] = $result["id"];
					$_SESSION['nip'] = $result["nip"];
	                $_SESSION['password'] = $result["password"];
	                $_SESSION['level'] = $result["level"];
					if ($_SESSION['level'] == "admin") {
						echo "<script>alert('Login Success');</script>";
						echo "<script>window.location='../admin/index.php';</script>";
					}elseif ($_SESSION['level'] == "user") {
						echo "<script>alert('Login Success');</script>";
						echo "<script>window.location='../user/index.php';</script>";
					}else {
						echo "<script>alert('User 0');</script>";
						header("Loacation: ../index.php");
					}
			}else{
				echo "<script>alert('Wrong Password');</script>";
                echo "<script>window.location='../index.php';</script>";
			}
		}
	}else{
		echo "<script>alert('User 0');</script>";
		header("Loacation: ../index.php");
	}
}
 ?>