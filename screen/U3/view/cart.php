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
        <!-- <div class="row">
            <div class="col">
                <p class="h5 g3 mt-3">مساء الخير ...</p>
            </div>
            <div class="col text-start">
                <a href="../../index.html"><i class="social-icon bi bi-box-arrow-left"></i></a>
            </div>
        </div>

        <div class="">
            <i class="prof-img bi bi-person-circle"> <?php echo $_SESSION['username'] ?></i>
        </div> -->

        <div class=" w-100 my-2 pt-3 ">
            <h3 class="g4">عربة التسوق</h3>
            <div class="row">
                <div class="col">
                    <p class="whitey">4 عناصر</p>
                </div>
                <div class="col text-start">
                    <i class="bi bi-trash whitey"></i>
                </div>
            </div>
        </div>
        <!-- <hr> -->

        <div class="container-fluid mb-4">

            <div class="card mb-2">
                <div class="row">
                    <div class="col-4">
                        <img src="../../../res/img/logo.png" class="img-fluid rounded-start" height="100%" alt="...">
                    </div>
                    <div class="col-8" style="padding: 0;">
                        <div class="">
                            <h5 class="">اسم المنتج</h5>
                            <h6 class="">00.00 SR</h6>
                            <h6 class="">تفاصيل السلعة - الكمية</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="row">
                    <div class="col-4">
                        <img src="../../../res/img/logo.png" class="img-fluid rounded-start" height="100%" alt="...">
                    </div>
                    <div class="col-8" style="padding: 0;">
                        <div class="">
                            <h5 class="">اسم المنتج</h5>
                            <h6 class="">00.00 SR</h6>
                            <h6 class="">تفاصيل السلعة - الكمية</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="row">
                    <div class="col-4">
                        <img src="../../../res/img/logo.png" class="img-fluid rounded-start" height="100%" alt="...">
                    </div>
                    <div class="col-8" style="padding: 0;">
                        <div class="">
                            <h5 class="">اسم المنتج</h5>
                            <h6 class="">00.00 SR</h6>
                            <h6 class="">تفاصيل السلعة - الكمية</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="row">
                    <div class="col-4">
                        <img src="../../../res/img/logo.png" class="img-fluid rounded-start" height="100%" alt="...">
                    </div>
                    <div class="col-8" style="padding: 0;">
                        <div class="">
                            <h5 class="">اسم المنتج</h5>
                            <h6 class="">00.00 SR</h6>
                            <h6 class="">تفاصيل السلعة - الكمية</h6>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mb-2 o">
                <div class="row">
                    <div class="col">
                        <h6 class="">الطلبات:</h6>
                        <h6 class="">الضريبة:</h6>
                        <h4 class="">المجموع الكلي:</h4>
                    </div>
                    <div class="col text-start">
                        <h6 class="">00.00 SR</h6>
                        <h6 class="">00.00 SR</h6>
                        <h4 class="">00.00 SR</h4>
                    </div>
                </div>
            </div>
            <div class="text-center mb-5">
                <a href="checkout.php" class="btn btn-g3 w90">تابع للدفع</a>
            </div>

        </div>


        <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>


        <div id="wot-new-assistant-container">
            <div data-reactroot=""></div>
        </div>

    </div>

    <nav class="">
        <div class=" btm-nav d-flex justify-content-between px-4 py-1">
            <a class="" href="../profile.php"><i class="btn-nav-icon g2 bi bi-house"></i></a>
            <a class="" href="store.php"><i class="btn-nav-icon g2 bi bi-shop"></i></a>
            <a class="" href="#"><i class="btn-nav-icon active-icon bi bi-cart"></i></a>
            <a class="" href="order.php"><i class="btn-nav-icon g2 bi bi-bag-check"></i></a>
        </div>
    </nav>

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