<?php
include 'config.php';

$no_undian  = $_POST['noundi'];
$nama_toko  = $_POST['nama_toko'];
$hadiah     = $_POST['hadiah'];

$sql = mysqli_query($koneksi, "INSERT INTO tb_win(nomor_undian,nama_toko,kat_undian,hadiah) VALUES('".$no_undian."','".$nama_toko."',3,'".$hadiah."')");
if($sql){
    echo "<div style='color:green'> DATA BERHASIL DISIMPAN </div>";
}else{
    echo "<div style='color:red'> DATA GAGAL DISIMPAN </div>";
}
?>