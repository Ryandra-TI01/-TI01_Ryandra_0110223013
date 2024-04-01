<?php 
include 'koneksi.php';

  $Judul = $_POST['Judul'];
  $Penulis = $_POST['Penulis'];
  $Penerbit = $_POST['Penerbit'];
  $TahunTerbit = $_POST['TahunTerbit'];
  $Harga = $_POST['Harga'];
  $Stok = $_POST['Stok'];

  $query = "INSERT INTO buku (judul,penulis,penerbit,tahunTerbit,harga,stok)
  VALUES ('$Judul','$Penulis','$Penerbit','$TahunTerbit',$Harga,$Stok)";
  
  if ($conn->query($query) === TRUE) {
      header("LOCATION:index.php");
  }else {
      echo "Error: " . $query . $conn->error;
  };
  $conn->close();
?>