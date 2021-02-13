<?php
if (isset($_GET['q'])) {
	$q = $_GET['q'];
	switch ($q) {
		case 'mahasiswa':
			if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM tb_mahasiswa WHERE id='".$id."'";
                $query  = mysqli_query($link,$sql);
                if($query){
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=mahasiswa';</script>";
                }else{
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=mahasiswa';</script>";
                }
            }
			break;
		case 'foto':
			if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM tb_foto WHERE id='".$id."'";
                $query  = mysqli_query($link,$sql);
                if($query){
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=foto';</script>";
                }else{
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=foto';</script>";
                }
            }
			break;
		case 'video':
			if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM tb_video WHERE id='".$id."'";
                $query  = mysqli_query($link,$sql);
                if($query){
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=video';</script>";
                }else{
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=video';</script>";
                }
            }
			break;
		case 'user':
			if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $sql    = "DELETE FROM tb_user WHERE id='".$id."'";
                $query  = mysqli_query($link,$sql);
                if($query){
                    echo "<script>alert('Data Successfully Deleted');</script>";
                    echo "<script>window.location='?p=dashboard';</script>";
                }else{
                    echo "<script>alert('Data Failed To Delete');</script>";
                    echo "<script>window.location='?p=dashboard';</script>";
                }
            }
			break;
		default:
			include $dir . 'blank.php';
			break;
	}
} else {
	include $dir . 'dashboard.php';
}