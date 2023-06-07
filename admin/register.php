<?php session_start(); ?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Login</title>
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="../css/login.css" rel="stylesheet" type="text/css" media="all" />
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <!--header start here-->
    <div class="header">
        <div class="header-main">
            <h1>Đăng Kí</h1>
            <div class="header-bottom">
                <div class="header-right w3agile">

                    <div class="header-left-bottom agileinfo">

                        <form action="#" method="post">
                            <input type="text" value="" name="name" />
                            <input type="text" value="" name="fullname"/>
                            <input type="date" value="" name="birthday" placeholder="" />
                            <input type="email" value="" name="email" placeholder="Nhập Email" />
                            <input type="number" value="" name="phone" placeholder="Nhập Số Điện Thoại"/>
                            <input type="password" value="" placeholder="Nhập Mật Khẩu" name="pass" />
                            <input type="password" value="" placeholder="Nhập Lại Mật Khẩu" name="repass"/>
                            
                           
                            <div class="remember">
                                <!-- <span class="checkbox1">
                                    <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
                                </span> -->
                                <div class="forgot">
                                    <h6><a href="#">Forgot Password?</a></h6>
                                </div>
                                <div class="clear"> </div>
                            </div>
                            <input type="submit" name="submit" value="Đăng Kí">
                        </form>
                        <div class="header-left-top">
                            <div class="sign-up">
                                <h2>or</h2>
                            </div>

                        </div>
                        <div class="header-social wthree">
                            <a href="#" class="face">
                                <h5>Facebook</h5>
                            </a>
                            <a href="#" class="twitt">
                                <h5>Twitter</h5>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>