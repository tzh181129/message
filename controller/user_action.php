<?php

include_once '../includes/user.php';

if ($_POST['action'] == "login") {

    $dname = $_POST['dname'];
    $login = new User();
    $array = $login->getUserByName($dname);
    if ($array != null) {
        echo "<script>alert('登录成功');window.location.href='../view/publish.php';</script>";
    } else {
        header("Location:../view/login.php?error=1 ");
    }


} elseif ($_POST['action'] == "register") {

    $username = $_POST['username'];
    $userpwd = $_POST['userpwd'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    date_default_timezone_set("Asia/Shanghai");
    $regtime = date("Y-m-d h:i:s A l");
    $login = new User();
    $array = $login->insert($username, $userpwd, $email, $phone,  $regtime);
    if ($array != null) {
        echo "<script>alert('注册成功');window.location.href='../view/login.php';</script>";
    } else {
        header("Location:../view/register.php?error=1 ");
    }
}
