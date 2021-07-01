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
            <i class="prof-img bi bi-person-circle"> <?php echo $_SESSION['fname'] ?></i>
        </div>

        <div class="bg-blacky w-100 my-2 py-3 text-center">
            <h3 class="g4">متجر مواهب</h3>
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
                                            لوحة التحكم
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
                                            المنتجات
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
                                            الزبائن
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2" aria-hidden="true">
                                                <line x1="18" y1="20" x2="18" y2="10"></line>
                                                <line x1="12" y1="20" x2="12" y2="4"></line>
                                                <line x1="6" y1="20" x2="6" y2="14"></line>
                                            </svg>
                                            التقارير
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers" aria-hidden="true">
                                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                <polyline points="2 17 12 22 22 17"></polyline>
                                                <polyline points="2 12 12 17 22 12"></polyline>
                                            </svg>
                                            التكاملات
                                        </a>
                                    </li>
                                </ul>

                                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                    <span>التقارير المحفوظة</span>
                                    <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                    </a>
                                </h6>
                                <ul class="nav flex-column mb-2">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text" aria-hidden="true">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10 9 9 9 8 9"></polyline>
                                            </svg>
                                            الشهر الحالي
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text" aria-hidden="true">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10 9 9 9 8 9"></polyline>
                                            </svg>
                                            الربع الأخير
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text" aria-hidden="true">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10 9 9 9 8 9"></polyline>
                                            </svg>
                                            التفاعل الإجتماعي
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text" aria-hidden="true">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10 9 9 9 8 9"></polyline>
                                            </svg>
                                            مبيعات نهاية العام
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-3 pb-3">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <h1 class="h2">لوحة التحكم</h1>
                                <div class="btn-toolbar mb-2 mb-md-0">
                                    <div class="btn-group me-2">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">تصدير</button>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        هذا الأسبوع
                                    </button>
                                </div>
                            </div>


                            <h2>الطلبات</h2>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">رمز</th>
                                            <th scope="col">المنتج</th>
                                            <th scope="col">رقم التسلسل</th>
                                            <th scope="col">المشتري</th>
                                            <th scope="col">التكلفة</th>
                                            <th scope="col">الكمية</th>
                                            <th scope="col">عملية</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>6842</td>
                                            <td>رسم ثلاثي الابعاد</td>
                                            <td>465-864-478</td>
                                            <td>محمود عبدالله</td>
                                            <td>157.68 ريال</td>
                                            <td>3</td>
                                            <td><button class="btn btn-g3">تنفيذ</button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <h2>المنتجات</h2>
                                </div>
                                <div class="col">
                                    <a href="#" title="اضافة منتج">
                                        <i class="bi bi-plus-circle g3" style="font-size: 25px;float: left;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">رمز</th>
                                            <th scope="col">اسم المنتج</th>
                                            <th scope="col">رقم التسلسل</th>
                                            <th scope="col">الوصف</th>
                                            <th scope="col">السعر التقديري</th>
                                            <th scope="col">الكمية</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>4829</td>
                                            <td>مجسم سيارة</td>
                                            <td>639-298-369</td>
                                            <td>مجسم نحت فخار سيارة</td>
                                            <td>246.86 ريال</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>6842</td>
                                            <td>رسم ثلاثي الابعاد</td>
                                            <td>465-864-478</td>
                                            <td>رسم ثلاثي الابعاد منظر طبيعي</td>
                                            <td>52.33 ريال</td>
                                            <td>19</td>
                                        </tr>
                                    </tbody>
                                </table>
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
            <a class="" href="profile.php"><i class="btn-nav-icon g2 bi bi-house"></i></a>
            <a class="" href="#"><i class="btn-nav-icon active-icon bi bi-shop"></i></a>
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