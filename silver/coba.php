<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-grid.css" rel="stylesheet">
    <link href="../css/bootstrap-reboot.css" rel="stylesheet">
    <link href="../css/bootstrap-themes.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

</head>

<body>

    <form id="cobaForm">
        <input type="radio" name="radioBtn" id="rd1" value="aa">a</br>
        <input type="radio" name="radioBtn" id="rd2" value="bb">b</br>
        <input type="radio" name="radioBtn" id="rd3" value="cc">c</br>

        <button onclick="fn1();" id="btn1">coba</button>
        <input type="text" id="selvalue" name="selvalue">
    </form>

</body>
<script>
    function fn1() {
        var rd1 = document.getElementById("rd1");
        var rd2 = document.getElementById("rd2");
        var rd3 = document.getElementById("rd3");
        if (rd1.checked == true)
            alert("radio value was :" + rd1.value);
        else if (rd2.checked == true)
            alert("radio value was :" + rd2.value);
        else if (rd3.checked == true)
            alert("radio value was :" + rd3.value);
            else
            alert("radio not selected");
    }
</script>

</html>



