<div class="card">
  <!-- Card header -->
  <div class="card-header">
    <h3 class="mb-0">Data Akreditasi</h3>
  </div>
  <div class="container">
    <div class="table-responsive py-4">
      <table class="table table-flush" id="data-akreditasi">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>File C1</th>
            <th>File C2</th>
            <th>File C3</th>
            <th>File C4</th>
            <th>File C5</th>
            <th>File C6</th>
            <th>File C7</th>
            <th>File C8</th>
            <th>File C9</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
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
                      LEFT JOIN c9 ON tb_akreditasi.c9_id = c9.id";
          $query = mysqli_query($link, $sql);
          $no = 1;
          while ($hasil = mysqli_fetch_array($query)) :
          ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $hasil['nama']; ?></td>
              <td><?php if ($hasil['file_c1'] == NULL) { echo "<h5> Belum Upload </h5>";}else{echo $hasil['file_c1'];}?></td>
              <td><?php if ($hasil['file_c2'] == NULL) { echo "<h5> Belum Upload </h5>";}else{echo $hasil['file_c2'];}?></td>
              <td><?php if ($hasil['file_c3'] == NULL) { echo "<h5> Belum Upload </h5>";}else{echo $hasil['file_c3'];}?></td>
              <td><?php if ($hasil['file_c4'] == NULL) { echo "<h5> Belum Upload </h5>";}else{echo $hasil['file_c4'];}?></td>
              <td><?php if ($hasil['file_c5'] == NULL) { echo "<h5> Belum Upload </h5>";}else{echo $hasil['file_c5'];}?></td>
              <td><?php if ($hasil['file_c6'] == NULL) { echo "<h5> Belum Upload </h5>";}else{echo $hasil['file_c6'];}?></td>
              <td><?php if ($hasil['file_c7'] == NULL) { echo "<h5> Belum Upload </h5>";}else{echo $hasil['file_c7'];}?></td>
              <td><?php if ($hasil['file_c8'] == NULL) { echo "<h5> Belum Upload </h5>";}else{echo $hasil['file_c8'];}?></td>
              <td><?php if ($hasil['file_c9'] == NULL) { echo "<h5> Belum Upload </h5>";}else{echo $hasil['file_c9'];}?></td>
              <td>
                <a class="btn btn-sm btn-default" href="javascript:hapusData_akreditasi('<?= $hasil['id']; ?>')">
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
