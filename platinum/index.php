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
    <!-- <link href="../css/bootstrap-themes.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
            top: 390px;
            left: 250px;
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
        }

        .sizes {
            height: 150px;
            position: absolute;
            left: 300px;
            top: 200px;
        }

        .sizes1 {
            height: 150px;
            position: absolute;
            left: 700px;
            top: 250px;
        }

        .img-thumbnail {
            background-color: transparent;
            border: none;
            height: 250px;
            width: 150px;
        }
        .img-thumbnail1 {
            background-color: transparent;
            border: none;
            height: 150px;
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
    </style>
</head>
<!-- background-repeat: no-repeat; height:auto; background-size: cover; -->

<body>
    <div class="container">
        <center>
            <div class="pemenang" hidden>
                <a href="#" class=" btn btn-warning btn-lg" id="btnTampil" role="button"><i class="fa fa-trophy"></i> Tampilkan Pemenang</a>
            </div>
            <div class="home" hidden>
                <a href="#" class=" btn btn-warning btn-lg" id="btnHome" role="button"><i class="fa fa-home"></i> Menu</a>
            </div>
            <div class="card-body ">
                <?php
                $qprize = " SELECT tb_prize.*,tb_undian.*
                        FROM tb_prize
                        JOIN tb_undian ON tb_undian.id_kat_undi = tb_prize.id_kat_undi
                        WHERE tb_undian.kat_undian = 'platinum'
                        AND tb_prize.nama_prize = 'City Car Off The Road' ";
                $rprize = mysqli_query($koneksi, $qprize);

                $qprize1 = " SELECT tb_prize.*,tb_undian.*
                        FROM tb_prize
                        JOIN tb_undian ON tb_undian.id_kat_undi = tb_prize.id_kat_undi
                        WHERE tb_undian.kat_undian = 'platinum' 
                        AND tb_prize.nama_prize = 'Sepeda Motor Honda PCX'
                        ";
                $rprize1 = mysqli_query($koneksi, $qprize1);

                ?>
                <div class="row ml-3">
                    <?php while ($row = mysqli_fetch_array($rprize)) :; ?>
                        <a href="../platinum/undian_platinum_mobil.php?id=<?php echo $row['id_prize'] ?>"> <img src="../images/hadiah/<?php echo $row['img'] ?>" class="img-thumbnail sizes" style="height: 450px; width: 650px;"></a>
                </div>
            <?php endwhile; ?>
            <div class="row ml-3">
                <?php while ($row = mysqli_fetch_array($rprize1)) :; ?>
                    <a href="../platinum/undian_platinum_motor.php?id=<?php echo $row['id_prize'] ?>"> <img src="../images/hadiah/<?php echo $row['img'] ?>" class="img-thumbnail1 sizes1" style="height: 400px; width: 500px;"></a>
            </div>
        <?php endwhile; ?>

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

        var awal3 = 0;
        var akhir3 = 9;
        var jalan3 = false;

        var awal4 = 0;
        var akhir4 = 9;
        var jalan4 = false;

        var awal5 = 0;
        var akhir5 = 9;
        var jalan5 = false;

        var awal6 = 0;
        var akhir6 = 9;
        var jalan6 = false;

        var awal = 0;
        var akhir = 9;
        var jalan = false;
        var urlGetDataUndian = "../get-detail-undian-platinum.php";

        $('#btnHome').click(function() {
            location.href = "../index.php"
        })

        $('#btnTampil').click(function() {
            location.href = "../platinum/tampil_hadiah.php"
        })
        $('#btnSimpan').click(function() {
            $("#formWin").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: '../saveWinSilver.php',
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
            if (event.keyCode === 222) {
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
            else if ($.trim($('#txtAwal3').val()) == '')
                alert('Angka Awal Harus diisi!');
            else if ($.trim($('#txtAkhir3').val()) == '')
                alert('Angka akhir harus diisi!')
            else if ($.trim($('#txtAwal4').val()) == '')
                alert('Angka Awal Harus diisi!');
            else if ($.trim($('#txtAkhir4').val()) == '')
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

                awal3 = parseInt($("#txtAwal3")[0].value);
                $("#txtAwal3").prop('disabled', true);
                akhir3 = parseInt($("#txtAkhir3")[0].value);

                awal4 = parseInt($("#txtAwal4")[0].value);
                $("#txtAwal4").prop('disabled', true);
                akhir4 = parseInt($("#txtAkhir4")[0].value);


                $("#txtAkhir").prop('disabled', true);
                $("#txtAkhir1").prop('disabled', true);
                $("#txtAkhir2").prop('disabled', true);
                $("#txtAkhir3").prop('disabled', true);
                $("#txtAkhir4").prop('disabled', true);
                $("#txtAkhir5").prop('disabled', true);
                $("#txtAkhir6").prop('disabled', true);
                $("#btnAcak").prop('disabled', true);
                $("#btnBerhenti").prop('disabled', false);
                $("#lblAngka").text(angkaAcak());
                $("#lblAngka1").text(angkaAcak1());
                $("#lblAngka2").text(angkaAcak2());
                $("#lblAngka3").text(angkaAcak3());
                $("#lblAngka4").text(angkaAcak4());

                jalan = true;
                setTimeout('ubahAngkaAcak()', 5);

            }
            return false;
        });


        $('#btnBerhenti').click(function() {

            var getundi = setInterval(function() {

                let hasil = $('#lblAngka').html() + $('#lblAngka1').html() + $('#lblAngka2').html() + $('#lblAngka3').html() + $('#lblAngka4').html();

                if (hasil > 46109) {
                    jalan = true;
                    jalan1 = true;
                    jalan2 = true;
                } else {
                    jalan = false;
                    jalan1 = false;
                    jalan2 = false;
                }
            }, 100)

            setTimeout('tmplPemenang()', 1500);
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

        function angkaAcak3() {
            return Math.floor(Math.random() * (akhir3 - awal3 + 1) + awal3);
        }

        function angkaAcak4() {
            return Math.floor(Math.random() * (akhir4 - awal4 + 1) + awal4);
        }

        function ubahAngkaAcak() {
            if (jalan == true || jalan1 == true || jalan2 == true || jalan3 == true || jalan4 == true) {
                document.getElementById("lblAngka").value = $('#lblAngka');
                document.getElementById("lblAngka1").value = $('#lblAngka1');
                document.getElementById("lblAngka2").value = $('#lblAngka2');
                document.getElementById("lblAngka3").value = $('#lblAngka3');
                document.getElementById("lblAngka4").value = $('#lblAngka4');

                let angka = angkaAcak();
                let angka1 = angkaAcak1();
                let angka2 = angkaAcak2();
                let angka3 = angkaAcak3();
                let angka4 = angkaAcak4();



                $("#lblAngka").text(angka);
                $("#lblAngka1").text(angka1);
                $("#lblAngka2").text(angka2);
                $("#lblAngka3").text(angka3);
                $("#lblAngka4").text(angka4);

                setTimeout('ubahAngkaAcak()', 50);

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
            let hasil = $('#lblAngka').html() + $('#lblAngka1').html() + $('#lblAngka2').html() + $('#lblAngka3').html() + $('#lblAngka4').html();
            console.log(hasil);

            let hadiah = $('#result_prize').html()
            console.log(hadiah);

            $('#modalPrize').modal("show");
            var id_undian = $(this).attr("id");
            var selected = $('select').find('option:selected').text();

            $('#r_hadiah').change(function() {
                var selected = $(this).find('option:selected').text();
                alert(selected);
            });







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
                            <h3 class="h3hadiah">HADIAH YANG DI DAPAT</h3>
                            </br>
                            <h3 class="h2Center"><input type="text" name="hadiah" id="hadiah" value="${hadiah}" style="border:none;text-align:center" readonly/></h3>
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