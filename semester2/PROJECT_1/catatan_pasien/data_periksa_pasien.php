<?php include_once '../layouts/top.php';  
// Mengambil data berdasarkan ID pengguna
$id = $_GET['id'];

// Mengambil data hasil periksa
$data_periksa_pasien = "SELECT * FROM periksa WHERE pasien_id = '$id' ";
$query_edit = $conn->query($data_periksa_pasien);

// mengambil data pasien sesuai id
$pasien = "SELECT * FROM pasien WHERE id = $id";
$query_pasien = $conn->query($pasien);


// Mengambil data hasil pasien
if ($query->num_rows > 0) {
    $row_pasien = $query_pasien->fetch_assoc();
} else {};

// Mengambil data dokter
if ($query_edit->num_rows > 0) {
    $row = $query_edit->fetch_assoc();
    $dokter_nama = $row['dokter_id'];
    $paramedik = "SELECT * FROM paramedik WHERE id='$dokter_nama' ";
    $paramedik_data = $conn->query($paramedik);
    $query_2 = $paramedik_data->fetch_assoc();
} else {};

// Mengambil data hasil periksa
$kelurahan_pasien = $row_pasien['kelurahan_id'];
$data_kelurahan = "SELECT * FROM kelurahan WHERE kec_id = '$kelurahan_pasien' ";
$query_kelurahan = $conn->query($data_kelurahan);
$row_kelurahan = $query_kelurahan->fetch_assoc();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Catatan Pasien</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
						<li class="breadcrumb-item"><a href="../pasien/data_pasien.php">Data Pasien</a></li>
						<li class="breadcrumb-item active">Catatan Pasien</li>
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
							<h3 class="card-title">Catatan Pasien</h3>
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
								<th scope="col">Nama Pasien</th>
								<th scope="col">Tempat Lahir</th>
								<th scope="col">Tanggal Lahir</th>
								<th scope="col">Gender</th>
								<th scope="col">Alamat</th>
								<th scope="col">kelurahan</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td><?= $row_pasien['nama'] ?></td>
									<td><?= $row_pasien['tmp_lahir']?></td>
									<td><?= $row_pasien['tgl_lahir']?></td>
									<td><?= $row_pasien['gender']?></td>
									<td><?= $row_pasien['alamat']?></td>
									<td><?= $row_kelurahan['nama']?></td>
								</tr>
								</tbody>
							</table>
							<button class="btn mt-4"><a class="text-white" href="../pasien/edit_pasien.php?id=<?= $id ?>">Edit Pasien</a></button>
							<table class="table table-striped table- light">
							<thead>
								<tr>
								<th scope="col">Nama Paramedik</th>
								<th scope="col">Tanggal Konsultasi</th>
								<th scope="col">Berat</th>
								<th scope="col">Tinggi</th>
								<th scope="col">Tensi</th>
								<th scope="col">Keterangan</th>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td><?= $query_2['nama'] = $query_2['nama']?? '-'  ?></td>
								<td><?= $row['tanggal'] = $row['tanggal'] ?? '-'; ?></td>
								<td><?= $row['berat'] = $row['berat'] ?? '-';?></td>
								<td><?= $row['tinggi'] = $row['tinggi'] ?? '-';?></td> 
								<td><?= $row['tensi'] = $row['tensi'] ?? '-';?></td> 
								<td><?= $row['keterangan'] = $row['keterangan'] ?? '-';?></td>
								</tr>
								</tbody>
							</table>
							<button class="btn mt-4"><a class="text-white" href="../catatan_pasien/form_periksa_pasien.php?id=<?= $id ?>">Edit Catatan</a></button>
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