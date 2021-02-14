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
        $fileDestination = '../upload/c5/' . $fileNewName;
        move_uploaded_file($fileTmp_name, $fileDestination);
        $sql = mysqli_query($link, "INSERT INTO c5 (id, user_id, file_c5, tgl_upload) VALUES ( 
              '',
              '$user_id',
                '$fileNewName',
                '$tgl')");
        if ($sql) {
          $select = mysqli_fetch_array(mysqli_query($link, "SELECT id FROM c5 WHERE user_id = '$user_id'"));
          $query = mysqli_query($link, "SELECT user_id_akre FROM tb_akreditasi WHERE user_id_akre = '$user_id'");
          $cek = mysqli_num_rows($query);
          $id_c5 = $select['id'];
          if ($cek == 1) {
             $update = mysqli_query($link, "UPDATE `tb_akreditasi` SET `c5_id`= '$id_c5' WHERE user_id_akre = '$user_id'");
             echo "<script>alert('Data Saved Successfully');</script>";
             echo "<script>window.location='?p=dashboard';</script>";
          }elseif ($cek == 0) {
            $insert = mysqli_query($link, "INSERT INTO tb_akreditasi (id, user_id_akre, c5_id) VALUES ('', '$user_id', '$id_c5')");
            echo "<script>alert('Data Saved Successfully');</script>";
            echo "<script>window.location='?p=dashboard';</script>";
          }else {
            echo "<script>alert('Data Tidak Masuk');</script>";
          }
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
$query = mysqli_query($link, "SELECT * FROM c5 WHERE user_id = '$user_id'");
$data=mysqli_fetch_array($query);
if ($data == NULL) {
?>
<div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="mb-0">Upload File c5</h3>
      </div>
    </div>
  </div>
    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
      <div class="card-body">
              <div class="form-group row">
                  <label for="file" class="col-sm-3 text-left control-label col-form-label">File</label>
                  <div class="col-md-6">
                      <input type="file" name="file" class="form-control">
                  </div>
              </div>  
              <div class="border-top">
                  <div class="card-body">
                      <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                  </div>
              </div>
      </div>
    </form>
</div>  
<?php }else{ ?>
  <div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="mb-0">File c5</h3>
      </div>
    </div>
  </div>
    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
      <div class="card-body">
              <div class="form-group row">
                  <label for="file" class="col-sm-3 text-left control-label col-form-label">File</label>
                  <div class="col-md-6">
                      <input type="text" name="file" value="<?= $data['file_c5']; ?>" class="form-control">
                  </div>
              </div>  
              <div class="border-top">
                  <div class="card-body">
                  <a target="blank" class="btn btn-sm-1 btn-default" href="../upload/c5/<?= $data['file_c5']; ?>">View</a>
                  </div>
              </div>
      </div>
    </form>
</div>
<?php } ?>