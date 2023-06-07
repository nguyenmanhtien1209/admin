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

                <!-- <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div> -->

                <div id="user">
                    <div class="user">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/OOjs_UI_icon_userAvatar-progressive.svg/1024px-OOjs_UI_icon_userAvatar-progressive.svg.png" alt="">
                    </div>
                    <span><?php echo $_SESSION['tk']; ?></span>
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <?php
                include('admin_connect.php');
                $sql = "select * from login";
                if ($result = mysqli_query($conn, $sql)) {
                    $rowcount = mysqli_num_rows($result);
                }
                ?>
                <?php
                include('admin_connect.php');
                $sql = "select * from ql_taixe";
                if ($result = mysqli_query($conn, $sql)) {
                    $count = mysqli_num_rows($result);
                }
                ?>
                <div class="card">
                    <a href="admin_user.php">
                        <div>
                            <div class="numbers"><?php echo $rowcount ?></div>
                            <div class="cardName">Tài Khoản</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </div>
                    </a>
                </div>

                <div class="card">

                    <a href="">
                        <div>
                            <div class="numbers"><?php echo $count ?></div>
                            <div class="cardName">Tài Xế</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </div>
                    </a>
                </div>

                <div class="card">
                    <a href="">
                        <div>
                            <div class="numbers">284</div>
                            <div class="cardName">Comments</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </div>
                    </a>
                </div>

                <div class="card">
                    <a href="">
                        <div>
                            <div class="numbers">$7,842</div>
                            <div class="cardName">Earning</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="cash-outline"></ion-icon>
                        </div>
                    </a>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Thông Tin Khách Hàng</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Họ và Tên</td>
                                <td>Ngày Sinh</td>
                                <td>Số Điện Thoại</td>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>12/09/2023</td>
                                <td>0123456789</td>

                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>12/08/2002</td>
                                <td>0987653572</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Thông Tin Tài Xế</h2>
                    </div>
                    <?php
                    include('admin_control.php');
                    $get_data = new data();
                    $select = $get_data->select_taixe();

                    ?>
                    <table>
                        <?php
                        foreach ($select as $se) {
                        ?>
                            <tr>

                                <td width="60px">
                                    <div class="imgBx"><img src="../images/<?php echo $se['anhtaixe'] ?>" alt=""></div>
                                </td>
                                <td>
                                    <h4><?php echo $se['hoten_taixe'] ?><br> <span><?php echo $se['diachi'] ?></span></h4>
                                </td>

                            </tr>

                        <?php } ?>

                    </table>
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