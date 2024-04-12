<?php 
require_once '../index/dbkoneksi.php';
// menangkap data 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir periksa
    $pasien_id = $_POST['pasien_id'];
    $tanggal = $_POST['tanggal'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
    $tensi = $_POST['tensi'];
    $keterangan = $_POST['keterangan'];
    $dokter_id = $_POST['dokter_id'];


    // Query untuk update data
    $update_query = "UPDATE periksa SET tanggal='$tanggal', berat='$berat', tinggi='$tinggi', tensi='$tensi', keterangan='$keterangan', dokter_id='$dokter_id' WHERE pasien_id = $pasien_id";

    // Eksekusi query
    if ($conn->query($update_query) === TRUE) {
        // Redirect ke halaman data_pasien.php setelah berhasil melakukan update
        // header("Location: data_pasien.php");
        echo "
        <script>
            alert('Data Berhasil di Update');
            document.location.href = 'data_periksa_pasien.php?id=".$pasien_id."' ;
        </script>
        ";
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}$conn->close();
?>