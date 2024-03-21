<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta required name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      *,body{
        padding: 0;
        margin: 0;
      }
      .navTop{
        background-color: #9290C3;
      }
        .form{
            background-color: #9290c3c2;
            padding: 1rem;
            border-radius: 10px;
        }
        input{
          font-size: 5rem;
        }
    </style>
</head>
<body>
<nav class="navbar navTop navbar-expand-lg">
  <div class="container-fluid navTop">
    <a class="navbar-brand" href="#">Stok Buku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="form.php">Form Pengisian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="result.php">Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<form method="post" action="result.php">
    <div class="container mt-5 mb-5 form" style="width: 50vw;">
        <h3 class="text-center ">Form Pengisian Stok Buku</h3>
        <div class="mb-2">
            <label for="Judul" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="Judul" required name="Judul">
        </div>
        <div class="mb-2">
            <label for="Penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="Penulis" required name="Penulis">
        </div>
        <div class="row">
          <div class="mb-2 col-6">
              <label for="Penerbit" class="form-label">Penerbit</label>
              <input type="text" class="form-control" id="Penerbit" required name="Penerbit">
          </div>
          <div class="mb-2 col-6">
              <label for="Harga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="Harga" required name="Harga">
          </div>
        </div>
        <div class="row">
          <div class="mb-2 col-6">
              <label for="TahunTerbit" class="form-label">Tahun Terbit</label>
              <input type="date" class="form-control" id="TahunTerbit" required name="TahunTerbit">
          </div>
          <div class="mb-2 col-6">
            <label for="Stok" class="form-label">Stok</label>
            <input type="nummber" class="form-control" id="Stok" required name="Stok">
        </div>

        </div>

        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-light" type="submit" type="button">Submit</button>
        </div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>