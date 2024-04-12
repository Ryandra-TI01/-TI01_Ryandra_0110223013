<?php include_once '../layouts/top.php';
$id = $_GET['id'];
// Mengambil data berdasarkan ID pengguna
$edit_catatan_pasien = "SELECT * FROM periksa WHERE pasien_id = $id";
$query_catatan = $conn->query($edit_catatan_pasien);
$row_catatan = $query_catatan->fetch_assoc();

// Mengambil data berdasarkan ID periksa
$id_dokter=$row_catatan['dokter_id'];
$edit_paramedik = "SELECT * FROM paramedik WHERE id = '$id_dokter' ";
$query_paramedik = $conn->query($edit_paramedik);
$row_paramedik = $query_paramedik->fetch_assoc();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Form Catatan Pasien</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../pasien/data_pasien.php">Data Pasien</a></li>
						<li class="breadcrumb-item"><a a href="../catatan_pasien/data_periksa_pasien.php?id=<?=$id ?>">Catatan Pasien</a></li>
						<li class="breadcrumb-item active">Form Catatan Pasien</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- Default box -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Form Catatan Pasien</h3>
							<div class="card-tools">
								<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
									<i class="fas fa-times"></i>
								</button> -->
							</div>
						</div>
						<div class="card-body">
							<form method="post" action="update_periksa_pasien.php" class="row p-3 g-3 needs-validation" novalidate>
							<input type="hidden" name="dokter_id" value="<?= $id_dokter ?>">
							<input type="hidden" name="pasien_id" value="<?= $id ?>">
							<div class="mb-3 row">
									<label for="dokter_id" class="col-sm-3 form-label">Nama Paramedik :</label>
									<div class="col-sm-9">
										<select class="form-select" aria-label="Default select example" name="dokter_id" id="dokter_id" required>
											<?php foreach ($query_2 as $key => $value) : ?>
												<option value="<?= $value['id'] ?>" <?=($id_dokter == $value['id'])?'selected':'' ?>><?= $value['nama'] ?></option>
											<?php endforeach  ?>
										</select>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="tanggal" class="col-sm-3 form-label">Tanggal Konsultasi :</label>
									<div class="col-sm-9">
										<input type="date" class="form-control" id="tanggal" name="tanggal" required value="<?= $row_catatan['tanggal'] ?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="berat" class="col-sm-3 form-label">berat :</label>
									<div class="col-sm-9">
										<input type="number" class="form-control" id="berat" name="berat" required value="<?= $row_catatan['berat'] ?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="tinggi" class="col-sm-3 form-label">tinggi :</label>
									<div class="col-sm-9">
										<input type="number" class="form-control" id="tinggi" name="tinggi" required value="<?= $row_catatan['tinggi'] ?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="tensi" class="col-sm-3 form-label">tensi :</label>
									<div class="col-sm-9">
										<input type="number" class="form-control" id="tensi" name="tensi" required value="<?= $row_catatan['tensi'] ?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="keterangan" class="form-label col-sm-3">Keterangan</label>
									<div class="col-sm-9">
										<textarea class="form-control" id="keterangan" name="keterangan" rows="2" required><?= $row_catatan['keterangan'] ?></textarea>
									</div>
								</div>
								<div class="mb-3 row">
									<div class="col-3"></div>
									<div class="col d-grid gap-2">
										<button type="submit" class="btn text-light" style="background-color: #468088;">Submit</button>
									</div>
								</div>
							</form>
						</div>
						<!-- /.card-body -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once '../layouts/bottom.php'?>