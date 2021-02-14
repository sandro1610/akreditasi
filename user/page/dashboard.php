<?php
$user_id = $_SESSION['id'];
$sql = "SELECT * FROM tb_akreditasi 
                LEFT JOIN tb_user ON tb_akreditasi.user_id_akre = tb_user.id
                LEFT JOIN c1 ON tb_akreditasi.c1_id = c1.id
                LEFT JOIN c2 ON tb_akreditasi.c2_id = c2.id
                LEFT JOIN c3 ON tb_akreditasi.c3_id = c3.id
                LEFT JOIN c4 ON tb_akreditasi.c4_id = c4.id
                LEFT JOIN c5 ON tb_akreditasi.c5_id = c5.id
                LEFT JOIN c6 ON tb_akreditasi.c6_id = c6.id
                LEFT JOIN c7 ON tb_akreditasi.c7_id = c7.id
                LEFT JOIN c8 ON tb_akreditasi.c8_id = c8.id
                LEFT JOIN c9 ON tb_akreditasi.c9_id = c9.id
                WHERE user_id_akre = '$user_id'";
$query = mysqli_query($link, $sql);
while ($hasil = mysqli_fetch_array($query)) :
?>
  <div class="row pb-1">
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">File C1</h3>
              <?php if ($hasil['file_c1'] == NULL) {?>
                <a class="btn btn-sm-1 btn-default" href="?p=c1">UPLOAD FILE</a>
              <?php }else {?>
                <a target="blank" class="btn btn-sm-1 btn-default" href="../upload/c1/<?= $hasil['file_c1']; ?>"><?= $hasil['file_c1']; ?></a>
             <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">File c2</h3>
              <?php if ($hasil['file_c2'] == NULL) {?>
                <a class="btn btn-sm-1 btn-default" href="?p=c2">UPLOAD FILE</a>
              <?php }else {?>
                <a target="blank" class="btn btn-sm-1 btn-default" href="../upload/c2/<?= $hasil['file_c2']; ?>"><?= $hasil['file_c2']; ?></a>
             <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row pb-1">
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">File c3</h3>
              <?php if ($hasil['file_c3'] == NULL) {?>
                <a class="btn btn-sm-1 btn-default" href="?p=c3">UPLOAD FILE</a>
              <?php }else {?>
                <a target="blank" class="btn btn-sm-1 btn-default" href="../upload/c3/<?= $hasil['file_c3']; ?>"><?= $hasil['file_c3']; ?></a>
             <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">File c4</h3>
              <?php if ($hasil['file_c4'] == NULL) {?>
                <a class="btn btn-sm-1 btn-default" href="?p=c4">UPLOAD FILE</a>
              <?php }else {?>
                <a target="blank" class="btn btn-sm-1 btn-default" href="../upload/c4/<?= $hasil['file_c4']; ?>"><?= $hasil['file_c4']; ?></a>
             <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row pb-1">
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">File c5</h3>
              <?php if ($hasil['file_c5'] == NULL) {?>
                <a class="btn btn-sm-1 btn-default" href="?p=c5">UPLOAD FILE</a>
              <?php }else {?>
                <a target="blank" class="btn btn-sm-1 btn-default" href="../upload/c5/<?= $hasil['file_c5']; ?>"><?= $hasil['file_c5']; ?></a>
             <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">File c6</h3>
              <?php if ($hasil['file_c6'] == NULL) {?>
                <a class="btn btn-sm-1 btn-default" href="?p=c6">UPLOAD FILE</a>
              <?php }else {?>
                <a target="blank" class="btn btn-sm-1 btn-default" href="../upload/c6/<?= $hasil['file_c6']; ?>"><?= $hasil['file_c6']; ?></a>
             <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row pb-1">
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">File c7</h3>
              <?php if ($hasil['file_c7'] == NULL) {?>
                <a class="btn btn-sm-1 btn-default" href="?p=c7">UPLOAD FILE</a>
              <?php }else {?>
                <a target="blank" class="btn btn-sm-1 btn-default" href="../upload/c7/<?= $hasil['file_c7']; ?>"><?= $hasil['file_c7']; ?></a>
             <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">File c8</h3>
              <?php if ($hasil['file_c8'] == NULL) {?>
                <a class="btn btn-sm-1 btn-default" href="?p=c8">UPLOAD FILE</a>
              <?php }else {?>
                <a target="blank" class="btn btn-sm-1 btn-default" href="../upload/c8/<?= $hasil['file_c8']; ?>"><?= $hasil['file_c8']; ?></a>
             <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="d-flex justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">File C9</h3>
              <?php if ($hasil['file_c9'] == NULL) {?>
                <a class="btn btn-sm-1 btn-default" href="?p=c9">UPLOAD FILE</a>
              <?php }else {?>
                <a target="blank" class="btn btn-sm-1 btn-default" href="../upload/c9/<?= $hasil['file_c9']; ?>"><?= $hasil['file_c9']; ?></a>
             <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php endwhile; ?>