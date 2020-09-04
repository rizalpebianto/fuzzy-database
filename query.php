k<?php
include '_header.php';
?>

	
<div class="queryForm">
	<ul  class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Satu Atribut</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Dua Atribut</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tiga Atribut</a>
		</li>
	</ul>




	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			<div class="container">
				<div class="card card-body">

						<form action="satu.php" method="POST">
							<h3><span class="ukuranBadge badge badge-secondary mb-1">Satu Atribut</span></h3>

							<span class="ukuranBadge badge badge-secondary mb-1">Banyak Rokok (/hari)</span> 
							<input type="radio" name="a" id="myCheckRokok" onclick="myFunction()">
							<select id="inputStateRokok" style="display: none;" class="form-control" name="pilihan1">
								<option selected>Pilih..</option>
								<option value="m_sedikit">Sedikit</option>
								<option value="m_normal1">Normal</option>
								<option value="m_banyak">Banyak</option>						
							</select><br>


							<span class="ukuranBadge badge badge-secondary mb-1">Umur</span> 
							<input type="radio" name="a" id="myCheckUmur" onclick="myFunction()">
							<select id="inputState" style="display: none;" class="form-control" name="pilihan">
								<option selected>Pilih..</option>
								<option value="m_remaja">Remaja</option>
								<option value="m_dewasa">Dewasa</option>						
							</select><br>


							<span class="ukuranBadge badge badge-secondary mb-1">Biaya (/Bulan)</span> 
							<input type="radio" name="a" id="myCheckBiaya" onclick="myFunction()">
							<select id="inputStateBiaya" style="display: none;" class="form-control" name="pilihan2">
								<option selected>Pilih..</option>
								<option value="m_hemat">Hemat</option>
								<option value="m_normal2">Normal</option>
								<option value="m_boros">Boros</option>						
							</select><br>

							<button type="submit" name="tampil" class="btn btn-danger mt-4">Submit</button>
						</form>
					</div>
				</div>
			</div>


		<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><div class="container">
			<div class="card card-body">
				<div class="mt-4">
					<form action="dua.php" method="POST">
						<h5><span class="badge badge-secondary mb-1">Atribut 2</span></h5>

						<span class="badge badge-secondary mb-1">Atribut 1 :</span><br>
						<select class="form-control" name="atribut_1">
							<option selected>Pilih..</option>
							<option value="m_sedikit">Banyak Rokok (/hari) - Sedikit</option>
							<option value="m_normal1">Banyak Rokok (/hari) - Normal</option>
							<option value="m_banyak">Banyak Rokok (/hari) - Banyak</option>
							<option value="m_remaja">Usia Awal Merokok - Remaja</option>
							<option value="m_dewasa">Usia Awal Merokok - Dewasa</option>
							<option value="m_hemat">Biaya (/bulan) - Hemat</option>
							<option value="m_normal2">Biaya (/bulan) - Normal</option>
							<option value="m_boros">Biaya (/bulan) - Boros</option>						
						</select><br>


						<span class="badge badge-secondary mb-1">Operator :</span><br>
						<select class="form-control" name="operator_1">
							<option selected>Pilih..</option>
							<option value="AND">AND</option>
							<option value="OR">OR</option>						
						</select><br>


						<span class="badge badge-secondary mb-1">Atribut 2 :</span><br>
						<select class="form-control" name="atribut_2">
							<option selected>Pilih..</option>
							<option value="m_sedikit">Banyak Rokok (/hari) - Sedikit</option>
							<option value="m_normal1">Banyak Rokok (/hari) - Normal</option>
							<option value="m_banyak">Banyak Rokok (/hari) - Banyak</option>
							<option value="m_remaja">Usia Awal Merokok - Remaja</option>
							<option value="m_dewasa">Usia Awal Merokok - Dewasa</option>
							<option value="m_hemat">Biaya (/bulan) - Hemat</option>
							<option value="m_normal2">Biaya (/bulan) - Normal</option>
							<option value="m_boros">Biaya (/bulan) - Boros</option>					
						</select><br>

						<button type="submit" name="tampil" class="btn btn-danger mt-4">Submit</button>
					</form>
				</div>
			</div>
		</div></div>


		<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><div class="container">
			<div class="card card-body">
				<div class="mt-4">
					<form action="tiga.php" method="POST">
						<h5><span class="badge badge-secondary mb-1"></span></h5>

						<span class="badge badge-secondary mb-1">Atribut 1 :</span><br>
						<select class="form-control" name="a_1">
							<option selected>Pilih..</option>
							<option value="m_sedikit">Banyak Rokok (/hari) - Sedikit</option>
							<option value="m_normal1">Banyak Rokok (/hari) - Normal</option>
							<option value="m_banyak">Banyak Rokok (/hari) - Banyak</option>
							<option value="m_remaja">Usia Awal Merokok - Remaja</option>
							<option value="m_dewasa">Usia Awal Merokok - Dewasa</option>
							<option value="m_hemat">Biaya (/bulan) - Hemat</option>
							<option value="m_normal2">Biaya (/bulan) - Normal</option>
							<option value="m_boros">Biaya (/bulan) - Boros</option>						
						</select><br>


						<span class="badge badge-secondary mb-1">Operator 1 :</span><br>
						<select class="form-control" name="o_1">
							<option selected>Pilih..</option>
							<option value="AND">AND</option>
							<option value="OR">OR</option>						
						</select><br>


						<span class="badge badge-secondary mb-1">Atribut 2 :</span><br>
						<select class="form-control" name="a_2">
							<option selected>Pilih..</option>
							<option value="m_sedikit">Banyak Rokok (/hari) - Sedikit</option>
							<option value="m_normal1">Banyak Rokok (/hari) - Normal</option>
							<option value="m_banyak">Banyak Rokok (/hari) - Banyak</option>
							<option value="m_remaja">Usia Awal Merokok - Remaja</option>
							<option value="m_dewasa">Usia Awal Merokok - Dewasa</option>
							<option value="m_hemat">Biaya (/bulan) - Hemat</option>
							<option value="m_normal2">Biaya (/bulan) - Normal</option>
							<option value="m_boros">Biaya (/bulan) - Boros</option>					
						</select><br>

						<span class="badge badge-secondary mb-1">Operator 2 :</span><br>
						<select class="form-control" name="o_2">
							<option selected>Pilih..</option>
							<option value="AND">AND</option>
							<option value="OR">OR</option>						
						</select><br>

						<span class="badge badge-secondary mb-1">Atribut 3 :</span><br>
						<select class="form-control" name="a_3">
							<option selected>Pilih..</option>
							<option value="m_sedikit">Banyak Rokok (/hari) - Sedikit</option>
							<option value="m_normal1">Banyak Rokok (/hari) - Normal</option>
							<option value="m_banyak">Banyak Rokok (/hari) - Banyak</option>
							<option value="m_remaja">Usia Awal Merokok - Remaja</option>
							<option value="m_dewasa">Usia Awal Merokok - Dewasa</option>
							<option value="m_hemat">Biaya (/bulan) - Hemat</option>
							<option value="m_normal2">Biaya (/bulan) - Normal</option>
							<option value="m_boros">Biaya (/bulan) - Boros</option>					
						</select><br>


						<button type="submit" name="tampil" class="btn btn-danger mt-4">Submit</button>
					</form>
				</div>
			</div>
		</div></div>
	</div>
</div>


<?php include '_footer.php'; ?>