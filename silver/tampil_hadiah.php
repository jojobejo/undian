<?php
require('../config.php');

if (isset($_GET['id'])) {
    $id_prize    = $_GET['id'];
} else {
    die("Error. No ID Selected!");
}
include "../config.php";

?>



<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rahmad Dawood">
    <meta name="description" content="Bangkitkan bilangan acak antara range tertentu.">
    <title>Undian</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-grid.css" rel="stylesheet">
    <link href="../css/bootstrap-reboot.css" rel="stylesheet">
    <link href="../css/bootstrap-themes.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style>
        body {
            background-image: url("../images/bg.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card-pilih {
            background-image: linear-gradient(#DCBB60, #FFE880, #B59451, #966D2F);
        }

        .posCard1 {

            border-radius: 20px;
            border: black;
            border-style: solid;
        }
    </style>
</head>

<body>
    <center>
        <div class="container">

            <div class="card posCard1 card-pilih ">
                <div class="card-header ">
                    <h2 class="silver">Selamat Kepada</h2>
                    <h2 class="silver">Pemenang Undian Silver</h2>
                    <p id="result_prize" hidden></p>
                </div>

                <?php

                $qhadiah = "SELECT tb_win.*,tb_undian.*,tb_prize.*
                FROM tb_win
                JOIN tb_undian ON tb_undian.id_kat_undi = tb_win.kat_undian
                JOIN tb_prize ON tb_win.id_prize = tb_prize.id_prize
                where tb_undian.kat_undian = 'silver'
                AND tb_prize.id_prize = $id_prize
                LIMIT 1";
                $hadiah = mysqli_query($koneksi, $qhadiah);

                $no = 1.;
                $qhasil = " SELECT tb_win.*,tb_undian.*,tb_prize.*
                FROM tb_win
                JOIN tb_undian ON tb_undian.id_kat_undi = tb_win.kat_undian
                JOIN tb_prize ON tb_win.id_prize = tb_prize.id_prize
                where tb_undian.kat_undian = 'silver'
                AND tb_prize.id_prize = $id_prize";

                $hasil = mysqli_query($koneksi, $qhasil);

                ?>

                <div class="card-body">
                    <div class="row">
                        <div class='col-sm-12 mt-5'>
                            <div class="card  card-pilih">
                                <?php foreach ($hadiah as $ha) {; ?>
                                    <div class="card-header">
                                        <h3>Hadiah <?php echo $ha['nama_prize'] ?></h3>
                                    </div>
                                <?php }; ?>
                                <?php foreach ($hasil as $h) {; ?>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 style="text-align:center ;"><?php echo $no++ ?>. <?php echo $h['nama_toko'] ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </center>
</body>

<script type="text/javascript">
        setTimeout(function() {
            location = ''
        }, 2000)
    
</script>

</html>