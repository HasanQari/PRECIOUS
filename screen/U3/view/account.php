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

    <link rel="shortcut icon" href="../../../res/img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../../res/img/logo.png">

    <link rel="manifest" href="../../../manifest.json">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../asset/css/app.css">
    <link rel="stylesheet" href="../../../res/color/color.css">
</head>

<body class="bg-d">

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p class="h5 g3 mt-3">مساء الخير ...</p>
            </div>
            <div class="col text-start">
                <a href="../profile.php"><i class="social-icon bi bi-arrow-left"></i></a>
            </div>
        </div>

        <div class="text-center">
            <i class="prof-img bi bi-person-circle" style="font-size: 70px;"></i>
        </div>

        <div class="container-fluid mb-3 py-3 text-center">

            <div>
                <form action="" class="">
                    <div class="row my-2">
                        <div class="col-4">
                            <label for="fname" class="col-form-label g4 bold">الاسم الأول:</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">
                            <label for="lname" class="col-form-label g4 bold">الاسم الاخير:</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="lname" id="lname" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">
                            <label for="email" class="col-form-label g4 bold">الايميل:</label>
                        </div>
                        <div class="col-8">
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">
                            <label for="phone" class="col-form-label g4 bold">الجوال:</label>
                        </div>
                        <div class="col-8">
                            <input type="tel" name="phone" id="phone" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">
                            <label for="address" class="col-form-label g4 bold">العنوان:</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="adress" id="aderss" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">
                            <label for="city" class="col-form-label g4 bold">المدينة:</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="city" id="city" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">
                            <label for="age" class="col-form-label g4 bold">العمر:</label>
                        </div>
                        <div class="col-8">
                            <input type="date" name="age" id="age" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">
                            <label for="password" class="col-form-label g4 bold">كلمة المرور:</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="my-2 text-center">
                        <input type="radio" class="btn-check w30" name="gender" id="male" autocomplete="off">
                        <label class="btn btn-g1 w40 mx-1" for="male">ذكر</label>

                        <input type="radio" class="btn-check w30" name="gender" id="female" autocomplete="off">
                        <label class="btn btn-g1 w40 mx-1" for="female">أنثى</label>
                    </div>
                    <button class="btn btn-g2 w80 my-3">حفظ</button>
                </form>
            </div>

        </div>

    </div>

    <!-- <nav class="">
        <div class=" btm-nav d-flex justify-content-between px-4 py-1">
            <a class="" href="#"><i class="btn-nav-icon active-icon bi bi-house"></i></a>
            <a class="" href="store.php"><i class="btn-nav-icon g2 bi bi-shop"></i></a>
            <a class="" href="course.php"><i class="btn-nav-icon g2 bi bi-book"></i></a>
            <a class="" href="setting.php"><i class="btn-nav-icon g2 bi bi-gear"></i></a>

        </div>
    </nav> -->

    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("../../../sw.js")
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