<?php
include 'config.php';

$nama_toko  = $_POST['nama_toko'];
$hadiah     = $_POST['hadiah'];

$sql = mysqli_query($koneksi, "INSERT INTO tb_win(nama_toko,kat_undian,hadiah) VALUES('".$nama_toko."',1,'".$hadiah."')");
if($sql){
    echo "<div style='color:green'> DATA BERHASIL DISIMPAN </div>";
}else{
    echo "<div style='color:red'> DATA GAGAL DISIMPAN </div>";
}
?>