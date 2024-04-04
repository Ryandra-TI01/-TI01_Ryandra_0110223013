<?php 
require_once '../index/dbkoneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM pasien WHERE id ='$id'";
$delete_1 = "DELETE FROM periksa WHERE id ='$id'";
$query_delete = $conn->query($delete);
if ($query_delete) {
    // header('LOCATION:data_pasien.php');
    echo "
    <script>
        alert('Data Berhasil Dihapus');document.location.href = 'data_pasien.php' ;
    </script>
    ";
}else{
    echo 'gagal';
}
$conn->close();
?>