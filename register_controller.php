<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO users(nama, username, password) values('$nama', '$username',md5('$password'))";
$result = mysqli_query($koneksi, $query);
if(!$result){
    die("Data galal ditambah".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
}else{
    echo "<script> alert('User berhasil dibuat.'); window.location='index.php';</script>";
}
?>