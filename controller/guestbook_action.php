<?php
include_once '../includes/guestbook.php';
session_start();
if ($_POST['action'] == "publish") {

    $user_id = $_SESSION['id'];
    $content = $_POST['content'];
    date_default_timezone_set("Asia/Shanghai");
    $createtime = date("Y-m-d h:i:s A l");
    $guestbook = new Guestbook();
    $array = $guestbook->insert($user_id, $content, $createtime);
    if ($array != null) {
        header("Location:../view/look.php ");
    } else {

        header("Location:.. /view/publish.php?error=1 ");
    }
} elseif ($_POST['action'] == "reply") {

    $reply_id = $_SESSION['no'];
    $recontent = $_POST['recontent'];

    date_default_timezone_set("Asia/Shanghai");
    $retime = date("Y-m-d h:i:s A l");
    $guestbook = new Guestbook();
    $array = $guestbook->re_insert($reply_id, $recontent, $retime);
    if ($array != null) {
        header("Location:../view/allreply.php ");
    } else {
        header("Location:.. /view/reply.php?error=1 ");
    }
} else {

    $id = $_GET['id'];

    $guestbook = new Guestbook();
    $delete = $guestbook->delete($id);

    if ($delete === FALSE) {
        return "删除失败";
    } else {
        header("Location:../view/look.php ");
    }
}