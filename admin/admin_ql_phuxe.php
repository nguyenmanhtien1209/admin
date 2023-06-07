<?php
session_start();
if (!isset($_SESSION['tk'])) {
    header('Location: login.php');
}
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
                        <span class="title">Quản Lý Tài Khoản</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
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
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
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
                    <h1>Danh Sách Phụ Xe</h1>
                </div>
                <div id="table">
                    <?php
                    include('admin_control.php');

                    $get_data = new data();
                    $select = $get_data->select_taixe();
                    ?>
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th >ẢNH</th>
                            <th >HỌ VÀ TÊN</th>
                            <th >NGÀY SINH</th>
                            <th >GIỚI TÍNH</th>
                            <th >ĐỊA CHỈ</th>
                            <th >SỐ ĐIỆN THOẠI</th>
                            <th >SỐ CCCD</th>
                            <th >LOẠI BẰNG</th>
                            <th >TUYẾN XE</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                        </tr>
                        <?php
                        foreach ($select as $se) {
                        ?>
                            <tr>
                                <td><?php echo $se['id'] ?></td>
                                <td><?php echo $se['anhtaixe'] ?></td>
                                <td><?php echo $se['hoten_taixe'] ?></td>
                                <td><?php echo $se['ngaysinh'] ?></td>
                                <td><?php echo $se['gioitinh'] ?></td>
                                <td><?php echo $se['diachi'] ?></td>
                                <td><?php echo $se['sodienthoai'] ?></td>
                                <td><?php echo $se['so_cccd'] ?></td>
                                <td><?php echo $se['loaibang'] ?></td>
                                <td><?php echo $se['tuyenxe'] ?></td>


                                <td><a href="update_food.php?update=<?php echo $se['id'] ?>">Update</a></td>
                                <td><a href="javascript:Delete('delete.php?deletee=<?php echo $se['id'] ?>')">Delete</a></td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>
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