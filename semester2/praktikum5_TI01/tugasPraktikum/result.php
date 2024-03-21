<?php 
// wadah array
$daftarBuku = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Judul = $_POST['Judul'];
    $Penulis = $_POST['Penulis'];
    $Penerbit = $_POST['Penerbit'];
    $TahunTerbit = $_POST['TahunTerbit'];
    $Harga = $_POST['Harga'];
    $Stok = $_POST['Stok'];

    include_once 'buku.php';
    $buku = new Buku($Judul,$Penulis,$Penerbit,$TahunTerbit,$Harga,$Stok);
    //menambah data ke array kosong 
    $daftarBuku[] = $buku;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
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
    <div class="container">
        <table class="table mt-5 table-dark">
        <thead>
            <tr>
            <th scope="col">NO</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">TahunTerbit</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach ($daftarBuku as $key => $buku): ?>
            <th scope="row">1</th>
            <td><?= $buku->Judul ?></td>
            <td><?= $buku->Penulis ?></td>
            <td><?= $buku->Penerbit ?></td>
            <td><?= $buku->TahunTerbit ?></td>
            <td><?= $buku->Harga ?></td>
            <td><?= $buku->Stok ?></td>
            <?php endforeach ?>
            </tr>
        </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>