<?php
include 'config.php';

$no_undian  = $_POST['noundi'];
$nama_toko  = $_POST['nama_toko'];


$sql = mysqli_query($koneksi, "INSERT INTO tb_win(nomor_undian,nama_toko,kat_undian,id_prize) VALUES('".$no_undian."','".$nama_toko."',6,15)");
if($sql){
    echo "<div style='color:green'> DATA BERHASIL DISIMPAN </div>";
}else{
    echo "<div style='color:red'> DATA GAGAL DISIMPAN </div>";
}
?>