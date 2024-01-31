<?php
require('../config.php');


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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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

        table {
            border: 0px;
        }

        table.fontTb {
            font-weight: 700;
            font-size: 15px;
        }

        .borderless td,
        .borderless th {
            border: none;
        }

        td.a {
            text-align: right;
        }

        td.b {
            text-align: center;
        }

        td.c {
            text-align: center;
        }

        .card.body {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <center>

        <div class="pemenang" hidden>
            <a href="#" class=" btn btn-warning btn-lg" id="btnTampil" role="button"><i class="fa fa-trophy"></i> Tampilkan Pemenang</a>
        </div>

        <div class="card posCard1 card-pilih m-5 ">
            <div class="card-header ">
                <h2 class="silver">Selamat Kepada</h2>
                <h2 class="silver"> Pemenang Grand Prize Extravaganza Platinum </h2>
                <p id="result_prize" hidden></p>
            </div>

            <?php
            $qhadiah = "SELECT tb_win.*,tb_undian.*,tb_prize.*
                        FROM tb_win
                        JOIN tb_undian ON tb_undian.id_kat_undi = tb_win.kat_undian
                        JOIN tb_prize ON tb_win.id_prize = tb_prize.id_prize
                        where tb_undian.kat_undian = 'platinum'
                        AND tb_win.id_prize = 17
                        ";
            $hadiah = mysqli_query($koneksi, $qhadiah);
            ?>

            <div class="card-body">
                <div class="row">
                    <div class='col-sm'>
                        <div class="card  card-pilih">
                            <div class="card-header">
                                <h4>Honda Brio (Off The Road)</h4>
                            </div>
                            <table class=" fontTb borderless">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php $no = 0;
                                foreach ($hadiah as $h) {
                                    $no++ ?>
                                    <tbody>
                                        <tr>
                                            <td class="b" width="10%" style="padding-top: 10px;"><?php echo $no; ?>.</td>
                                            <td class="b" width="60%" style="padding-top: 15px;"><?php echo $h['nama_toko'] ?></td>
                                            <td class="c" width="60%" style="padding-top: 15px;"><?php echo $h['nomor_undian'] ?></td>
                                        </tr>
                                    </tbody>
                                <?php }; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer">

        </div>
        </div>
    </center>
</body>

<script type="text/javascript">
    $('#btnTampil').click(function() {
        location.href = "../extra/tampil_hadiah_extra.php"
    })

    window.onkeydown = function(event) {

        if (event.keyCode === 221) {
            event.preventDefault();
            document.querySelector('#btnTampil').click();
        }
    }

    setTimeout(function() {
        location = ''
    }, 1500)
</script>

</html>