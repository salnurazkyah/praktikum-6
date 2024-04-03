<?php

include 'koneksi.php';

$id = $_POST ['id'] ;
$nama = $_POST ['nama'] ;
$warna = $_POST ['warna'] ;
$vitamin = $_POST ['vitamin'] ;
$ciri = $_POST ['ciri'] ;





$query = "INSERT INTO `buah` (`ID`, `nama`, `warna`, `vitamin`, `ciri`)
VALUE ('$nama', '$warna', '$jenis', '$vitamin', '$ciri')";
 

if($conn->query($query) === TRUE ){
    header("Location: index.php");}

    $conn->close();