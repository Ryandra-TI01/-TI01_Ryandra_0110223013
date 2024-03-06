<?php 
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

// nilai total 
$nilai_total = ($nilai_uts+$nilai_uas+$nilai_tugas)/3;

// predikat dan grade
$predikat;
$grade;
$status;

// pencari grade
if ($nilai_total >= 85) {
    $grade = 'A';
}elseif($nilai_total >= 70){
    $grade = 'B';
}elseif($nilai_total >= 56){
    $grade = 'C';
}elseif($nilai_total >= 36){
    $grade = 'D';
}elseif($nilai_total >= 0){
    $grade = 'E';
}else{
    $grade = 'I';
}

// predikat
switch ($grade) {
    case 'A':
        $predikat = 'Sanget Memuaskan';
        break;
    case 'B':
        $predikat = 'Memuaskan';
        break;
    case 'C':
        $predikat = 'Cukup';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'E':
        $predikat = 'Sangat Kurang';
        break;
    case 'I':
        $predikat = 'Tidak Ada';
        break;
    default:
        break;
}
// status lulus
if ($nilai_total >= 70) {
    $status = 'LULUS';
}else{
    $status = 'GAGAL';
}

echo "nama : $nama <br/>";
echo "matkul : $matkul <br/>";
echo "nilai uts : $nilai_uts <br/>";
echo "nilai uas : $nilai_uas <br/>";
echo "nilai tugas : $nilai_tugas <br/>";
echo "nilai total : $nilai_total <br/>";
echo "Grade : $grade <br/>";
echo "Predikat : $predikat <br/>";
echo "Status : $status <br/>";




?>