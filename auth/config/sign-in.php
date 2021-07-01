<?php

require '../../database/connect.php';

session_start();
$message = "";
if (count($_POST) > 0) {
    $con = mysqli_connect('localhost', 'root', '', 'Precious') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT * FROM 'user' WHERE email='" . $_POST["email"] . "' and pass = '" . $_POST["pass"] . "'");
    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"] = $row['eamil'];
        if ($row['role'] == '1') {
            header("Location:../../screen/U1/profile.php");
        } else if ($row['role'] == '2') {
            header("Location:../../screen/U2/profile.php");
        } else if ($row['role'] == '3') {
            header("Location:../../screen/U3/profile.php");
        } else {
            echo 'no user type fit';
        }
    } else {
        $message = "البريد الالكتروني او كلمة المرور غير صحيحة";
    }
}
