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

        <div class="bg-g1 w-100 my-2 py-3 text-center">
            <h3 class="whitey">الدورات التدريبية</h3>
        </div>

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
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true">
                                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                        <polyline points="13 2 13 9 20 9"></polyline>
                                    </svg>
                                    الدورات التدريبية
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube">
                                        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                                        <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                                    </svg>
                                    المحتوى النشط
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" aria-hidden="true">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    التفاعل والمشاركات
                                </a>
                            </li>
                            
                        </ul>

                        
                        
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-3 pb-3 whitey">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <!-- <h1 class="h2">لوحة التحكم</h1> -->
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">فلتر</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                ترتيب بحسب
                            </button>
                        </div>
                    </div>


                    <h5>المواضيع الرائجة</h5>
                    <div class="table-responsive text-center">
                        <iframe src="https://www.youtube.com/embed/8RM_P9YYctQ" frameborder="0"></iframe>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h5>الدورات</h5>
                        </div>
                        <div class="col">
                            <a href="#" title="اضافة منتج">
                                <i class="bi bi-plus-circle g3" style="font-size: 25px;float: left;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">

                    </div>

                    <div class="row">
                        <div class="col w60">
                            <h5>قوائم التشغيل</h5>
                        </div>
                        <div class="col w40">
                            <a href="#" title="اضافة منتج">
                                <i class="bi bi-plus-circle g3" style="font-size: 25px;float: left;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">

                    </div>
                </main>
            </div>
        </div>

    </div>

    <nav class="">
        <div class=" btm-nav d-flex justify-content-between px-4 py-1">
            <a class="" href="../profile.php"><i class="btn-nav-icon g2 bi bi-house"></i></a>
            <!-- <a class="" href="store.php"><i class="btn-nav-icon g2 bi bi-shop"></i></a> -->
            <a class="" href="#"><i class="btn-nav-icon active-icon bi bi-book"></i></a>
            <a class="" href="../setting.php"><i class="btn-nav-icon g2 bi bi-gear"></i></a>
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