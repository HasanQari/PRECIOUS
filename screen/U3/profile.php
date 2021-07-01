<?php
session_start();

if ($_SESSION) {
    if ($_SESSION['usertype'] == "3") {
        echo '
        
        ';
    } else {
        echo '<h1>You are not an authorised user</h1>';
        die();
    }
} else {
    echo '
    
    ';
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <div class="">


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