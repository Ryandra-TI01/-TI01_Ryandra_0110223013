<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
    <style>
      *,body{
        padding: 0;
        margin: 0;
      }
    </style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	</head>
	<body>
		<h4 class="bg-secondary p-3">Sistem Penilaian</h4>
		<h4 class="p-3">Form Nilai Siswa</h4>
		<div class="container">
			<form method="GET" action="hasil_nilai.php">
				<div class="form-group row">
					<label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
					<div class="col-8">
						<input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" />
					</div>
				</div>
				<div class="form-group row">
					<label for="matkul" class="col-4 col-form-label">Matkul</label>
					<div class="col-8">
						<select id="matkul" name="matkul" class="custom-select" required="required">
							<option value="DDP">DDP</option>
							<option value="Basis Data">Basis Data</option>
							<option value="Jarkom">Jaringan Komputer</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
					<div class="col-8">
						<input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" />
					</div>
				</div>
				<div class="form-group row">
					<label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
					<div class="col-8">
						<input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" />
					</div>
				</div>
				<div class="form-group row">
					<label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
					<div class="col-8">
						<input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control" />
					</div>
				</div>
				<div class="form-group row">
					<div class="offset-4 col-8">
						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<span class="bg-secondary p-3 d-block" style="position:fixed;bottom:0; width:100%">Develop By @rojulman 2017</span>
	</body>
</html>
