<?php
$id = $_GET['id'];

include 'config.php';
$query = mysqli_query($koneksi,"SELECT * FROM undian_silver WHERE id = $id");
$data = mysqli_fetch_array($query);
echo json_encode($data);
?>