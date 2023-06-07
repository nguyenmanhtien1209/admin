<?php
session_start();
if (!isset($_SESSION['tk'])) {
    header('Location: login.php');
};

include('admin_control.php');
$get_data=new data();
$select = $get_data->select_taixe_id($_GET['update']);
foreach($select as $se)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/user.css">
    <title>Quản Lý</title>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
            <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">ADMIN</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Trang Chủ</span>
                    </a>
                </li>

                <li>
                    <a href="admin_user.php">
                        <span class="icon">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Tài Khoản</span>
                    </a>
                </li>
                <li>
                    <a href="admin_ql_taixe.php">
                        <span class="icon">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Tài Xế</span>
                    </a>
                </li>
                <li>
                    <a href="admin_ql_phuxe.php">
                        <span class="icon">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Phụ Xe</span>
                    </a>
                </li>

                <li>
                    <a href="admin_ql_tuyenxe.php">
                        <span class="icon">
                            <ion-icon name="navigate-outline"></ion-icon>
                        </span>
                        <span class="title">Tuyến Xe</span>
                    </a>
                </li>

                <li>
                    <a href="admin_ql_ve.php">
                        <span class="icon">
                            <ion-icon name="ticket-outline"></ion-icon>
                        </span>
                        <span class="title">Vé Xe</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Đổi Mật Khẩu</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Đăng Xuất</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div id="user">
                    <div class="user">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/OOjs_UI_icon_userAvatar-progressive.svg/1024px-OOjs_UI_icon_userAvatar-progressive.svg.png" alt="">
                    </div>
                    <span><?php echo $_SESSION['tk']; ?></span>
                </div>
            </div>



            <!-- ================ Order Details List ================= -->
            <div id="content">
                <div id="title">
                    <h1>Update Tài Xế</h1>
                </div>
                <div id="table">
                        <div id="themtaixe" class="city">
                            <form action="" method="POST" enctype="multipart/form-data">

                                <input type="text" name="hoten" id="" placeholder="Họ Và Tên" value="<?php echo $se['hoten_taixe']?>">
                                <input type="date" name="ngaysinh" id="" value="<?php echo $se['ngaysinh']?>">
                                <input type="text" name="gioitinh" id="" placeholder="Giới Tính" value="<?php echo $se['gioitinh']?>">
                                <input type="text" name="diachi" id="" placeholder="Địa Chỉ" value="<?php echo $se['diachi']?>">
                                <input type="text" name="sodienthoai" id="" placeholder="Số Điện Thoại" value="<?php echo $se['sodienthoai']?>">
                                <input type="text" name="cccd" id="" placeholder="Số Căn Cước Công Dân" value="<?php echo $se['so_cccd']?>">
                                <input type="text" name="loaibang" id="" placeholder="Loại Bằng" value="<?php echo $se['loaibang']?>">
                                <input type="text" name="tuyenxe" id="" placeholder="Tuyến Xe" value="<?php echo $se['tuyenxe']?>">
                                <input type="file" name="images" id="">
                                <img src="../images/<?php echo $se['anhtaixe']?>" width="30%" alt="">
                                <p><input type="submit" name="submit" id="" value="Thêm"></p>
                            </form>
                            <?php

                            if (isset($_POST["submit"])) {
                                move_uploaded_file($_FILES['images']['tmp_name'], '../images/' . $_FILES['images']['name']);
                                $insert = $get_data->update_taixe(
                                    $_FILES['images']['name'],
                                    $_POST['hoten'],
                                    $_POST['ngaysinh'],
                                    $_POST['gioitinh'],
                                    $_POST['diachi'],
                                    $_POST['sodienthoai'],
                                    $_POST['cccd'],
                                    $_POST['loaibang'],
                                    $_POST['tuyenxe'],
                                    
                                    $_GET['update']
                                );
                                if ($insert)
                                    echo "<script>
                                    location.href = 'admin_ql_taixe.php';
                                </script>";
                                else
                                    echo "sai";
                            }
                            ?>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../js/main.js"></script>
    
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>