<?php 
require_once '../index/dbkoneksi.php';
// menangkap data 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kelurahan_id = $_POST['kelurahan_id'];

    // Query untuk update data
    $update_query = "UPDATE pasien SET kode='$kode', nama='$nama', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', gender='$gender', email='$email', alamat='$alamat', kelurahan_id='$kelurahan_id' WHERE id=$id";

    // Eksekusi query
    if ($conn->query($update_query) === TRUE) {
        // Redirect ke halaman data_pasien.php setelah berhasil melakukan update
        // header("Location: data_pasien.php");
        echo "
        <script>
            alert('Data Berhasil di Update');document.location.href = 'data_pasien.php' ;
        </script>
        ";
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}$conn->close();
?>