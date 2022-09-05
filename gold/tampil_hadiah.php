<?php
require('../config.php');
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

        .logo1 {
            position: absolute;
            left: 700px;
        }

        .logo2 {
            position: absolute;
            left: 300px;
            top: -30px;
        }

        .logo3 {
            position: absolute;
            left: 800px;
            top: 250px;
        }

        .card-pilih {
            background-image: linear-gradient(#DCBB60, #FFE880, #B59451, #966D2F);
        }

        .posCard1 {
            position: absolute;
            top: 400px;
            left: 60px;
            width: 1700px;
            height: 320px;
            border-radius: 20px;
            border: black;
            border-style: solid;
        }
    </style>
</head>

<body>
    <center>


        <div class="container">
            <div class="page-header" style="margin-top:-10px;">
                <img src="../images/karisma.png" alt="" class="logo1" height="200px" width="500px">
                <img src="../images/extra.png" alt="" class="logo2" height="470px" width="1300px">
                <img src="../images/2022.png" alt="" class="logo3" height="150px" width="300px">
            </div>

            <div class="card posCard1 card-pilih ">
                <div class="card-header ">
                    <h2 class="silver">Selamat Kepada</h2>
                    <h2 class="silver">Pemenang Undian Gold</h2>
                    <p id="result_prize" hidden></p>
                </div>

                <?php
                $qprize = " SELECT tb_win.*,tb_undian.*
                FROM tb_win
                JOIN tb_undian ON tb_undian.id_kat_undi = tb_win.kat_undian
                where tb_undian.kat_undian = 'gold'";
                $rprize = mysqli_query($koneksi, $qprize);
                ?>

                <div class="card-body ">
                    <div class="row">
                        <?php while ($row = mysqli_fetch_array($rprize)) :; ?>
                            <div class='col md-4'>
                                <div class="card  card-pilih">
                                    <div class="card-header">
                                        <h3><?= $row['hadiah'] ?></h3>
                                    </div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col md-1">
                                                <h3><?= $row['nama_toko'] ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </center>
</body>

</html>