<?php
session_start();
$message = "";
if (count($_POST) > 0) {
    $con = mysqli_connect('localhost', 'root', '', 'Precious') or die('Unable To connect');
    $query = mysqli_query($con, "SELECT * FROM user WHERE email='" . $_POST["email"] . "' and pass = '" . $_POST["pass"] . "'");
    $row  = mysqli_fetch_array($query);
    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["fname"] = $row['fname'];
        $_SESSION["email"] = $row['eamil'];
        $_SESSION["usertype"] = $row['usertype'];
    } else {
        $message = "البريد الالكتروني او كلمة المرور غير صحيحة";
    }
    if (isset($_SESSION["id"]) && $_SESSION["usertype"] == '1') {
        header("Location:../../screen/U1/profile.php");
    } else if (isset($_SESSION["id"]) && $_SESSION["usertype"] == '2') {
        header("Location:../../screen/U2/profile.php");
    } else if (isset($_SESSION["id"]) && $_SESSION["usertype"] == '3') {
        header("Location:../../screen/U3/profile.php");
    } else {
        // header("Location:../../temp.html");
        echo 'no user type fit';
    }
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

    <div class="container">
        <a href="../../index.html"><i class="social-icon bi bi-x"></i></a>
        <div class="mt-3">
            <div class="text-center">
                <h1 class="g2 f-din bold mb-4">تسجيل الدخول</h1>
            </div>
            <form action="sign-in.php" method="POST" class="mb-2">
                <input type="email" name="email" id="" class="form-control my-3" placeholder="البريد الإلكتروني" required>
                <input type="password" name="pass" id="" class="form-control" placeholder="كلمة المرور" required>
                <a href="forget-pass.html" class="o mb-3">نسيت كلمة المرور؟</a>
                <div class="text-center mt-3">
                    <input type="submit" value="تسجيل" class="btn btn-g w50 py-2">
                </div>
            </form>
            <div class="text-center o bold" id="er-msg"><?php if ($message != "") {
                                                            echo $message;
                                                        } ?></div>
            <div class="text-center">
                <p class="mt-4 whitey" id="txt-optionOR">أو سجل باستخدام</p>
                <a><i class="social-icon px-2 bi bi-google"></i></a>
                <a><i class="social-icon px-2 bi bi-facebook"></i></a>
                <a><i class="social-icon px-2 bi bi-github"></i></a>
            </div>
            <div class="text-center my-2">
                <p class="whitey">ليس لديك حساب ؟ <a href="sign-up.html" class="o">سجل الآن</a></p>
            </div>
        </div>
    </div>

    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('../../sw.js')
                .then(function(reg) {
                    console.log('SW Registered', reg);
                })
                .catch(function(err) {
                    console.log('SW Not Registered', err);
                });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>