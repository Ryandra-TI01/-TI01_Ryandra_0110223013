<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$submit = $_POST['submit'];

if (!isset($submit)) {
    header("Location: login.php");
};

if ($username === 'admin' &&  $password === "123" ) {
    echo "<script>alert('selamat anda berhasil login')</script>";
}else{
    header("Location: login.php");
};

include_once 'layouts/top.php';
include_once 'layouts/menu.php';
include_once 'layouts/bottom.php';

?>