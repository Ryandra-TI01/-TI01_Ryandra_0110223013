<?php include_once '../layouts/top.php' ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Pasien</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active">Data Pasien</li>
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
							<h3 class="card-title">Data Pasien</h3>
							<div class="card-tools">
								<button type="button" class="btn">
									<a href="form_pasien.php" class="text-white">Tambah Pasien</a>
								</button>
								<!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
									<i class="fas fa-times"></i>
								</button> -->
							</div>
						</div>
						<div class="card-body">
							<table class="table table-striped table- light">
							<thead>
								<tr>
								<th scope="col">No</th>
								<th scope="col">Kode</th>
								<th scope="col">Nama</th>
								<th scope="col">Email</th>
								<th scope="col">Alamat</th>  
								<th scope="col">Catatan</th>         
								<th colspan="2" scope="col" class="text-center">Aksi</th>                  
								</tr>
								</thead>
								<tbody>
								<?php $nomor = 1; foreach ($query as $key ): ?>
										<tr>
											<th scope="row"><?=$nomor++ ?></th>
											<td><?= $key['kode']?></td>
											<td><?= $key['nama']?></td>
											<td><?= $key['email']?></td>
											<td><?= $key['alamat']?></td>
											<td ><a href="../catatan_pasien/data_periksa_pasien.php?id=<?=$key['id']; ?>">Details</a></td>
											<td class="text-center"><a href="edit_pasien.php?id=<?=$key['id']; ?>">Edit </a></td>
											<td class="text-center"><a href="#" onclick="confirm_delete(<?= $key['id']; ?>)">Delete</a></td>
										</tr>
								<?php endforeach ?>
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