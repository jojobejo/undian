<?php

$host = 'localhost';
$user = 'kiucoid_undian';
$pass = 'karismaextravaganza';
$db   = 'kiucoid_undian';

$no_undian  = $_POST['noundi'];
$nama_toko  = $_POST['nama_toko'];
$hadiah     = $_POST['hadiah'];

$koneksi = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die('koneksi gagal :');
}

$sql = mysqli_query($koneksi, "INSERT INTO tb_win(nomor_undian,nama_toko,kat_undian,id_prize) VALUES('".$no_undian."','".$nama_toko."',1,'".$hadiah."')");
if($sql){
    echo "<div style='color:green'> DATA BERHASIL DISIMPAN </div>";
}else{
    echo "<div style='color:red'> DATA GAGAL DISIMPAN </div>";
}
?>