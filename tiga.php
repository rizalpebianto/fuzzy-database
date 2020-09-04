<?php
include 'koneksi.php';

$atribut1 = $_POST['a_1'];
$atribut2 = $_POST['a_2'];
$atribut3 = $_POST['a_3'];

$operator1 = $_POST['o_1'];
$operator2 = $_POST['o_2'];

if ($atribut1 == 'm_sedikit' || $atribut1 == 'm_normal1' || $atribut1 == 'm_banyak') 
{
  $temp1 = "rokok_hari";
    $field1 = "Banyak Rokok (/hari)";
    if ($atribut1 == 'm_sedikit') { $field2 = "DK Sedikit"; }
    if ($atribut1 == 'm_normal1') { $field2 = "DK Normal"; }
    if ($atribut1 == 'm_banyak') { $field2 = "DK Banyak"; }
}

if ($atribut2 == 'm_sedikit' || $atribut2 == 'm_normal1' || $atribut2 == 'm_banyak') 
{
  $temp2 = "rokok_hari";
    $field3 = "Banyak Rokok (/hari)";
    if ($atribut2 == 'm_sedikit') { $field4 = "DK Sedikit"; }
    if ($atribut2 == 'm_normal1') { $field4 = "DK Normal"; }
    if ($atribut2 == 'm_banyak') { $field4 = "DK Banyak"; }
}

if ($atribut3 == 'm_sedikit' || $atribut3 == 'm_normal1' || $atribut3 == 'm_banyak') 
{
  $temp3 = "rokok_hari";
    $field5 = "Banyak Rokok (/hari)";
    if ($atribut3 == 'm_sedikit') { $field6 = "DK Sedikit"; }
    if ($atribut3 == 'm_normal1') { $field6 = "DK Normal"; }
    if ($atribut3 == 'm_banyak') { $field6 = "DK Banyak"; }
}

if ($atribut1 == 'm_remaja' || $atribut1 == 'm_dewasa') 
{
  $temp1 = "usia_awal";
    $field1 = "Usia Awal Merokok";
    if ($atribut1 == 'm_remaja') { $field2 = "DK Remaja"; }
    if ($atribut1 == 'm_dewasa') { $field2 = "DK Dewasa"; }
}

if ($atribut2 == 'm_remaja' || $atribut2 == 'm_dewasa') 
{
  $temp2 = "usia_awal";
    $field3 = "Usia Awal Merokok";
    if ($atribut2 == 'm_remaja') { $field4 = "DK Remaja"; }
    if ($atribut2 == 'm_dewasa') { $field4 = "DK Dewasa"; }
}

if ($atribut3 == 'm_remaja' || $atribut3 == 'm_dewasa') 
{
  $temp3 = "usia_awal";
    $field5 = "Usia Awal Merokok";
    if ($atribut3 == 'm_remaja') { $field6 = "DK Remaja"; }
    if ($atribut3 == 'm_dewasa') { $field6 = "DK Dewasa"; }
}

if ($atribut1 == 'm_hemat' || $atribut1 == 'm_normal2' || $atribut1 == 'm_boros') 
{
  $temp1 = "biaya";
    $field1 = "Biaya (/bulan)";
    if ($atribut1 == 'm_hemat') { $field2 = "DK Hemat"; }
    if ($atribut1 == 'm_normal2') { $field2 = "DK Normal"; }
    if ($atribut1 == 'm_boros') { $field2 = "DK Boros"; }
}

if ($atribut2 == 'm_hemat' || $atribut2 == 'm_normal2' || $atribut2 == 'm_boros')
{
  $temp2 = "biaya";
    $field3 = "Biaya (/bulan)";
    if ($atribut2 == 'm_hemat') { $field4 = "DK Hemat"; }
    if ($atribut2 == 'm_normal2') { $field4 = "DK Normal"; }
    if ($atribut2 == 'm_boros') { $field4 = "DK Boros"; }
}

if ($atribut3 == 'm_hemat' || $atribut3 == 'm_normal2' || $atribut3 == 'm_boros')
{
  $temp3 = "biaya";
    $field5 = "Biaya (/bulan)";
    if ($atribut3 == 'm_hemat') { $field6 = "DK Hemat"; }
    if ($atribut3 == 'm_normal2') { $field6 = "DK Normal"; }
    if ($atribut3 == 'm_boros') { $field6 = "DK Boros"; }
}

if ($operator1 == 'AND' && $operator2 == 'AND')
{
    $data = $koneksi->query("SELECT id, nama, ".$temp1.", ".$temp2.", ".$temp3.", ".$atribut1.", ".$atribut2.",".$atribut3.", LEAST(".$atribut1.",".$atribut2.") AS hasil1, LEAST(LEAST(".$atribut1.",".$atribut2."),".$atribut3.") hasil2 FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu");
}

if ($operator1 == 'OR' && $operator2 == 'OR')
{
    $data = $koneksi->query("SELECT id, nama,  ".$temp1.", ".$temp2.", ".$temp3.", ".$atribut1.", ".$atribut2.",".$atribut3.", GREATEST(".$atribut1.",".$atribut2.") AS hasil1, GREATEST(GREATEST(".$atribut1.",".$atribut2."),".$atribut3.") hasil2 FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu");
}

if ($operator1 == 'AND' && $operator2 == 'OR')
{
		$data = $koneksi->query("SELECT id, nama,  ".$temp1.", ".$temp2.", ".$temp3.", ".$atribut1.", ".$atribut2.",".$atribut3.", LEAST(".$atribut1.",".$atribut2.") AS hasil1, GREATEST(LEAST(".$atribut1.",".$atribut2."),".$atribut3.") hasil2 FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu");
}

if ($operator1 == 'OR' && $operator2 == 'AND')
{
    $data = $koneksi->query("SELECT id, nama,  ".$temp1.", ".$temp2.", ".$temp3.", ".$atribut1.", ".$atribut2.",".$atribut3.", GREATEST(".$atribut1.",".$atribut2.") AS hasil1, LEAST(GREATEST(".$atribut1.",".$atribut2."),".$atribut3.") hasil2 FROM mahasiswa NATURAL JOIN atribut NATURAL JOIN miu");
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
              <th><?php echo "$field1"; ?></th>
              <th><?php echo "$field3"; ?></th>
              <th><?php echo "$field5"; ?></th>
              <th><?php echo "$field2"; ?></th>
              <th><?php echo "$field4"; ?></th>
              <th>Hasil <?php echo "$operator1"; ?> </th>
              <th><?php echo "$field6"; ?></th>
              <th>Hasil <?php echo "$operator2"; ?> </th>
              
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $mhs): ?>
              <tr>              
                <td align="justify-content-center" width="15px"><?= $mhs['id'];?></td>
                <td width="250px"><?= $mhs['nama'];?></td>
                <td align="center" width="30px"><?= $mhs[$temp1];?></td>
                <td align="center" width="30px"><?= $mhs[$temp2];?></td>
                <td align="center" width="30px"><?= $mhs[$temp3];?></td>
                <td align="center" width="30px"><?= $mhs[$atribut1];?></td>
                <td align="center" width="30px"><?= $mhs[$atribut2];?></td>
                <td align="center" width="30px"><?= $mhs['hasil1'];?></td>
                <td align="center" width="30px"><?= $mhs[$atribut3];?></td>
                <td align="center" width="30px"><?= $mhs['hasil2'];?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>