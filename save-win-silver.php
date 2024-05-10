<?php
include 'config.php';

$no_undian  = $_POST['noundi'];
$nama_toko  = $_POST['nama_toko'];
$hadiah     = $_POST['hadiah'];

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sql = mysqli_query($koneksi, "INSERT INTO tb_win(nomor_undian,nama_toko,kat_undian,id_prize) VALUES('".$no_undian."','".$nama_toko."',1,'".$hadiah."')");
if($sql){
    echo "<div style='color:green'> DATA BERHASIL DISIMPAN </div>";
}else{
    echo "<div style='color:red'> DATA GAGAL DISIMPAN </div>";
    error_reporting(E_ALL);
}
?>