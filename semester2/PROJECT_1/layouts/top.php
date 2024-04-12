<?php 
// koneksi database
require_once '../index/dbkoneksi.php';
// mengambil semua kolom di database
$sql = "SELECT * FROM pasien";
$query = $conn->query($sql);
$sql_1 = "SELECT * FROM periksa";
$query_1 = $conn->query($sql_1);
$sql_2 = "SELECT * FROM paramedik";
$query_2 = $conn->query($sql_2);
$sql_3 = "SELECT * FROM kelurahan";
$query_3 = $conn->query($sql_3);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Puskesmas</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="../assets/plugin/fontawesome-free/css/all.min.css" />
		<!-- IonIcons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
		<!-- Theme style -->
		<link rel="stylesheet" href="../assets/dist/css/adminlte.min.css" />
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/dist/css/css_internal.css">
	</head>
	<body class="hold-transition sidebar-mini layout-footer-fixed">
    <!-- top -->
    <div class="wrapper">
			<!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="../index/index.php" class="nav-link text-dark" id="judul_2">Admin Puskesmas</a>
					</li>
				</ul>
				<!-- Right navbar links -->
				<ul class="navbar-nav ml-auto">
					<!-- Navbar Search -->
					<li class="nav-item">
						<a class="nav-link text-dark" data-widget="navbar-search" href="#" role="button">
							Admin
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-widget="navbar-search" href="#" role="button">
							|
						</a>
					</li>
					<li class="">
						<a class="nav-link text-dark" data-widget="navbar-search" href="Login.html" role="button">
							Logout
						</a>
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-light-primary elevation-4">
				<!-- Brand Logo -->
				<a <a href="../index/index.php" class="brand-link text-center">
					<span class="brand-text text-light">Admin Puskesmas</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user panel (optional) -->
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="info m-auto">
							<a <a href="../index/index.php" class="d-block text-light"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg> Ryandra Athaya Saleh</a>
						</div>
					</div>
					<!-- SidebarSearch Form -->
					<div class="form-inline text-light">
						<div class="input-group" data-widget="sidebar-search">
							<input class="form-control form-control-sidebar text-light" type="search" placeholder="Search" aria-label="Search" />
							<div class="input-group-append">
								<button class="btn btn-sidebar">
									<i class="fas fa-search fa-fw text-white"></i>
								</button>
							</div>
						</div>
					</div>

					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<li class="nav-item">
								<a href="../pasien/form_pasien.php" class="nav-link text-light">
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0" fill="currentColor" /></svg>
									<p>Form Pasien</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="../pasien/data_pasien.php" class="nav-link text-light">
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0" fill="currentColor" /></svg>
									<p>Data Pasien</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="../paramedik/data_paramedik.php" class="nav-link text-light">
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0" fill="currentColor" /></svg>
									<p>Paramedik</p>
								</a>
							</li>
							<li class="">
								<a <a href="../index/index.php" class="nav-link text-light">
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg><p> Logout</p>
								</a>
							</li>
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
			</aside>