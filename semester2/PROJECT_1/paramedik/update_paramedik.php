<?php 
require_once '../index/dbkoneksi.php';
// menangkap data 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kategori = $_POST['kategori'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];

    // Query untuk update data
    $update_query = "UPDATE paramedik SET nama='$nama', gender='$gender', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', kategori='$kategori', telpon='$telpon', alamat='$alamat' WHERE id=$id";

    // Eksekusi query
    if ($conn->query($update_query) === TRUE) {
        // Redirect ke halaman data_pasien.php setelah berhasil melakukan update
        // header("Location: data_pasien.php");
        echo "
        <script>
            alert('Data Berhasil di Update');
            document.location.href = 'data_paramedik.php' ;
        </script>
        ";
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}$conn->close();
?>