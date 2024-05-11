<?php
$id = $_GET['id'];

include 'config.php';
$query = mysqli_query($koneksi,"SELECT * FROM undian_extra WHERE id_undi = $id");
$data = mysqli_fetch_array($query);
echo json_encode($data);
?>