<?php 
include_once '../layouts/top.php';
// Mengambil data dari URL
$id = $_GET['id'];
// Mengambil data berdasarkan ID pengguna
$edit_paramedik = "SELECT * FROM paramedik WHERE id = $id";
$query_edit = $conn->query($edit_paramedik);
$row = $query_edit->fetch_assoc();
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Data Paramedik</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item"><a href="data_pasien.php">Data Paramedik</a></li>
						<li class="breadcrumb-item active">Edit Paramedik</li>
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
							<h3 class="card-title">Data Paramedik</h3>
							<div class="card-tools">
							</div>
						</div>
						<div class="card-body">
							<form method="post" action="update_paramedik.php" class="row p-3 g-3 needs-validation" novalidate>
                            <input type="hidden" name="id" value="<?=$row['id']  ?>">    
								<div class="mb-3 row">
									<label for="nama" class="col-sm-3 form-label">Nama Paramedik:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="nama" name="nama" required value="<?= $row['nama'] ?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-sm-3 me-4">Jenis Kelamin :</label>
									<div class="col-sm-1">
										<input class="form-check-input" type="radio" name="gender" id="L" value="L" <?= ($row['gender']=='L')? 'Checked':'' ?>/>
									</div>
									<label class="form-check-label col-sm-2 form-label" for="L" style="margin-left: -5vw;">Laki-Laki</label>
									<div class="col-sm-1">
										<input class="form-check-input" type="radio" name="gender" id="P" value="P" <?= ($row['gender']=='P')?'Checked':'' ?>/>
									</div>
									<label class="form-check-label col-sm-2 form-label" for="P"style="margin-left: -5vw;">Perempuan</label>
								</div>
								<div class="mb-3 row">
									<label for="tmp_lahir" class="col-sm-3 form-label">Tempat Lahir :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required value="<?= $row['tmp_lahir'] ?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="tgl_lahir" class="col-sm-3 form-label">Tanggal Lahir :</label>
									<div class="col-sm-9">
										<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="<?= $row['tgl_lahir'] ?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="kategori" class="col-sm-3 form-label">Kategori :</label>
									<div class="col-sm-9">
										<select class="form-select" aria-label="Default select example" name="kategori" id="kategori" required>
											<option  <?=($row['kategori']=='perawat')?'selected':''?>>Perawat</option>
											<option  <?=($row['kategori']=='teknisi medis')?'selected':''?>>Teknisi Medis</option>
											<option  <?=($row['kategori']=='asisten medis')?'selected':''?>>Asisten Medis</option>
											<option <?=($row['kategori']=='terapis fisik')?'selected':''?>>Terapis Fisik</option>
											<option  <?=($row['kategori']=='terapis okupasi')?'selected':''?>>Terapis Okupasi</option>
										</select>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="telpon" class="col-sm-3 col-form-label">Telepon :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="telpon" name="telpon" required value="<?= $row['telpon'] ?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="alamat" class="form-label col-sm-3">Alamat</label>
									<div class="col-sm-9">
										<textarea class="form-control" id="alamat" name="alamat" rows="2" required><?= $row['alamat'] ?></textarea>
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
<?php include_once '../layouts/bottom.php' ?>
