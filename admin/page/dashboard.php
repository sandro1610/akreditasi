<div class="card">
  <!-- Card header -->
  <div class="card-header">
    <h3 class="mb-0">Data Akreditasi</h3>
  </div>
  <div class="container">
    <a class="btn btn-md btn-success" href="report_akreditasi.php" target="_blank">Print</a>
    <div class="table-responsive py-4">
      <table class="table table-flush" id="data-akreditasi">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
            <th>C6</th>
            <th>C7</th>
            <th>C8</th>
            <th>C9</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM tb_akreditasi 
                      INNER JOIN tb_user ON tb_akreditasi.user_id = tb_user.id
                      INNER JOIN c1 ON tb_akreditasi.c1_id = c1.id
                      INNER JOIN c2 ON tb_akreditasi.c2_id = c2.id
                      INNER JOIN c3 ON tb_akreditasi.c3_id = c3.id
                      INNER JOIN c4 ON tb_akreditasi.c4_id = c4.id
                      INNER JOIN c5 ON tb_akreditasi.c5_id = c5.id
                      INNER JOIN c6 ON tb_akreditasi.c6_id = c6.id
                      INNER JOIN c7 ON tb_akreditasi.c7_id = c7.id
                      INNER JOIN c8 ON tb_akreditasi.c8_id = c8.id
                      INNER JOIN c9 ON tb_akreditasi.c9_id = c9.id";
          $query = mysqli_query($link, $sql);
          $no = 1;
          while ($hasil = mysqli_fetch_array($query)) :
          ?>
            <tr>
              <td>
                <a href="#" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $hasil['no_ticket']; ?>">Detail</a>
                <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo $hasil['no_ticket']; ?>" role="dialog">
                  <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="modal-title-default">Detail</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body p-0">
                        <div class="card bg-secondary shadow border-0">
                          <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" method="POST" enctype="multipart/form-data">
                              <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">No Ticket</label>
                                <div class="col-sm-6">
                                  <input class="form-control" readonly type="text" value="<?= $hasil['no_ticket'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Tanggal</label>
                                <div class="col-sm-6">
                                  <input class="form-control" readonly type="text" value="<?= $hasil['tgl_prob'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Nama</label>
                                <div class="col-sm-6">
                                  <input class="form-control" readonly type="text" value="<?= $hasil['nama'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Section</label>
                                <div class="col-sm-6">
                                  <input class="form-control" readonly type="text" value="<?= $hasil['section'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Service</label>
                                <div class="col-sm-6">
                                  <input class="form-control" readonly type="text" value="<?= $hasil['name_service'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">akreditasi</label>
                                <div class="col-sm-6">
                                  <textarea readonly type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="akreditasi"><?= $hasil['akreditasi']; ?></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Item</label>
                                <div class="col-sm-6">
                                  <input class="form-control" readonly type="text" value="<?= $hasil['name_item'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Item</label>
                                <div class="col-sm-6">
                                  <input class="form-control" readonly type="text" value="<?= $hasil['email'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Status</label>
                                <div class="col-sm-6">
                                  <input class="form-control" readonly type="text" value="<?php
                                                                                          if ($hasil['status'] < 1) {
                                                                                            echo "Draft";
                                                                                          } elseif ($hasil['status'] == 1) {
                                                                                            echo "New Request";
                                                                                          } elseif ($hasil['status'] == 2) {
                                                                                            echo "Approved";
                                                                                          } elseif ($hasil['status'] == 3) {
                                                                                            echo "Proccessing";
                                                                                          } elseif ($hasil['status'] == 4) {
                                                                                            echo "Finish";
                                                                                          } else {
                                                                                            echo "Rejected";
                                                                                          }
                                                                                          ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="file" class="col-sm-3 text-left control-label col-form-label">File</label>
                                <div class="col-md-6">
                                  <a download="<?= $hasil['attachment']; ?>" href="upload/akreditasi/<?= $hasil['attachment']; ?>"><?= $hasil['attachment']; ?></a>
                                </div>
                              </div>
                              <div class="text-center">
                                <a class="btn btn-danger" href="javascript:hapusData_akreditasi('<?= $hasil['no_ticket']; ?>')">Delete</a>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-form<?php echo $hasil['no_ticket']; ?>">Edit</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td><?= $no++ ?></td>
              <td><?= $hasil['nama']; ?></td>
              <td><?= $hasil['file_c1']; ?></td>
              <td><?= $hasil['file_c2']; ?></td>
              <td><?= $hasil['file_c3']; ?></td>
              <td><?= $hasil['file_c4']; ?></td>
              <td><?= $hasil['file_c5']; ?></td>
              <td><?= $hasil['file_c6']; ?></td>
              <td><?= $hasil['file_c7']; ?></td>
              <td><?= $hasil['file_c8']; ?></td>
              <td><?= $hasil['file_c9']; ?></td>
              <td><?php
                  if ($hasil['status'] < 1) {
                    echo "Draft";
                  } elseif ($hasil['status'] == 1) {
                    echo "New Request";
                  } elseif ($hasil['status'] == 2) {
                    echo "Approved";
                  } elseif ($hasil['status'] == 3) {
                    echo "Proccessing";
                  } elseif ($hasil['status'] == 4) {
                    echo "Finish";
                  } else {
                    echo "Rejected";
                  }
                  ?></td>
              <td>
                <a href="#" type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-form<?php echo $hasil['no_ticket']; ?>">
                  <i class='fas fa-pencil-alt' style="color: gray;"></i>
                </a>
                |
                <a class="btn btn-sm btn-default" href="javascript:hapusData_akreditasi('<?= $hasil['no_ticket']; ?>')">
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
<!-- modal edit -->
  <div class="modal fade" id="modal-form<?php echo $hasil['no_ticket']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="modal-title-default">Edit akreditasi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body p-0">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="POST" enctype="multipart/form-data">
                <input hidden name="no_ticket" value="<?php echo $hasil['no_ticket']; ?>">
                <div class="form-group row">
                  <label for="fname" class="col-sm-3 text-left control-label col-form-label">akreditasi</label>
                  <div class="col-sm-6">
                    <textarea type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="akreditasi"><?= $hasil['akreditasi'] ?></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <button type="Submit" class="btn btn-primary my-4" name="Edit" data-toggle="modal" data-target="#modal-form1">Edit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>