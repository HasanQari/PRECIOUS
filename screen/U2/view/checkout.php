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

        <div class=" w-100 my-2 pt-3 ">
            <h3 class="g4">الدفع والشراء</h3>
        </div>
        <!-- <hr> -->

        <div class="container-fluid mb-5 pb-4 whitey">

            <div class="row g-3">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">عربة التسوق</span>
                        <span class="badge bg-secondary rounded-pill">3</span>
                    </h4>
                    <ul class="px-0 mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">اسم المنتج</h6>
                                <small class="text-muted">وصف مختصر</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">المنتج الثاني</h6>
                                <small class="text-muted">وصف مختصر</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">البند الثالث</h6>
                                <small class="text-muted">وصف مختصر</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">رمز ترويجي</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">-$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>مجموع (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="رمز ترويجي">
                            <button type="submit" class="btn btn-secondary">تحقق</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">عنوان الفوترة</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">الاسم الأول</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    يرجى إدخال اسم أول صحيح.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">اسم العائلة</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    يرجى إدخال اسم عائلة صحيح.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">اسم المستخدم</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="اسم المستخدم" required="">
                                    <div class="invalid-feedback">
                                        اسم المستخدم الخاص بك مطلوب.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">البريد الإلكتروني <span class="text-muted">(اختياري)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    يرجى إدخال عنوان بريد إلكتروني صحيح لتصلكم تحديثات الشحن.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">العنوان</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 الشارع الأول" required="">
                                <div class="invalid-feedback">
                                    يرجى إدخال عنوان الشحن الخاص بك.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address2" class="form-label">عنوان 2 <span class="text-muted">(اختياري)</span></label>
                                <input type="text" class="form-control" id="address2" placeholder="شقة 24">
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">البلد</label>
                                <select class="form-select" id="country" required="">
                                    <option value="">اختر...</option>
                                    <option>الولايات المتحدة الأمريكية</option>
                                </select>
                                <div class="invalid-feedback">
                                    يرجى اختيار بلد صحيح.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">المنطقة</label>
                                <select class="form-select" id="state" required="">
                                    <option value="">اختر...</option>
                                    <option>كاليفورنيا</option>
                                </select>
                                <div class="invalid-feedback">
                                    يرجى اختيار اسم منطقة صحيح.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">الرمز البريدي</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required="">
                                <div class="invalid-feedback">
                                    الرمز البريدي مطلوب.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">عنوان الشحن هو نفس عنوان الفوترة الخاص بي</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">احفظ هذه المعلومات في المرة القادمة</label>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">طريقة الدفع</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                                <label class="form-check-label" for="credit">بطاقة ائتمان</label>
                            </div>
                            <div class="form-check">
                                <input id="cash" name="paymentMethod" type="radio" class="form-check-input" required="">
                                <label class="form-check-label" for="cash">نقد</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">الاسم على البطاقة</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                <small class="text-muted">الاسم الكامل كما هو معروض على البطاقة</small>
                                <div class="invalid-feedback">
                                    الاسم على البطاقة مطلوب
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">رقم البطاقة</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                <div class="invalid-feedback">
                                    رقم بطاقة الائتمان مطلوب
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">تاريخ انتهاء الصلاحية</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                <div class="invalid-feedback">
                                    تاريخ انتهاء الصلاحية مطلوب
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">الرمز الثلاثي (CVV)</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                <div class="invalid-feedback">
                                    رمز الحماية مطلوب
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <a class="w-100 btn btn-g3 btn-lg" href="paying.php">الاستمرار بالدفع</a>
                    </form>
                </div>
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