<?php include_once '../layouts/top.php';  
// Mengambil data berdasarkan ID pengguna
$id = $_GET['id'];
// mengambil data hasil periksa
$data_periksa_pasien = "SELECT * FROM periksa WHERE pasien_id = '$id' ";
$query_edit = $conn->query($data_periksa_pasien);
$row = $query_edit->fetch_assoc();

// mengambil data hasil pasien
$row_pasien = $query->fetch_assoc();

// mengambil data dokter
$dokter_nama = $row['dokter_id'];
$paramedik ="SELECT * FROM paramedik WHERE id='$dokter_nama' ";
$paramedik_data = $conn->query($paramedik);
$query_2 = $paramedik_data->fetch_assoc();



?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Catatan Data Pasien</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
						<li class="breadcrumb-item"><a href="../pasien/data_pasien.php">Data Pasien</a></li>
						<li class="breadcrumb-item active">Catatan Data Pasien</li>
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
							<h3 class="card-title">Catatan Data Pasien</h3>

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
							<table class="table table-striped table- light">
							<thead>
								<tr>
								<th scope="col">Nama Paramedik</th>
								<th scope="col">Nama Pasien</th>
								<th scope="col">Tanggal Konsultasi</th>
								<th scope="col">Berat</th>
								<th scope="col">Tinggi</th>
								<th scope="col">Tensi</th>
								<!-- <th scope="col">Keterangan</th> -->
								<th scope="col">Tempat Lahir</th>
								<th scope="col">Tanggal Lahir</th>
								<th scope="col">Gender</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td><?= $query_2['nama'] ?></td>
									<td><?= $row_pasien['nama'] ?></td>
									<td><?= $row['tanggal'] ?></td>
									<td><?= $row['berat'] ?></td>
									<td><?= $row['tinggi'] ?></td>
									<td><?= $row['tensi'] ?></td>
									<!-- <td><?= $row['keterangan'] ?></td> -->
									<td><?= $row_pasien['tmp_lahir']?></td>
									<td><?= $row_pasien['tgl_lahir']?></td>
									<td><?= $row_pasien['gender']?></td>
								</tr>
								</tbody>
							</table>
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
<?php include_once '../layouts/bottom.php' ?>