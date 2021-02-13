<?php
 include '../includes/conn.php';
     session_start();
 if (empty($_SESSION['email']) && empty($_SESSION['password']) && empty($_SESSION['id'])){
    header("Location:../index.php");
  }
$html='<!DOCTYPE html>
<html lang="en">
<head>
  <title>HUMAS PTBA</title>
  <meta charset="utf-8">
</head>
<body>
<img height="40px" src="../assets/img/logo.png"> 
<h2 align="center">Laporan Daftar Peserta PKL PT. Bukit Asam</h2>
	<table align="center" border="1" cellpadding="10" cellspacing="0">
          <thead>
              <tr style="border: solid;" border="3">
			  <th>NO</th>
			  <th>Nama</th>
			  <th>NIM</th>
			  <th>Jurusan</th>
			  <th>Asal Universitas</th>
			  <th>Tgl masuk</th>
			  <th>Tgl Keluar</th>
              </tr>
          </thead>
		  <tbody>';
		  $no = 0;
		  $sql = "SELECT * FROM tb_mahasiswa";
          $query = mysqli_query($link, $sql);
          while ($hasil = mysqli_fetch_array($query)) {
				$no++;
            $html .='<tr>
            	  <td>'.$no.'</td>
	              <td>'.$hasil['nama'].'</td>
	              <td>'.$hasil['nim'].'</td>
	              <td>'.$hasil['jurusan'].'</td>
	              <td>'.$hasil['univ'].'</td>
	              <td>'.$hasil['tgl_masuk'].'</td>
	              <td>'.$hasil['tgl_selesai'].'</td>
	               </tr>';
	               }
         $html .='</tbody>
      </table>
</body>
</html>';


// Require composer autoload
require_once __DIR__ . '../../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf(['orientation' => 'P', 'format' => 'A4']);

// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output('Laporan_Problem_ISDS.pdf', 'I');