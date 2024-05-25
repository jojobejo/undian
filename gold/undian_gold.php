<?php
require('../config.php');

if (isset($_GET['id'])) {
    $id_prize    = $_GET['id'];
} else {
    die("Error. No ID Selected!");
}
include "../config.php";

$query    = mysqli_query($koneksi, "SELECT * FROM tb_prize WHERE id_prize='$id_prize'");
$result    = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rahmad Dawood">
    <meta name="description" content="Bangkitkan bilangan acak antara range tertentu.">
    <title>Undian Gold</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-grid.css" rel="stylesheet">
    <link href="../css/bootstrap-reboot.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style>
        body {
            background-image: url("../images/bg-undian.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .modalCenter {
            top: 35% !important;
            transform: translateY(-50%) !important;
        }

        .h3Center {
            text-align: center;
        }

        .h2Center {
            text-align: center;
            font-weight: bold;
            font-size: 35px;
        }

        .h3hadiah {
            text-align: center;
            position: relative;
            height: 10px;
        }


        .h3noUndian {
            text-align: center;
            font-weight: bold;
            top: 100px;
        }

        .h3tko {
            text-align: center;
            position: relative;
            width: 200px;
            height: 5px;
        }

        input {
            text-align: center;
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

        .posCard1 {
            position: absolute;
            top: 350px;
            left: 350px;
            width: 100px;
            height: 100px;
            border-radius: 20px;
            border: black;
            border-style: solid;
        }

        .posWinSilver {
            position: absolute;
            top: 470px;
            left: 190px;
            height: max-content;
            width: 1220px;
        }

        .posnoundi {
            position: absolute;
            top: 250px;
            left: 310px;
            width: 950px;
            height: 150px;
            border-radius: 50px;
            border-style: solid;
            border: black;
        }

        .poswin1 {
            position: absolute;
            top: 300px;
            left: -10px;
        }

        .poswin2 {
            position: absolute;
            top: 100px;
            left: 430px;
        }

        .bg-primary {
            background-color: #007bff !important;
        }

        .bg-custom-1 {
            background-color: rgba(0, 0, 0, 0.2);
        }

        .lblhide {
            position: absolute;
            top: 10px;
        }

        .card-pilih {
            background-image: linear-gradient(#DCBB60, #FFE880, #B59451, #966D2F);
        }

        .card-undi {
            background-image: linear-gradient(#FFE880, #B59451, #966D2F);
        }

        .h3FontCus {
            font-family: "DynaPuff", sans-serif;
            /* text-decoration: underline; */
            font-weight: bold;
            font-size: 120px;
            top: -20px;
        }

        .sizes {
            height: 200px;
            width: auto;
        }

        .img-thumbnail {
            background-color: transparent;
            border: none;
        }

        .pemenang {
            position: absolute;
            left: 100px;
            top: 10px;
        }

        .home {
            position: absolute;
            left: 90px;
            top: 10px;
        }

        .btnMulaiUndi {
            position: absolute;
            top: 100px;
        }

        .btn-primary,
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:visited {
            height: 50px;
            width: 500px;
            background-color: green;
        }

        .btn-warning,
        .btn-warning:hover,
        .btn-warning:active,
        .btn-warning:visited {
            background-color: linear-gradient(#FFE880, #B59451, #966D2F) !important;
        }

        .container-x {
            position: absolute;
            top: 365px;
            left: 800px;
            width: 200px;
            height: 100px;
            inline-size: auto;
        }

        .txtHadiah {
            font-family: 'Lobstertwo', sans-serif;
            font-size: 60px;
            color: #FFE880;
        }

        table {
            border: 0px;
        }

        table.fontTb {
            font-weight: 800;
            font-size: 30px;
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

        ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            flex-flow: column wrap;
            height: 130px;
        }

        .tbwin1 {
            min-height: 10px;
            height: 100px;
        }

        .tbwin2 {
            max-height: 300px;
            max-width: 880px;
            width: 750px;
            height: 300px;
            margin-left: 120px;
        }
    </style>
</head>
<!-- background-repeat: no-repeat; height:auto; background-size: cover; -->

<body>
    <div class="container">
        <center>
            <div class="pemenang" hidden>
                <a href="#" class=" btn btn-warning btn-lg" id="btnTampil" role="button"><i class="fa fa-trophy"></i> Tampilkan Pemenang</a>
            </div>
            <div class="pemenang" hidden>
                <a href="#" class=" btn btn-warning btn-lg" id="btnTampil_1" role="button"><i class="fa fa-trophy"></i> Tampilkan Pemenang</a>
            </div>
            <div class="home" hidden>
                <a href="#" class=" btn btn-warning btn-lg" id="btnHome" role="button"><i class="fa fa-home"></i> Menu</a>
            </div>
            <div class="menu" hidden>
                <a href="#" class=" btn btn-warning btn-lg" id="btnBackMenu" role="button"><i class="fa fa-home"></i> Menu</a>
            </div>
            <div class="card posCard1 card-pilih" hidden>
                <div class="card-header ">
                    <h3 class="silver">UNDIAN GOLD</h2>
                </div>
                <div class="card-body">
                    <form id="frmAngka" method="post" action="index.html">
                        <div class="form-group lblhide">
                            <label for="txtAwal" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal" placeholder="Angka awal" min="0" value="0">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAkhir" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir" placeholder="Angka akhir" min="0" value="3">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal1" placeholder="Angka awal1" min="1" value="0">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAkhir1" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir1" placeholder="Angka akhir1" min="1" value="9">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal2" placeholder="Angka awal2" min="1" value="0">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAkhir1" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir2" placeholder="Angka akhir2" min="1" value="9">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal3" placeholder="Angka awal3" min="1" value="0">
                        </div>

                    </form>
                </div>
            </div>

            <div class="container-x">
                <div class="row">
                    <div class="col-sm">
                        <p id="result_prize" hidden><?php echo $result['id_prize'] ?></p>
                        <p id="id_hadiah" hidden><?php echo $result['id_prize'] ?></p>
                    </div>
                </div>
            </div>

            <div class="btnMulaiUndi" hidden>
                <button type="button" class="btn btn-block btn-primary" id="btnAcak" onclick="mulai()">Mulai Undian</button>
            </div>

            <div class="card mt-5 mb-5 posnoundi card-undi">
                <div class="d-flex flex-row justify-content-center">
                    <h3 class="col-md-2 h3FontCus" id="lblAngka"> x </h3>
                    <h3 class="col-md-2 h3FontCus" id="lblAngka1"> x </h3>
                    <h3 class="col-md-2 h3FontCus" id="lblAngka2"> x </h3>
                </div>
                <div class="card-footers">
                    <button type="button" class="btn btn-block btn-success mt-2 mb-2 mr-2" id="btnBerhenti" disabled hidden>Berhenti</button>
                </div>
            </div>
            <?php

            $qhadiah = "SELECT tb_win.*,tb_undian.*,tb_prize.*
FROM tb_win
JOIN tb_undian ON tb_undian.id_kat_undi = tb_win.kat_undian
JOIN tb_prize ON tb_win.hadiah = tb_prize.id_prize
where tb_undian.kat_undian = 'gold'
AND tb_win.hadiah = '$id_prize'
            ";
            $hadiah = mysqli_query($koneksi, $qhadiah); 
            ?>
            <div class=" card posWinSilver">
                <div class="card-header">
                    <h3 style="font-size: 32px;">Pemenang Undian - <?= $result['nama_prize'] ?></h3>
                </div>
                <table class="fontTb borderless tbwin1">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($hadiah as $h) {
                            $no++ ?>
                            <tr>
                                <td class="a" width="10%" style="padding-top: 10px;"><?php echo $no; ?>.</td>
                                <td class="b" width="80%" style="padding-top: 15px;"><?php echo $h['nama_toko'] ?></td>
                                <td class="c" width="10%" style="padding-top: 15px;"><?php echo $h['nomor_undian'] ?></td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>

            <div class="modal" tabindex="-1" role="dialog" id="modalPrize">
                <div class="modal-dialog modalCenter " role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h1 class="modal-title w-100">SELAMAT UNTUK</h1>
                        </div>
                        <div class="modal-body text-center">
                            <form method="post" id="formWin" class="form-inline justify-content-center">
                                <div id="hasil-undian">
                                </div>
                                <button type="submit" name="simpan" id="btnSimpan" class="btn btn-block btn-success mt-2">Lanjutkan Undian</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </center>
    </div>

    <!-- SCRIPT UNDIAN -->
    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Bootstrap Validator -->
    <script src="../js/validator.min.js"></script>
    <script type="text/javascript">
        var awal1 = 0;
        var akhir1 = 9;
        var jalan1 = false;

        var awal2 = 0;
        var akhir2 = 9;
        var jalan2 = false;

        var awal = 0;
        var akhir = 9;
        var jalan = false;

        var urlGetDataUndian = "../get-detail-undian-gold.php";


        $('#btnHome').click(function() {
            location.href = "../index.php"
        })

        $('#btnTampil').click(function() {
            location.href = "../gold/tampil_hadiah.php?id=<?= $result['id_prize'] ?>"
        })
        $('#btnTampil_1').click(function() {
            location.href = "../gold/tampil_hadiah_1.php"
        })

        $('#btnBackMenu').click(function() {
            location.href = "../gold/index.php"
        })

        $('#btnSimpan').click(function() {
            $("#formWin").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: '../saveWinGold.php',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        location.reload();
                    }
                });
            })
        })

        window.onkeydown = function(event) {
            // Kode
            // 13  = enter
            // 220 = \
            // 8   = backspace
            // 16  = shift

            if (event.keyCode === 13) {
                event.preventDefault();
                document.querySelector('#btnBerhenti').click();
            }
            if (event.keyCode === 36) {
                event.preventDefault();
                document.querySelector('#btnHome').click();
            }
            if (event.keyCode === 220) {
                event.preventDefault();
                document.querySelector('#btnTampil').click();
            }
            if (event.keyCode === 221) {
                event.preventDefault();
                document.querySelector('#btnTampil_1').click();
            }
            if (event.keyCode === 16) {
                event.preventDefault();
                document.querySelector('#btnSimpan').click();
            }
            if (event.keyCode === 32) {
                event.preventDefault();
                document.querySelector('#btnAcak').click();

            }
            if (event.keyCode === 72) {
                event.preventDefault();
                document.querySelector('#btnBackMenu').click();
            }
        }
        let count = 0;

        $('#btnAcak').click(function() {
            if ($.trim($('#txtAwal').val()) == '')
                alert('Angka awal harus diisi!');
            else if ($.trim($('#txtAkhir').val()) == '')
                alert('Angka akhir harus diisi!');
            else if ($.trim($('#txtAwal1').val()) == '')
                alert('Angka awal harus diisi!');
            else if ($.trim($('#txtAkhir1').val()) == '')
                alert('Angka akhir harus diisi!');
            else if ($.trim($('#txtAwal2').val()) == '')
                alert('Angka Awal Harus diisi!');
            else if ($.trim($('#txtAkhir2').val()) == '')
                alert('Angka akhir harus diisi!')
            else {
                awal = parseInt($("#txtAwal")[0].value);
                $("#txtAwal").prop('disabled', true);
                akhir = parseInt($("#txtAkhir")[0].value);

                awal1 = parseInt($("#txtAwal1")[0].value);
                $("#txtAwal1").prop('disabled', true);
                akhir1 = parseInt($("#txtAkhir1")[0].value);

                awal2 = parseInt($("#txtAwal2")[0].value);
                $("#txtAwal2").prop('disabled', true);
                akhir2 = parseInt($("#txtAkhir2")[0].value);

                $("#txtAkhir").prop('disabled', true);
                $("#txtAkhir1").prop('disabled', true);
                $("#txtAkhir2").prop('disabled', true);

                $("#btnAcak").prop('disabled', true);
                $("#btnBerhenti").prop('disabled', false);
                $("#lblAngka").text(angkaAcak());
                $("#lblAngka1").text(angkaAcak1());
                $("#lblAngka2").text(angkaAcak2());

                jalan = true;
                setTimeout('ubahAngkaAcak()', 5);

            }
            return false;
        });


        // function selesai() {



        //     let hasil =
        //         console.log(hasil)



        //     if (hasil < 200) {
        //         jalan = false;
        //         jalan1 = false;
        //         jalan2 = false;
        //     } else {
        //         jalan = true;
        //         jalan1 = true;
        //         jalan2 = true;
        //         console.log(hasil);
        //     }

        //     return false;
        // }

        $('#btnBerhenti').click(function() {

            var getundi = setInterval(function() {

                let hasil = $('#lblAngka').html() + $('#lblAngka1').html() + $('#lblAngka2').html();

                if (hasil > 329) {
                    jalan = true;
                    jalan1 = true;
                    jalan2 = true;
                } else if (hasil == 0) {
                    jalan = true;
                    jalan1 = true;
                    jalan2 = true;
                } else {
                    jalan = false;
                    jalan1 = false;
                    jalan2 = false;
                }

            }, 5)

            console.log(getundi)
            setTimeout('tmplPemenang()', 300);

        });

        // function checkHasil(){
        //     let hasil = $('#lblAngka').html() + $('#lblAngka1').html() + $('#lblAngka2').html();    
        // }

        $('#btnReset').click(function() {
            jalan = false;
            location.reload();
            return false;
        });

        function angkaAcak() {
            return Math.floor(Math.random() * (akhir - awal + 1) + awal);
        }

        function angkaAcak1() {
            return Math.floor(Math.random() * (akhir1 - awal1 + 1) + awal1);
        }

        function angkaAcak2() {
            return Math.floor(Math.random() * (akhir2 - awal2 + 1) + awal2);
        }

        function ubahAngkaAcak() {
            if (jalan == true || jalan1 == true || jalan2 == true) {
                document.getElementById("lblAngka").value = $('#lblAngka');
                document.getElementById("lblAngka1").value = $('#lblAngka1');
                document.getElementById("lblAngka2").value = $('#lblAngka2');

                let angka = angkaAcak();
                let angka1 = angkaAcak1();
                let angka2 = angkaAcak2();

                $("#lblAngka").text(angka);
                $("#lblAngka1").text(angka1);
                $("#lblAngka2").text(angka2);

                setTimeout('ubahAngkaAcak()', 5);

            } else {

                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
                $("#btnAcak").prop('disabled', false);
                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
                $("#btnBerhenti").prop('disabled', false);
            }
        }

        function tmplPemenang() {

            let hasil = $('#lblAngka').html() + $('#lblAngka1').html() + $('#lblAngka2').html();

            let hadiah = $('#result_prize').html()

            $('#modalPrize').modal("show");
            var id_undian = $(this).attr("id");
            var selected = $('select').find('option:selected').text();

            $.ajax({
                type: "get",
                url: urlGetDataUndian + '?id=' + hasil,
                data: {
                    id_undian: id_undian
                },
                dataType: "json",
                success: function(response) {
                    $('#hasil-undian').append(`
                              <h3 class="h3noUndian">No Undian : ${hasil}</h3>
                            <h3 class="h2Center"><input type="text" name="nama_toko" id="nama_toko" value="${response.nama_toko}" style="border:none;text-align:center" readonly/></h3>
                            </br>
                            <h3 class="h2Center"><input type="text" name="hadiah" id="hadiah" value="${hadiah}" style="border:none;text-align:center" hidden/></h3>
                            <input type="text" name="noundi" id="noundi" value="${response.nomor_undi}" style="border:none;text-align:center" hidden/>
                           `);
                }
            });
        }

        function getInputValue() {
            var inputVal = document.setElementById("myInput").value = $('$lblAngka');
            var inputVal = document.setElementById("myInput").value = $('$lblAngka1');
            alert(inputVal);
        }
    </script>

</body>

</html>