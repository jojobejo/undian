<?php
    // konfigurasi db
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'extravaganza_undian';
    
    $koneksi = mysqli_connect($host,$user,$pass,$db);
    if(!$koneksi){
        die('koneksi gagal :');
    }
    ?>

    