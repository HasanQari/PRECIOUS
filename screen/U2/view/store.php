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

        <div class="bg-g1 w-100 my-2 py-3 text-center">
            <h3 class="whitey">متجر مواهب</h3>
        </div>

        <div class="whitey">

            <header class="navbar navbar-dark sticky-top sticky-left bg-dark flex-md-nowrap p-0 shadow">
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل" style="display: contents;">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <input class="form-control form-control-dark w90" type="text" placeholder="بحث" aria-label="بحث">

            </header>

            <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                        <div class="position-sticky pt-3">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                        متجر مواهب
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true">
                                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                            <polyline points="13 2 13 9 20 9"></polyline>
                                        </svg>
                                        الطلبات
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart" aria-hidden="true">
                                            <circle cx="9" cy="21" r="1"></circle>
                                            <circle cx="20" cy="21" r="1"></circle>
                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                        </svg>
                                        العربة
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 pb-3 text-center">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <!-- <h1 class="h2">لوحة التحكم</h1> -->
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">فلتر</button>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                    ترتيب حسب
                                </button>
                            </div>
                        </div>

                        <div class="row blacky my-2">
                            <div class="col">
                                <div class="card">
                                    <img src="../../../res/img/logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">اسم المنتج</h5>
                                        <p class="card-text">وصف المنتج</p>
                                        <p class="card-text">00.00 SR</p>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-g2"><i class="bi bi-cart whitey"></i></a>
                                            <a href="#" class="btn btn-g2"><i class="bi bi-star whitey"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="../../../res/img/logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">اسم المنتج</h5>
                                        <p class="card-text">وصف المنتج</p>
                                        <p class="card-text">00.00 SR</p>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-g2"><i class="bi bi-cart whitey"></i></a>
                                            <a href="#" class="btn btn-g2"><i class="bi bi-star whitey"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row blacky my-2">
                            <div class="col">
                                <div class="card">
                                    <img src="../../../res/img/logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">اسم المنتج</h5>
                                        <p class="card-text">وصف المنتج</p>
                                        <p class="card-text">00.00 SR</p>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-g2"><i class="bi bi-cart whitey"></i></a>
                                            <a href="#" class="btn btn-g2"><i class="bi bi-star whitey"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="../../../res/img/logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">اسم المنتج</h5>
                                        <p class="card-text">وصف المنتج</p>
                                        <p class="card-text">00.00 SR</p>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-g2"><i class="bi bi-cart whitey"></i></a>
                                            <a href="#" class="btn btn-g2"><i class="bi bi-star whitey"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row blacky my-2">
                            <div class="col">
                                <div class="card">
                                    <img src="../../../res/img/logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">اسم المنتج</h5>
                                        <p class="card-text">وصف المنتج</p>
                                        <p class="card-text">00.00 SR</p>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-g2"><i class="bi bi-cart whitey"></i></a>
                                            <a href="#" class="btn btn-g2"><i class="bi bi-star whitey"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="../../../res/img/logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">اسم المنتج</h5>
                                        <p class="card-text">وصف المنتج</p>
                                        <p class="card-text">00.00 SR</p>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-g2"><i class="bi bi-cart whitey"></i></a>
                                            <a href="#" class="btn btn-g2"><i class="bi bi-star whitey"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
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

    </div>

    <nav class="">
        <div class=" btm-nav d-flex justify-content-between px-4 py-1">
            <a class="" href="../profile.php"><i class="btn-nav-icon g2 bi bi-house"></i></a>
            <a class="" href="#"><i class="btn-nav-icon active-icon bi bi-shop"></i></a>
            <a class="" href="cart.php"><i class="btn-nav-icon g2 bi bi-cart"></i></a>
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