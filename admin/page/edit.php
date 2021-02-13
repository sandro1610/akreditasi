<?php
include "../../includes/conn.php";
if (isset($_POST["Edit"])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $univ = $_POST['univ'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $tgl_selesai = $_POST['tgl_selesai'];
    $sql = mysqli_query($link, "UPDATE `tb_mahasiswa` SET `nama` = '$nama', `nim` = '$nim', `jurusan` = '$jurusan', `univ` = '$univ', `tgl_masuk` = '$tgl_masuk', `tgl_selesai` = '$tgl_selesai' WHERE `tb_mahasiswa`.`id` = $id");
    if ($sql) {
        echo "<script>alert('Account Successfully Registered');</script>";
        echo "<script>window.location='../index.php?p=mahasiswa';</script>";
    } else {
        echo "<script>alert('Account Failed To Registered');</script>";
    }
}else if (isset($_POST["Edit_Video"])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $sql = mysqli_query($link, "UPDATE `tb_video` SET `judul` = '$judul', `deskripsi` = '$deskripsi' WHERE `tb_video`.`id` = $id");
    if ($sql) {
        echo "<script>alert('Account Successfully Registered');</script>";
        echo "<script>window.location='../index.php?p=video';</script>";
    } else {
        echo "<script>alert('Account Failed To Registered');</script>";
    }
}else if (isset($_POST["Edit_Foto"])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $sql = mysqli_query($link, "UPDATE `tb_foto` SET `judul` = '$judul', `deskripsi` = '$deskripsi' WHERE `tb_foto`.`id` = $id");
    if ($sql) {
        echo "<script>alert('Account Successfully Registered');</script>";
        echo "<script>window.location='../index.php?p=foto';</script>";
    } else {
        echo "<script>alert('Account Failed To Registered');</script>";
    }
}