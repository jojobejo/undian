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
    <!-- <link href="../css/bootstrap-themes.css" rel="stylesheet"> -->
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

        .silver {
            font-family: 'Lobstertwo', sans-serif;
            font-size: 60px;
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
            top: 420px;
            left: 350px;
            width: 1200px;
            height: 300px;
            border-radius: 20px;
            border: black;
            border-style: solid;
        }

        .posnoundi {
            position: absolute;
            top: 620px;
            left: 210px;
            width: 1400px;
            height: 190px;
            border-radius: 50px;
            border-style: solid;
            border: black;
        }

        .poswin1 {
            position: absolute;
            top: 150px;
            left: -10px;
        }

        .poswin2 {
            position: absolute;
            top: 100px;
            left: 430px;
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
        }

        .sizes {
            height: 120px;
            position: absolute;
            left: 100px;
            top: 300px;
        }

        .img-thumbnail {
            background-color: transparent;
            border: none;
            height: 250px;
            width: 150px;
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

        .btn-warning,
        .btn-warning:hover,
        .btn-warning:active,
        .btn-warning:visited {
            background-color: linear-gradient(#FFE880, #B59451, #966D2F) !important;
        }

        .gbr-custom {
            height: 150px;
            width: 150px;
        }

        .mobil-img {
            position: absolute;
            left: 100px;
            top: 220px;
        }
    </style>
</head>
<!-- background-repeat: no-repeat; height:auto; background-size: cover; -->

<body>
    <div class="container">
        <center>
            <div class="pemenang" hidden>
                <a href="#" class=" btn btn-warning btn-lg" id="btnTampil" role="button"><i class="fa fa-trophy"></i>
                    Tampilkan Pemenang</a>
            </div>
            <div class="home" hidden>
                <a href="#" class=" btn btn-warning btn-lg" id="btnHome" role="button"><i class="fa fa-home"></i>
                    Menu</a>
            </div>
            <div class="card posCard1 card-pilih" hidden>
                <div class="card-header" hidden>
                    <h2 class="silver">UNDIAN PLATINUM</h2>
                </div>
                <div class="card-body" hidden>
                    <form id="frmAngka" method="post" action="index.html">
                        <div class="form-group lblhide">
                            <label for="txtAwal" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal" placeholder="Angka awal" min="1" value="0">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAkhir" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir" placeholder="Angka akhir" min="0" value="2">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal1" placeholder="Angka awal1" min="1" value="0">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAkhir1" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir1" placeholder="Angka akhir1" min="1" value="6">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal2" placeholder="Angka awal2" min="1" value="0">
                        </div>
                        <div class="form-group lblhide">
                            <label for="txtAkhir1" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir2" placeholder="Angka akhir2" min="1" value="9">
                        </div>

                    </form>
                </div>
                <div class="card-footer" hidden>
                    <button type="submit" class="btn btn-block btn-success" id="btnAcak" onclick="mulai()">Mulai
                        Undian</button>
                </div>
            </div>

            <?php
            $qprize = " SELECT tb_prize.*,tb_undian.*
            FROM tb_prize
            JOIN tb_undian ON tb_undian.id_kat_undi = tb_prize.id_kat_undi
            WHERE tb_undian.kat_undian = 'platinum'
            AND tb_prize.id_prize = $id_prize ";
            
            $rprize = mysqli_query($koneksi, $qprize);
            ?>

            <div class="container-x">
                <div class="row">
                    <?php while ($row = mysqli_fetch_array($rprize)) :; ?>
                        <div class='col md-4'>
                            <div class='row'>
                                <div class="col md-1">
                                    <img src="../images/hadiah/ echo $row['img'] ?>" class="mobil-img" style="height: 500px; width: 800px;">
                                    <p id="result_prize" hidden><?php echo $row['id_prize'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
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

            <div class="modal" tabindex="" role="dialog" id="modalPrize">
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

        var urlGetDataUndian = "https://kiu.co.id/undian/get-detail-undian-platinum.php";

        $('#btnHome').click(function() {
            location.href = "../index.php"
        })

        $('#btnTampil').click(function() {
            location.href = "../index.php"
        })
        $('#btnSimpan').click(function() {
            $("#formWin").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'https://kiu.co.id/undian/saveWinPlatinum.php',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        location.reload();
                    }
                });
            })
        })

        window.onkeydown = function(event) {

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
            if (event.keyCode === 16) {
                event.preventDefault();
                document.querySelector('#btnSimpan').click();
            }
            if (event.keyCode === 32) {
                event.preventDefault();
                document.querySelector('#btnAcak').click();
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

                count = 11;

                jalan = true;
                jalan1 = true;
                jalan2 = true;

                setTimeout('ubahAngkaAcak()', 5);
                setTimeout('ubahAngkaAcak1()', 5);
                setTimeout('ubahAngkaAcak2()', 5);


            }
            return false;
        });


        $('#btnBerhenti').click(function() {

            count--;
            let hasil3 = $('#lblAngka2').html();
            let hasil2 = $('#lblAngka1').html();
            let hasil1 = $('#lblAngka').html();

            let hasil = $('#lblAngka1').html() + $('#lblAngka2').html();

            switch (count) {
                case 10:
                    jalan = true;
                    jalan1 = true;
                    jalan2 = false
                    break;
                case 9:
                    jalan = true;
                    jalan1 = false;
                    jalan2 = false;
                    break;
                case 8:
                    if (hasil1 == 2) {
                        jalan = true;
                    } else {
                        jalan = false;
                        setTimeout('tmplPemenang()', 1000);
                    }
                    break;
                case 7:
                    if (hasil1 == 2) {
                        jalan = true;
                    } else {
                        jalan = false;
                        setTimeout('tmplPemenang()', 1000);
                    }
                    break;
                case 6:
                    if (hasil1 == 2) {
                        jalan = true;
                    } else {
                        jalan = false;
                        setTimeout('tmplPemenang()', 1000);
                    }
                    break;
                case 5:
                    if (hasil1 == 2) {
                        jalan = true;
                    } else {
                        jalan = false;
                        setTimeout('tmplPemenang()', 1000);
                    }
                    break;
                case 4:
                    if (hasil1 == 2) {
                        jalan = true;
                    } else {
                        jalan = false;
                        setTimeout('tmplPemenang()', 1000);
                    }
                    break;
                case 3:
                    if (hasil1 == 2) {
                        jalan = true;
                    } else {
                        jalan = false;
                        setTimeout('tmplPemenang()', 1000);
                    }
                    break;
                case 2:
                    if (hasil1 == 2) {
                        jalan = true;
                    } else {
                        jalan = false;
                        setTimeout('tmplPemenang()', 1000);
                    }
                    break;
                case 1:
                    if (hasil1 == 2) {
                        jalan = true;
                    } else {
                        jalan = false;
                        setTimeout('tmplPemenang()', 1000);
                    }
                    break;
            }
            return false;
        });

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
            if (jalan == true) {
                document.getElementById("lblAngka").value = $('#lblAngka');

                let angka = angkaAcak();

                $("#lblAngka").text(angka);

                setTimeout('ubahAngkaAcak()', 5);

            } else {

                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
                $("#btnAcak").prop('disabled', false);
                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
                $("#btnBerhenti").prop('disable', false);
            }
        }

        function ubahAngkaAcak1() {
            if (jalan1 == true) {
                document.getElementById("lblAngka1").value = $('#lblAngka1');

                let angka1 = angkaAcak1();

                $("#lblAngka1").text(angka1);

                setTimeout('ubahAngkaAcak1()', 5);

            } else {

                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
                $("#btnAcak").prop('disabled', false);
                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
                $("#btnBerhenti").prop('disable', false);
            }
        }

        function ubahAngkaAcak2() {
            if (jalan2 == true) {
                document.getElementById("lblAngka2").value = $('#lblAngka2');

                let angka2 = angkaAcak2();

                $("#lblAngka2").text(angka2);

                setTimeout('ubahAngkaAcak2()', 5);

            } else {

                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
                $("#btnAcak").prop('disabled', false);
                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
                $("#btnBerhenti").prop('disabled', false);
            }
        }

        function radioGet(getValue) {
            document.getElementById('result_prize').innerHTML = getValue;
        }

        function tmplPemenang() {
            let hasil = $('#lblAngka').html() + $('#lblAngka1').html() + $('#lblAngka2').html();
            console.log(hasil);

            let hadiah = $('#result_prize').html()
            console.log(hadiah);

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
                            <br>
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