<?php include_once '../layouts/top.php' ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Paramedik</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active">Data Paramedik</li>
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
								<button type="button" class="btn">
									<a href="form_paramedik.php" class="text-white">Tambah Paramedik</a>
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
								<th scope="col">Nama</th>
								<th scope="col">Gender</th>
								<th scope="col">Tempat Lahir</th>
								<th scope="col">Tanggal Lahir</th>  
								<th scope="col">Kategori</th>         
								<th scope="col">Telepon </th>         
								<th scope="col">Alamat</th>         
								<th colspan="2" scope="col" class="text-center">Aksi</th>                  
								</tr>
								</thead>
								<tbody>
								<?php $nomor = 1; foreach ($query_2 as $key ): ?>
									<?php if ($key['id']!=1): ?>
										<tr>
											<th scope="row"><?=$nomor++ ?></th>
											<td><?= $key['nama']?></td>
											<td><?= $key['gender']?></td>
											<td><?= $key['tmp_lahir']?></td>
											<td><?= $key['tgl_lahir']?></td>
											<td><?= $key['kategori']?></td>
											<td><?= $key['telpon']?></td>
											<td><?= $key['alamat']?></td>
											<td class="text-center"><a href="edit_paramedik.php?id=<?=$key['id']; ?>">Edit </a></td>
											<td class="text-center"><a href="#" onclick="confirm_delete_paramedik(<?= $key['id']; ?>)">Delete</a></td>
										</tr>
									<?php endif ?>
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