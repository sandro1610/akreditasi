<?php
$user_id = $_SESSION['id'];
if (isset($_POST["Submit"])) {
  $tgl = date("Y-m-d");
  
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTmp_name = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('pdf', 'jpg');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 100000000) {
        $date = date('d-M-Y H-i-s');
        $fileNewName = $user_id . ' ' . $date . '.' . $fileActualExt;
        $fileDestination = '../upload/c1/' . $fileNewName;
        move_uploaded_file($fileTmp_name, $fileDestination);
        $sql = mysqli_query($link, "INSERT INTO c1 (id, user_id, file_c1, tgl_upload) VALUES ( 
              '',
              '$user_id',
              '$fileNewName',
              '$tgl')");
        if ($sql) {
          echo "<script>alert('Data Saved Successfully');</script>";
          echo "<script>window.location='?p=dashboard';</script>";
        } else {
          echo "<script>alert('Data Failed to Save');</script>";
        }
      } else {
        echo "<script>alert('Your file is too big !!');</script>";
      }
    } else {
      echo "<script>alert('Thare is an error in your file !!');</script>";
    }
  } else {
    echo "<script>alert('Sorry, pdf, jpg files are only allowed');</script>";
  }
}
?>

<div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="mb-0">Upload File C1</h3>
      </div>
    </div>
  </div>
  <?php
  $query = mysqli_query($link, "SELECT * FROM c1 
                               INNER JOIN tb_user ON c1.user_id = tb_user.id 
                               WHERE user_id = $user_id");
  $hasil = mysqli_fetch_array($query);
  ?>
  <form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="card-body">
      <div class="form-group row">
        <label for="file" class="col-sm-3 text-left control-label col-form-label">File</label>
        <div class="col-md-6">
          <?php if ($query != NULL) { ?>
            <input type="text" class="form-control" disabled value="<?= $hasil['file_c1'];?>">
          <?php }else { ?>
            <input type="file" name="file" class="form-control" accept="application/pdf" />
          <?php } ?>
        </div>
      </div>
      <div class="border-top">
        <div class="card-body">
          <?php if ($query != NULL) { ?>
            <a class="btn btn-primary" href="../download.php?filename=<?=$hasil['file_c1']?>">Download</a>
          <?php }else { ?>
            <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
          <?php } ?>  
        </div>
      </div>
    </div>
  </form>
</div>