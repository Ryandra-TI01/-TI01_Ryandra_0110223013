<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PASIEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      html,h1,h2{color: #31363F !important;}
      *{letter-spacing: 1px;}
      .navbar{background-color: #4CCD99;}
      .container{
        width: 50vw;
        background-color: hsla(156, 56%, 55%, 0.96);
      }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PUSKESMAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Form Pasien</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- main -->
<div class="container mt-5 rounded-4">
  <form class="row p-3 g-3 needs-validation" novalidate>
    <h2 class="mb-5 text-center">Form Pengisian Data Pasien</h2>
    <div class="mb-3 row">
      <label for="kode" class="col-sm-3 col-form-label">Kode :</label>
      <div class="col-sm-9">
       <input type="text" class="form-control" id="kode" name="kode" required>
      </div>
      <div class="invalid-feedback">
        Silakan masukan kode
      </div>
    </div>
    <div class="mb-3 row">
      <label for="nama" class="col-sm-3 form-label">Nama :</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nama" name="nama" required> 
      </div>
      <div class="invalid-feedback">
        Silakan masukan nama
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tmp_lahir" class="col-sm-3 form-label">Tempat Lahir :</label>
      <div class="col-sm-9">      
        <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
      </div>
      <div class="invalid-feedback">
        Silakan masukan nama
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tgl_lahir" class="col-sm-3 form-label">Tanggal Lahir :</label>
      <div class="col-sm-9">      
       <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
      </div>
      <div class="invalid-feedback">
        Silakan masukan nama
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-3">Jenis Kelamin :</label>
      <div class="col-sm-1">      
       <input class="form-check-input" type="radio" name="gender" id="L" value="L">
      </div>
      <label class="form-check-label col-sm-2 form-label" for="L">Laki-Laki</label>
      <div class="col-sm-1">      
       <input class="form-check-input" type="radio" name="gender" id="P" value="P">
      </div>
      <label class="form-check-label col-sm-2 form-label" for="P">Perempuan</label>
    </div>
    <div class="mb-3 row">
      <label for="Email" class="form-label col-sm-3">Email :</label>
      <div class="col-sm-9">      
        <input type="email" class="form-control" id="Email" name="Email" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="alamat" class="form-label col-sm-3">Alamat</label>
      <div class="col-sm-9">      
        <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="kelurahan" class="col-sm-3 form-label">Kelurahan :</label>
      <div class="col-sm-9">      
      <select class="form-select" aria-label="Default select example" name="kelurahan" id="kelurahan" required>
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
        <button type="submit" class="btn btn-light">Submit</button>
      </div>
    </div>
  </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
  (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>