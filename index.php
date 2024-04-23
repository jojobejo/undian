<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Undian</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-grid.css" rel="stylesheet">
    <link href="../css/bootstrap-reboot.css" rel="stylesheet">
    <link href="../css/bootstrap-themes.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DynaPuff">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background-image: url("images/bg-undian.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .logo1 {
        width: 300px;
        height: 200px;
        background-image: url('images/karisma.png');
        background-repeat: no-repeat;
        background-size: contain;
        position: absolute;
        left: 530px;
    }

    .logo2 {
        width: 600px;
        height: 600px;
        background-image: url('images/extra.png');
        background-repeat: no-repeat;
        background-size: contain;
        position: absolute;
        top: -10px;
        left: 380px;
    }

    .logo3 {
        width: 200px;
        height: 200px;
        background-image: url('images/2022.png');
        background-repeat: no-repeat;
        background-size: contain;
        position: absolute;
        top: 175px;
        left: 575px;
    }

    .menuSilver {
        position: absolute;
        top: 400px;
        left: 250px;

    }

    .menuGold {
        position: absolute;
        top: 400px;
        left: 550px;

    }

    .menuPlatinum {
        position: absolute;
        top: 400px;
        left: 850px;

    }

    h1 {
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: black;
        font-family: "DynaPuff", sans-serif;
        color: gold;
        position: absolute;
        font-weight: bold;
        font-size: 75px;
        top: 280px;
        left: 280px;
    }
</style>

<body>
    <div>
        <!-- <div class="logo1"></div> -->
    </div>
    <div>
        <h1> Pilih Katagori Undian </h1>
        <div id="silver">
            <a href="silver/index.php" class="menuSilver"><img src="images/Kupon S.png"></a>
        </div>
        <div id="gold">
            <a href="gold/index.php" class="menuGold"><img src="images/Kupon.png"></a>
        </div>
        <div id="platinum">
            <a href="platinum/index.php" class="menuPlatinum"><img src="images/Kupon P.png"></a>
        </div>
        <div id="extra">
            <a href="platinum/index.php" class="menuPlatinum"><img src="images/Kupon P.png"></a>
        </div>
    </div>

    <script>
        $('#silver').click(function() {
            location.href = "../undian/silver/index.php"
        })
        $('#gold').click(function() {
            location.href = "../undian/gold/index.php"
        })
        $('#platinum').click(function() {
            location.href = "../undian/platinum/index.php"
        })
        $('#extra').click(function() {
            location.href = "../undian/extra/index.php"
        })

        window.onkeydown = function(event) {
            if (event.keyCode === 49) {
                event.preventDefault();
                document.querySelector('#silver').click();
            }
            if (event.keyCode === 50) {
                event.preventDefault();
                document.querySelector('#gold').click();
            }
            if (event.keyCode === 51) {
                event.preventDefault();
                document.querySelector('#platinum').click();
            }
            if (event.keyCode === 52) {
                event.preventDefault();
                document.querySelector('#extra').click();
            }
        }
    </script>
</body>

</html>