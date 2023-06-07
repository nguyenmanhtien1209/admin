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
                    <h1>Danh Sách Tài Xế</h1>
                </div>
                <div id="table">

                    <?php
                    include('admin_control.php');

                    $get_data = new data();
                    $select = $get_data->select_taixe();
                    ?>
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'danhsach')" id="defaultOpen">Danh Sách</button>
                        <button class="tablinks" onclick="openCity(event, 'themtaixe')">Thêm Tài Xế</button>
                    </div>
                    <div class="tab-content">
                        <div id="danhsach" class="city">
                            <table border="1">
                                <tr>
                                    
                                    <th>ẢNH</th>
                                    <th>HỌ VÀ TÊN</th>
                                    <th>NGÀY SINH</th>
                                    <th>GIỚI TÍNH</th>
                                    <th>ĐỊA CHỈ</th>
                                    <th>SỐ ĐIỆN THOẠI</th>
                                    <th>SỐ CCCD</th>
                                    <th>LOẠI BẰNG</th>
                                    <th>TUYẾN XE</th>
                                    <th>UPDATE</th>
                                    <th>DELETE</th>
                                </tr>
                                <?php
                                foreach ($select as $se) {
                                ?>
                                    <tr>
    
                                        <td><img style="width:50px; height: 50px; border-radius: 50%;" src="../images/<?php echo $se['anhtaixe']?>"></td>
                                        <td><?php echo $se['hoten_taixe'] ?></td>
                                        <td><?php echo $se['ngaysinh'] ?></td>
                                        <td><?php echo $se['gioitinh'] ?></td>
                                        <td><?php echo $se['diachi'] ?></td>
                                        <td><?php echo $se['sodienthoai'] ?></td>
                                        <td><?php echo $se['so_cccd'] ?></td>
                                        <td><?php echo $se['loaibang'] ?></td>
                                        <td><?php echo $se['tuyenxe'] ?></td>


                                        <td><a href="update_taixe.php?update=<?php echo $se['id'] ?>">Update</a></td>
                                        <td><a href="javascript:Delete('delete.php?del=<?php echo $se['id'] ?>')">Delete</a></td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                        <div id="themtaixe" class="city" style="display: none;">
                            <h2>Thêm Tài Xế</h2>
                            <form action="" method="POST" enctype="multipart/form-data">

                                <input type="text" name="hoten" id="" placeholder="Họ Và Tên">
                                <input type="date" name="ngaysinh" id="">
                                <input type="text" name="gioitinh" id="" placeholder="Giới Tính">
                                <input type="text" name="diachi" id="" placeholder="Địa Chỉ">
                                <input type="text" name="sodienthoai" id="" placeholder="Số Điện Thoại">
                                <input type="text" name="cccd" id="" placeholder="Số Căn Cước Công Dân">
                                <input type="text" name="loaibang" id="" placeholder="Loại Bằng">
                                <input type="text" name="tuyenxe" id="" placeholder="Tuyến Xe">
                                <input type="file" name="anh" id="">
                                <p><input type="submit" name="submit" id="" value="Thêm"></p>
                            </form>
                            <?php

                            if (isset($_POST["submit"])) {
                                move_uploaded_file($_FILES['anh']['tmp_name'], 'images/' . $_FILES['anh']['name']);
                                $insert = $get_data->insert_taixe(
                                    $_FILES['anh']['name'],
                                    $_POST['hoten'],
                                    $_POST['ngaysinh'],
                                    $_POST['gioitinh'],
                                    $_POST['diachi'],
                                    $_POST['sodienthoai'],
                                    $_POST['cccd'],
                                    $_POST['loaibang'],
                                    $_POST['tuyenxe'],
                                );
                                if ($insert)
                                header('location: admin_ql_taixe.php');
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
    <script>
		function Delete(del){
			if(confirm("Bạn có muốn xóa không?"))
			document.location = del;

		}
	</script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("city");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>