<div class="card">
  <!-- Card header -->
  <div class="card-header">
    <h3 class="mb-0">Data C5</h3>
  </div>
  <div class="container">
    <div class="table-responsive py-4">
      <table class="table table-flush" id="data-c5">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>File</th>
            <th>Tgl Upload</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM c5
                  LEFT JOIN tb_user ON c5.user_id = tb_user.id";
          $query = mysqli_query($link, $sql);
          $no = 1;
          while ($hasil = mysqli_fetch_array($query)) :
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $hasil['nama']; ?></td>
              <td><?= $hasil['nip']; ?></td>
              <td><?= $hasil['file_c5']; ?></td>
              <td><?= $hasil['tgl_upload']; ?></td>
              <td>
                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-form">
                  <i class='fas fa-pencil-alt' style="color: gray;"></i>
                </button>
                |
                <a class="btn btn-sm btn-default" href="javascript:hapusData_c5('<?= $hasil['id']; ?>')">
                  <i class='fas fa-trash' style="color: red;"></i>
                </a>
              </td>
            </tr>
          <?php endwhile ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal Edit-->
<?php
if (isset($_POST["Edit"])) {
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
        $sql = mysqli_query($link, "UPDATE `c5` SET `file_c5` = '$fileNewName', `tgl_upload` = '$tgl' WHERE `c5`.`id` = $id");
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
  <!-- modal edit -->
  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="modal-title-default">Edit</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body p-0">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="file" name="file" class="form-control">
                  </div>
                </div>
                <div class="text-center">
                  <button type="Submit" class="btn btn-primary my-4" name="Edit" data-toggle="modal" data-target="#modal-form">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>