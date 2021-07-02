<?php
session_start();

if ($_SESSION) {
    if ($_SESSION['usertype'] == "1") {
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../asset/css/app.css">
    <link rel="stylesheet" href="../../res/color/color.css">
</head>

<body class="bg-d">

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p class="h5 g3 mt-3">مساء الخير ...</p>
            </div>
            <!-- <div class="col text-start">
                <a href="../../index.html"><i class="social-icon bi bi-box-arrow-left"></i></a>
            </div> -->
        </div>

        <div class="">  
            <i class="prof-img bi bi-person-circle"> Talent</i>
        </div>

        <div class="container-fluid mb-3 py-3 text-center">
            <div id="PORTFOLIO" class="row">
                <div class="col">
                    <div id="btn-container" class="text-center bg-g2 py-1 px-1 whitey">
                        <a href="view/mwahub.php"><i class="bi bi-award btn-icon whitey"></i></a>
                        <h6 class="whitey">إبداعاتي</h6>
                    </div>
                </div>
                <div class="col">
                <div id="btn-container" class="text-center bg-g2 py-1 px-1 whitey">
                <a href="view/mwahub.php"><i class="bi bi-binoculars btn-icon whitey"></i></a>
                        <h6 class="whitey">اكتشف المواهب</h6>
                    </div>                </div>
            </div><br>
            <div id="PORTFOLIO" class="row">
                <div class="col">
                <div id="btn-container" class="text-center bg-g2 py-1 px-1 whitey">
                <a href="course.php"><i class="bi bi-youtube btn-icon whitey"></i></a>
                        <h6 class="whitey">دوراتي الخاصة</h6>
                    </div>                </div>
                <div class="col">
                <div id="btn-container" class="text-center bg-g2 py-1 px-1 whitey">
                <a href="course.php"><i class="bi bi-film btn-icon whitey"></i></a>
                        <h6 class="whitey">الدورات والمهارات</h6>
                    </div>                </div>
            </div><br>
            <div id="PORTFOLIO" class="row">
                <div class="col">
                <div id="btn-container" class="text-center bg-g2 py-1 px-1 whitey">
                <a href="store.php"><i class="bi bi-bag btn-icon whitey"></i></a>
                        <h6 class="whitey">منتجاتي</h6>
                    </div>                </div>
                <div class="col">
                <div id="btn-container" class="text-center bg-g2 py-1 px-1 whitey">
                <a href="store.php"><i class="bi bi-basket2 btn-icon whitey"></i></a>
                        <h6 class="whitey">منتجات الموهوبين</h6>
                    </div>                </div>
            </div><br>
            <div id="PORTFOLIO" class="row">
                <div class="col">
                <div id="btn-container" class="text-center bg-g2 py-1 px-1 whitey">
                <a href=""><i class="bi bi-building btn-icon whitey"></i></a>
                        <h6 class="whitey">عروض الشركات</h6>
                    </div>                </div>
                <div class="col">
                <div id="btn-container" class="text-center bg-g2 py-1 px-1 whitey">
                <a href=""><i class="bi bi-cash-coin btn-icon whitey"></i></a>
                        <h6 class="whitey">ارباحي</h6>
                    </div>                </div>
            </div><br>
        </div>

    </div>

    <nav class="">
        <div class=" btm-nav d-flex justify-content-between px-4 py-1">
            <a class="" href="#"><i class="btn-nav-icon active-icon bi bi-house"></i></a>
            <a class="" href="store.php"><i class="btn-nav-icon g2 bi bi-shop"></i></a>
            <a class="" href="course.php"><i class="btn-nav-icon g2 bi bi-book"></i></a>
            <a class="" href="setting.php"><i class="btn-nav-icon g2 bi bi-gear"></i></a>

        </div>
    </nav>

    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("../../sw.js")
                .then(function(reg) {
                    console.log("SW Registered", reg);
                })
                .catch(function(err) {
                    console.log("SW Not Registered", err);
                });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>