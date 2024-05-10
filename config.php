<?php
    // konfigurasi db
    $host = 'localhost';
    $user = 'kiucoid_undian';
    $pass = 'karismaextravaganza';
    $db   = 'kiucoid_undian';
    
    $koneksi = mysqli_connect($host,$user,$pass,$db);
    if(!$koneksi){
        die('koneksi gagal :');
    }
    ?>  