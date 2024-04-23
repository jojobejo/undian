<?php
    // konfigurasi db
    $host = '10.10.10.13';
    $user = 'root';
    $pass = '';
    $db   = 'extravaganza_undian';
    
    $koneksi = mysqli_connect($host,$user,$pass,$db);
    if(!$koneksi){
        die('koneksi gagal :');
    }
    ?>

    