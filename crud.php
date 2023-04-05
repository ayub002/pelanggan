<?php

$conn = mysqli_connect('localhost', 'n1577759_ayub', 'pelanggancrud123', 'n1577759_ayub');

if(isset($_POST['tambahdata'])) {
    $nama     = $_POST['nama'];
    $waktu   = $_POST['waktu'];
    $kode       = $_POST['kode'];
    $sql = "INSERT INTO `pelanggan`(`ID`, `NAMA`, `WAKTU`, `KODE`) VALUES ('', '$nama', '$waktu', '$kode')";
    mysqli_query($conn, $sql);
    header("location: index.php");
}

$AmbilData = mysqli_query($conn, "SELECT * FROM pelanggan");

if(isset($_POST['ubahdata'])) {
    $id         = $_POST['id'];
    $nama     = $_POST['nama'];
    $waktu   = $_POST['waktu'];
    $kode       = $_POST['kode'];
    $sql = "UPDATE `pelanggan` SET `ID`= '$id',`NAMA`= '$nama',`WAKTU`= '$waktu',`KODE`= '$kode' WHERE ID = '$id'";
    mysqli_query($conn, $sql);
    header('Location: index.php');
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id']; 
    $query = "DELETE FROM pelanggan WHERE ID = '$id'";
    $result = mysqli_query($conn, $query);
    header('Location: index.php');
}

?>