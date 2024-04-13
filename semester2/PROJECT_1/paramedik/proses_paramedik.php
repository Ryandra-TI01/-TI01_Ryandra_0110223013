<?php 
// koneksi ke db koneksi
require_once '../index/dbkoneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kategori = $_POST['kategori'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    // function insert 
    $query = "INSERT INTO paramedik (nama,gender,tmp_lahir,tgl_lahir,kategori,telpon,alamat)
        VALUES ('$nama','$gender','$tmp_lahir','$tgl_lahir','$kategori','$telpon','$alamat')";

    if ($conn->query($query) === TRUE) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'data_Paramedik.php' ;
        </script>
        ";
    }else {
        echo "Error: " . $query . $conn->error;
    }   
}$conn->close();
?>
