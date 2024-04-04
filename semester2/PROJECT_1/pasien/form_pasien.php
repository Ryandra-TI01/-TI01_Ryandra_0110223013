<?php include_once '../layouts/top.php'?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Form Pengisian Data Pasien</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active">Form Pasien</li>
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
							<h3 class="card-title">Form Pengisian Data Pasien</h3>
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
							<form method="post" action="proses_pasien.php" class="row p-3 g-3 needs-validation" novalidate>
								<div class="mb-3 row">
									<label for="kode" class="col-sm-3 col-form-label">Kode :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="kode" name="kode" required />
									</div>
								</div>
								<div class="mb-3 row">
									<label for="nama" class="col-sm-3 form-label">Nama :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="nama" name="nama" required />
									</div>
								</div>
								<div class="mb-3 row">
									<label for="tmp_lahir" class="col-sm-3 form-label">Tempat Lahir :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required />
									</div>
								</div>
								<div class="mb-3 row">
									<label for="tgl_lahir" class="col-sm-3 form-label">Tanggal Lahir :</label>
									<div class="col-sm-9">
										<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required />
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-sm-3 me-4">Jenis Kelamin :</label>
									<div class="col-sm-1">
										<input class="form-check-input" type="radio" name="gender" id="L" value="L" />
									</div>
									<label class="form-check-label col-sm-2 form-label" for="L" style="margin-left: -5vw;">Laki-Laki</label>
									<div class="col-sm-1">
										<input class="form-check-input" type="radio" name="gender" id="P" value="P" />
									</div>
									<label class="form-check-label col-sm-2 form-label" for="P"style="margin-left: -5vw;">Perempuan</label>
								</div>
								<div class="mb-3 row">
									<label for="email" class="form-label col-sm-3">Email :</label>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="email" name="email" required />
									</div>
								</div>
								<div class="mb-3 row">
									<label for="alamat" class="form-label col-sm-3">Alamat</label>
									<div class="col-sm-9">
										<textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="kelurahan_id" class="col-sm-3 form-label">Kelurahan :</label>
									<div class="col-sm-9">
										<select class="form-select" aria-label="Default select example" name="kelurahan_id" id="kelurahan_id" required>
											<option selected disabled value="">Choose...</option>
											<option value="1">Tapos</option>
											<option value="2">Jatijajar</option>
											<option value="3">Cilangkap</option>
											<option value="4">Sukamaju Baru</option>
											<option value="5">Sukatani</option>
										</select>
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