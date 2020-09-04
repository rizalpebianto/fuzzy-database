<?php
include 'koneksi.php';

$test = $_POST['pilihan'];
$test1 = $_POST['pilihan1'];
$test2 = $_POST['pilihan2'];

if ($test == "m_remaja") 
{
  $tampung = $test;
  $temp = "usia_awal";
  $field1 = "Umur Mulai Merokok";
  $field2 = "DK Remaja";
  $data = $koneksi->query("SELECT id, nama, ".$temp.", ".$tampung." FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu ORDER BY ".$tampung." DESC");
}

if ($test == "m_dewasa") 
{
  $tampung = $test;
  $temp = "usia_awal";
  $field1 = "Umur Mulai Merokok";
  $field2 = "DK Dewasa";
  $data = $koneksi->query("SELECT id, nama, ".$temp.", ".$tampung." FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu ORDER BY ".$tampung." DESC");
}

if ($test1 == "m_sedikit") 
{
  $tampung = $test1;
  $temp = "rokok_hari";
  $field1 = "Banyak Rokok (/hari)";
  $field2 = "DK Sedikit";
  $data = $koneksi->query("SELECT id, nama, ".$temp.", ".$tampung." FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu ORDER BY ".$tampung." DESC");
}

if ($test1 == "m_normal1") 
{
  $tampung = $test1;
  $temp = "rokok_hari";
  $field1 = "Banyak Rokok (/hari)";
  $field2 = "DK Normal";
  $data = $koneksi->query("SELECT id, nama, ".$temp.", ".$tampung." FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu ORDER BY ".$tampung." DESC");
}

if ($test1 == "m_banyak") 
{
  $tampung = $test1;
  $temp = "rokok_hari";
  $field1 = "Banyak Rokok (/hari)";
  $field2 = "DK Banyak";
  $data = $koneksi->query("SELECT id, nama, ".$temp.", ".$tampung." FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu ORDER BY ".$tampung." DESC");
}

if ($test2 == "m_hemat") 
{
  $tampung = $test2;
  $temp = "biaya";
  $field1 = "Biaya (/bulan)";
  $field2 = "DK Hemat";
  $data = $koneksi->query("SELECT id, nama, ".$temp.", ".$tampung." FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu");
}

if ($test2 == "m_normal2") 
{
  $tampung = $test2;
  $temp = "biaya";
  $field1 = "Biaya (/bulan)";
  $field2 = "DK Normal";
  $data = $koneksi->query("SELECT id, nama, ".$temp.", ".$tampung." FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu ORDER BY ".$tampung." DESC");
}

if ($test2 == "m_boros") 
{
  $tampung = $test2;
  $temp = "biaya";
  $field1 = "Biaya (/bulan)";
  $field2 = "DK Boros";
  $data = $koneksi->query("SELECT id, nama, ".$temp.", ".$tampung." FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu ORDER BY ".$tampung." DESC");
}
include '_header.php';
?>

<div class="container mt-3">
  <a href="query.php" class="btn btn-warning btn-sm mt-4 mb-4">Kembali</a>
  <div class="row ">
    <div class="col-12 d-flex justify-content-center">
      <div class="card">
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th><?php echo "$field1"?></th>
              <th><?php echo "$field2"?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $mhs): ?>
              <tr>              
                <td align="justify-content-center" width="15px"><?= $mhs['id'];?></td>
                <td width="300px"><?= $mhs['nama'];?></td>
                <td align="center" width="30px"><?= $mhs[$temp];?></td>
                <td align="center" width="30px"><?= $mhs[$tampung];?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php include '_footer.php'; ?>