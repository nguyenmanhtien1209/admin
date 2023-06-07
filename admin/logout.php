<?php
session_start();
if(isset($_SESSION['tk']) && $_SESSION['tk'] != NULL) {
    unset($_SESSION['tk']);
    header('location: login.php');
}
else {
    echo 'Người dùng chưa đăng nhập. Không thể đăng xuất dược!'; die;
}
?>