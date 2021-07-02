<?php

require '../../database/connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$uesrtype = $_POST['ut'];

$INSERT = "INSERT INTO `user`( `username`, `email`, `pass`, `usertype`) VALUES ('$username','$email','$pass','$uesrtype')";

$result = mysqli_query($conn, $INSERT);
echo $result;

if ($result) {
    echo '
    <!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="refresh" content="5;url=../view/sign-in.php">

    <meta name="theme-color" content="#d7b04d" />

    <title>بريشس | PRECIOUS</title>

    <link rel="shortcut icon" href="../../res/img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../res/img/logo.png">

    <link rel="manifest" href="../../manifest.json">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../asset/css/app.css">
    <link rel="stylesheet" href="../../res/color/color.css">
</head>

<body class="bg-d">

    <div class="container">
        <div class="my-5 mx-5 py-3 px-3 text-center">

            <img src="../../res/img/logo.png" class="img-fluid" alt="">
            <h1 class="h1 whitey">تم انشاء الحساب بنجاح سيتم تحويلك تلقائياً لصفحة تسجيل الدخول</h1>
            <i class="bi bi-check-circle g3 my-3"
            style="font-size: 50px;margin-top:3%"></i>

        </div>
    </div>

    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("../..//sw.js")
                .then(function (reg) {
                    console.log("SW Registered", reg);
                })
                .catch(function (err) {
                    console.log("SW Not Registered", err);
                });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
    ';
} else {
    echo '
    <!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="refresh" content="5;url=../view/sign-in.php">

    <meta name="theme-color" content="#d7b04d" />

    <title>بريشس | PRECIOUS</title>

    <link rel="shortcut icon" href="../../res/img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../res/img/logo.png">

    <link rel="manifest" href="../../manifest.json">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../asset/css/app.css">
    <link rel="stylesheet" href="../../res/color/color.css">
</head>

<body class="bg-d">

    <div class="container">
        <div class="my-5 mx-5 py-3 px-3 text-center">

            <img src="../../res/img/logo.png" class="img-fluid" alt="">
            <h3 class="h3 whitey">تعذر انشاء الحساب يرجى المحاولة مرة أخرى وفي حال استمرت المشكلة يرجة التواصل مع الدعم</h3>
            <h6 class="h6 whitey">Help@precious.com</h6>
            <i class="bi bi-x-circle g3 my-3"
            style="font-size: 50px;margin-top:3%"></i>

        </div>
    </div>

    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("../../sw.js")
                .then(function (reg) {
                    console.log("SW Registered", reg);
                })
                .catch(function (err) {
                    console.log("SW Not Registered", err);
                });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
    ';
    echo $result;
}

mysqli_close($conn);
