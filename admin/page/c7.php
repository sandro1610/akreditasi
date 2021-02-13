<div class="card">
  <!-- Card header -->
  <div class="card-header">
    <h3 class="mb-0">Data c7</h3>
  </div>
  <div class="container">
    <a class="btn btn-md btn-success" href="report_c7.php" target="_blank">Print</a>
    <div class="table-responsive py-4">
      <table class="table table-flush" id="data-c7">
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
          $sql = "SELECT * FROM c7";
          $query = mysqli_query($link, $sql);
          $no = 1;
          while ($hasil = mysqli_fetch_array($query)) :
          ?>
            <tr>
              <td><?= $no++ ; ?></td>
              <td><?= $hasil['nama']; ?></td>
              <td><?= $hasil['nip']; ?></td>
              <td><?= $hasil['file_c7']; ?></td>
              <td><?= $hasil['tgl_upload']; ?></td>
              <td>
                <a href="#" type="  button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-form<?php echo $hasil['id']; ?>">
                  <i class='fas fa-pencil-alt' style="color: gray;"></i>
                </a>
                |
                <a class="btn btn-sm btn-default" href="javascript:hapusData_mahasiswa('<?= $hasil['id']; ?>')">
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
$sql = "SELECT * FROM c7";
$query = mysqli_query($link, $sql);
while ($hasil = mysqli_fetch_array($query)) : ?>
  <div class="modal fade" id="modal-form<?php echo $hasil['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="modal-title-default">Edit Mahasiswa</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body p-0">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="POST" action="page/edit.php" enctype="multipart/form-data">
                <input hidden name="id" value="<?php echo $hasil['id']; ?>">
                <div class="form-group row">
                  <label for="fname" class="col-sm-3 text-left control-label col-form-label">Nama</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="text" name="nama" value="<?php echo $hasil['nama']; ?>" id="nama">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fname" class="col-sm-3 text-left control-label col-form-label">NIM/NPM</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="nim" value="<?php echo $hasil['nim']; ?>" type="text">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lname" class="col-sm-3 text-left control-label col-form-label">Jurusan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="jurusan" value="<?php echo $hasil['jurusan']; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lname" class="col-sm-3 text-left control-label col-form-label">Asal Universitas</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="univ" value="<?php echo $hasil['univ']; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lname" class="col-sm-3 text-left control-label col-form-label">Tanggal Masuk</label>
                  <div class="col-sm-6">
                    <input type="date" class="form-control" name="tgl_masuk" value="<?php echo $hasil['tgl_masuk']; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lname" class="col-sm-3 text-left control-label col-form-label">Tanggal Keluar</label>
                  <div class="col-sm-6">
                    <input type="date" class="form-control" name="tgl_selesai" value="<?php echo $hasil['tgl_selesai']; ?>">
                  </div>
                </div>
                <div class="text-center">
                  <button type="Submit" class="btn btn-primary my-4" name="Edit">Edit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>