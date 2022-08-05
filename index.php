<?php
require('config.php');
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
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet">
    <link href="css/bootstrap-themes.css" rel="stylesheet">

    <style>
        .modalCenter {
            top: 50% !important;
            transform: translateY(-50%) !important;
        }

        .h3Center {
            text-align: center;
        }
        input{
            text-align: center;
        }

    </style>
</head>
<!-- background-repeat: no-repeat; height:auto; background-size: cover; -->

<body>
    <div class="container">
        <center>
            <div class="page-header" style="margin-top:-10px;">
                <img src="images/logo.png" alt="banner depan" class="img-fluid" height="auto" width="20%">
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>UNDIAN SILVER</h2>
                </div>
                <div class="card-body ">
                    <form id="frmAngka" method="post" action="index.html">
                        <div class="form-group">
                            <label for="txtAwal" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal" placeholder="Angka awal" min="1" value="0">
                        </div>
                        <div class="form-group">
                            <label for="txtAkhir" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir" placeholder="Angka akhir" min="1" value="1">
                        </div>
                        <div class="form-group">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal1" placeholder="Angka awal1" min="1" value="0">
                        </div>
                        <div class="form-group">
                            <label for="txtAkhir1" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir1" placeholder="Angka akhir1" min="1" value="9">
                        </div>
                        <div class="form-group">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal2" placeholder="Angka awal2" min="1" value="0">
                        </div>
                        <div class="form-group">
                            <label for="txtAkhir1" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir2" placeholder="Angka akhir2" min="1" value="9">
                        </div>
                        <div class="form-group">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal3" placeholder="Angka awal3" min="1" value="0">
                        </div>
                        <div class="form-group">
                            <label for="txtAkhir1" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir3" placeholder="Angka akhir3" min="1" value="9">
                        </div>
                        <div class="form-group">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal4" placeholder="Angka awal2" min="1" value="0">
                        </div>
                        <div class="form-group">
                            <label for="txtAkhir1" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir4" placeholder="Angka akhir2" min="1" value="9">
                        </div>
                        <div class="form-group">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal5" placeholder="Angka awal2" min="1" value="0">
                        </div>
                        <div class="form-group">
                            <label for="txtAkhir1" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir5" placeholder="Angka akhir2" min="1" value="9">
                        </div>
                        <div class="form-group">
                            <label for="txtAwal1" hidden>Angka awal</label>
                            <input type="hidden" class="form-control" id="txtAwal6" placeholder="Angka awal2" min="1" value="0">
                        </div>
                        <div class="form-group">
                            <label for="txtAkhir1" hidden>Angka akhir</label>
                            <input type="hidden" class="form-control" id="txtAkhir6" placeholder="Angka akhir2" min="1" value="9">
                        </div>

                        <?php
                        $qprize = "SELECT * FROM tb_prize";
                        $rprize = mysqli_query($koneksi, $qprize);
                        ?>
                        <h3>Pilih Hadiah Yang Akan Di Undi</h3>
                        <select class="form-control form-control-lg" id="p_prize">
                            <?php while ($row = mysqli_fetch_array($rprize)) :; ?>
                                <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </form>



                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-block btn-success" id="btnAcak" onclick="mulai()">Mulai Undian</button>
                </div>
            </div>
            <div class="card mt-5 mb-5">
                <div class="d-flex flex-row justify-content-center">
                    <h3 class="col-md-1" id="lblAngka"> 0 </h3>
                    <h3 class="col-md-1" id="lblAngka1"> 1 </h3>
                    <h3 class="col-md-1" id="lblAngka2"> 2 </h3>
                    <h3 class="col-md-1" id="lblAngka3"> 3 </h3>
                    <h3 class="col-md-1" id="lblAngka4"> 4 </h3>
                </div>
                <div class="card-footers">
                    <button type="button" class="btn btn-block btn-success" id="btnBerhenti" disabled>Berhenti</button>
                </div>
            </div>

            <div class="modal" tabindex="-1" role="dialog" id="modalPrize">
                <div class="modal-dialog modalCenter" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5 class="modal-title w-100">SELAMAT UNTUK</h5>
                        </div>
                        <div class="modal-body text-center">
                            <form method="post" id="formWin" class="form-inline justify-content-center">
                                <div id="hasil-undian">
                                </div>
                                <div>
                                <h3 class="h3Center"><input type="text" name="hadiah" id="hadiah" value="" style="border:none;text-align:center" readonly/></h3>
                                </div>
                            <input type="submit" name="simpan" id="simpan" value="Lanjutkan Undian" class="btn btn-block btn-success"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </center>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5>Pemenang 1</h5>
                    </div>
                    <div class="card-body">
                        <h5>Nama Toko</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5>Pemenang 1</h5>
                    </div>
                    <div class="card-body">
                        <h5>Nama Toko</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5>Pemenang 1</h5>
                    </div>
                    <div class="card-body">
                        <h5>Nama Toko</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5>Pemenang 1</h5>
                    </div>
                    <div class="card-body">
                        <h5>Nama Toko</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5>Pemenang 1</h5>
                    </div>
                    <div class="card-body">
                        <h5>Nama Toko</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- SCRIPT UNDIAN -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap Validator -->
    <script src="js/validator.min.js"></script>
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
        var urlGetDataUndian = "http://192.168.10.94/undian/get-detail-undian.php";

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
                jalan1 = true;
                setTimeout('ubahAngkaAcak1()', 50);
                jalan2 = true;
                setTimeout('ubahAngkaAcak2()', 50);
                jalan3 = true;
                setTimeout('ubahAngkaAcak3()', 50);
                jalan4 = true;
                setTimeout('ubahAngkaAcak4()', 50);



                count = 5;

            }
            return false;
        });


        $('#btnBerhenti').click(function() {
            switch (count) {
                case 5:
                    jalan = false;
                    jalan1 = true;
                    jalan2 = true;
                    jalan3 = true;
                    jalan4 = true;

                    break;
                case 4:
                    jalan = false;
                    jalan1 = false;
                    jalan2 = true;
                    jalan3 = true;
                    jalan4 = true;

                    break;
                case 3:
                    jalan = false;
                    jalan1 = false;
                    jalan2 = false;
                    jalan3 = true;
                    jalan4 = true;

                    break;
                case 2:
                    jalan = false;
                    jalan1 = false;
                    jalan2 = false;
                    jalan3 = false;
                    jalan4 = true;

                    break;
                case 1:
                    jalan = false;
                    jalan1 = false;
                    jalan2 = false;
                    jalan3 = false;
                    jalan4 = false;

            }
            count--;
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

        function angkaAcak3() {
            return Math.floor(Math.random() * (akhir3 - awal3 + 1) + awal3);
        }

        function angkaAcak4() {
            return Math.floor(Math.random() * (akhir4 - awal4 + 1) + awal4);
        }


        function ubahAngkaAcak4() {
            if (jalan4 == true) {
                document.getElementById("lblAngka4").value = $('#lblAngka4');
                let angka4 = angkaAcak4();
                $("#lblAngka4").text(angka4);
                setTimeout('ubahAngkaAcak4()', 50);
            } else {
                $("btnReset").prop('disabled', true);
                $("#btnBerhenti").prop('disabled', true);
                $("#btnAcak").prop('disabled', false);
                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
                let hasil = $('#lblAngka').html() + $('#lblAngka1').html() + $('#lblAngka2').html() + $('#lblAngka3').html() + $('#lblAngka4').html();
                console.log(hasil);
                $('#modalPrize').modal("show");
                var id_undian = $(this).attr("id");

                $("#formWin").submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        url: 'saveWin.php',
                        type: 'post',
                        data: $(this).serialize(),
                        success: function(data){
                            window.location.reload();
                        }
                    });
                })
                $.ajax({
                    type: "get",
                    url: urlGetDataUndian + '?id=' + hasil,
                    data: {
                        id_undian: id_undian 
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#hasil-undian').append(`
                           <h3 class="h3Center"><input type="text" name="nama_toko" id="nama_toko" value="${response.nama_toko}" style="border:none;text-align:center" readonly/></h3>
_                        `);
                        $("#p_prize option:selected").val()
                    }
                });

            }
        }

        function ubahAngkaAcak3() {
            if (jalan3 == true) {
                document.getElementById("lblAngka3").value = $('#lblAngka3');
                let angka3 = angkaAcak3();
                $("#lblAngka3").text(angka3);
                setTimeout('ubahAngkaAcak3()', 50);
            } else {
                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
            }
        }

        function ubahAngkaAcak2() {
            if (jalan2 == true) {
                document.getElementById("lblAngka2").value = $('#lblAngka2');
                let angka2 = angkaAcak2();
                $("#lblAngka2").text(angka2);
                setTimeout('ubahAngkaAcak2()', 50);
            } else {
                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
            }
        }

        function ubahAngkaAcak1() {
            if (jalan1 == true) {
                document.getElementById("lblAngka1").value = $('#lblAngka1');
                let angka1 = angkaAcak1();
                $("#lblAngka1").text(angka1);;
                setTimeout('ubahAngkaAcak1()', 50);
            } else {
                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);
            }
        }

        function ubahAngkaAcak() {
            if (jalan == true) {
                document.getElementById("lblAngka").value = $('#lblAngka');
                let angka = angkaAcak();
                $("#lblAngka").text(angka);;
                setTimeout('ubahAngkaAcak()', 50);
            } else {

                $("#txtAkhir").prop('disabled', false);
                $("#txtAwal").prop('disabled', false);

            }
        }

        function getInputValue() {
            var inputVal = document.setElementById("myInput").value = $('$lblAngka');
            var inputVal = document.setElementById("myInput").value = $('$lblAngka1');
            alert(inputVal);
        }
    </script>

</body>

</html>