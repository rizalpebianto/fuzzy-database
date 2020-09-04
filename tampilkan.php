<?php

include 'koneksi.php';

$data = $koneksi->query("SELECT * FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu");

include '_header.php';
?>

<div class="container mt-3">
  <a href="" class="btn btn-warning btn-sm mt-4 mb-4">Banyaknya Rokok</a>
  <div class="row ">
    <div class="col-12 d-flex justify-content-center">
      <div class="card">
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Semester</th>
              <th>Rokok (Per Hari)</th>
              <th>DK Sedikit</th>
              <th>DK Normal</th>
              <th>DK Banyak</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $mhs): ?>
              <tr>              
                <td align="justify-content-center" width="15px"><?= $mhs['id'];?></td>
                <td width="300px"><?= $mhs['nama'];?></td>
                <td align="center" width="30px"><?= $mhs['semester'];?></td>
                <td align="center" width="30px"><?= $mhs['rokok_hari'];?></td>
                <td align="center" width="25px"><?= $mhs['m_sedikit'];?></td>
                <td align="center" width="25px"><?= $mhs['m_normal1'];?></td>
                <td align="center" width="25px"><?= $mhs['m_banyak'];?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="container mt-3">
  <a href="" class="btn btn-warning btn-sm mt-4 mb-4">Umur</a>
  <div class="row ">
    <div class="col-12 d-flex justify-content-center">
      <div class="card">
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Semester</th>
              <th>Usia mulai Merokok</th>
              <th>DK Remaja</th>
              <th>DK Dewasa</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $mhs): ?>
              <tr>              
                <td width="15px"><?= $mhs['id'];?></td>
                <td width="300px"><?= $mhs['nama'];?></td>
                <td align="center" width="30px"><?= $mhs['semester'];?></td>
                <td align="center" width="30px"><?= $mhs['usia_awal'];?></td>
                <td align="center" width="25px"><?= $mhs['m_remaja'];?></td>
                <td align="center" width="50px"><?= $mhs['m_dewasa'];?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="container mt-3">
  <a href="" class="btn btn-warning btn-sm mt-4 mb-4">Banyaknya Rokok</a>
  <div class="row ">
    <div class="col-12 d-flex justify-content-center">
      <div class="card">
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Semester</th>
              <th>Biaya (/Bulan)</th>
              <th>DK Hemat</th>
              <th>DK Normal</th>
              <th>DK Boros</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $mhs): ?>
              <tr>              
                <td width="15px"><?= $mhs['id'];?></td>
                <td width="300px"><?= $mhs['nama'];?></td>
                <td align="center" width="30px"><?= $mhs['semester'];?></td>
                <td align="center" width="30px"><?= $mhs['biaya'];?></td>
                <td align="center" width="25px"><?= $mhs['m_hemat'];?></td>
                <td align="center" width="25px"><?= $mhs['m_normal2'];?></td>
                <td align="center" width="25px"><?= $mhs['m_boros'];?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php include '_footer.php';