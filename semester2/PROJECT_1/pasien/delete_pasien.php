<?php 
require_once '../index/dbkoneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM pasien WHERE id ='$id'";
$delete_1 = "DELETE FROM periksa WHERE pasien_id ='$id'";
$query_delete = $conn->query($delete);
$query_delete_1 = $conn->query($delete_1);
if ($query_delete && $query_delete_1) {
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