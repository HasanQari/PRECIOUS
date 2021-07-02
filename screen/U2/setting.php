<?php
session_start();

if ($_SESSION) {
    if ($_SESSION['usertype'] == "2") {
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
            <div class="col text-start">
                <a href="profile.php"><i class="social-icon bi bi-arrow-left"></i></a>
            </div>
        </div>

        <div class="">
            <i class="prof-img bi bi-person-circle"> <?php echo $_SESSION['username'] ?></i>
        </div>

        <div class="list-group mt-3 mb-5">
            <a href="view/account.php" class="list-group-item list-group-item-action">المعلومات الشخصية</a>
            <a href="" class="list-group-item list-group-item-action">الموهبة والتفضيلات</a>
            <a href="" class="list-group-item list-group-item-action">العضويات والاشتراكات</a>
            <!-- <a href="" class="list-group-item list-group-item-action">عروض الشركات</a> -->
            <br>
            <a href="" class="list-group-item list-group-item-action">من نحن</a>
            <a href="" class="list-group-item list-group-item-action">السياسات والأحكام</a>
            <a href="" class="list-group-item list-group-item-action">طريقة الاستخدام</a>
            <a href="" class="list-group-item list-group-item-action">تقييم التطبيق</a>
            <a href="https://wa.link/bw596k" class="list-group-item list-group-item-action">التواصل مع الدعم الفني</a>
            <br>
            <a href="../../auth/config/sign-out.php" class="list-group-item list-group-item-action">تسجيل الخروج</a>
        </div>
    </div>

    <!-- <nav class="">
        <div class=" btm-nav d-flex justify-content-between px-4 py-1">
            <a class="" href="profile.php"><i class="btn-nav-icon g2 bi bi-house"></i></a>
            <a class="" href="store.php"><i class="btn-nav-icon g2 bi bi-shop"></i></a>
            <a class="" href="course.php"><i class="btn-nav-icon g2 bi bi-book"></i></a>
            <a class="" href="#"><i class="btn-nav-icon active-icon bi bi-gear"></i></a>

        </div>
    </nav> -->

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