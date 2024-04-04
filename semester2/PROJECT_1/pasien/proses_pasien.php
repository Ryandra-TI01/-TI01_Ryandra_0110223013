<?php 
// koneksi ke db koneksi
require_once '../index/dbkoneksi.php';
// menangkap data dari form form pasien
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kelurahan_id = $_POST['kelurahan_id'];
// function insert 
$query = "INSERT INTO pasien(kode,nama,tmp_lahir,tgl_lahir,gender,email,alamat,kelurahan_id)
    VALUES ('$kode','$nama','$tmp_lahir','$tgl_lahir','$gender','$email','$alamat','$kelurahan_id')";

if ($conn->query($query) === TRUE) {
    // header("LOCATION:data_pasien.php");
    echo "
    <script>
        alert('Data Berhasil Ditambahkan');document.location.href = 'data_pasien.php' ;
    </script>
    ";
}else {
    echo "Error: " . $query . $conn->error;
};
$conn->close();
?>