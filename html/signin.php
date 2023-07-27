<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/all.css">
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="icon" href="../img/icon-logo.png">
    <title> Sign In </title>
</head>

<body>
    <form action="signin.php" method="post" name="signin">
    <div id="plan" class="text-left">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-background">
                    <h2 class="text-center">Sign In
                    </h2>
                    <div class="row">
                        <form action="" class="signinform">
                            <div class="form-group">
                                <div class="col-xs-12-col-sm-12 col-md-12 col-lg-12 input-text">
                                    <h4> Mã Khách Hàng:</h4>
                                    <input type="text" name="Ma_Kh" class="form-control" placeholder="Tên Khách Hàng">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12-col-sm-12 col-md-12 col-lg-12  input-text_two">
                                    <h4> Tên Khách Hàng :</h4>
                                    <input type="text" name="So_Dt" class="form-control" placeholder="PassWord">
                                </div>
                            </div>
                            <div class="formg-group">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center text-service">
                                    <input type="checkbox" name="remember-me" size="50"> Remember Me !
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center text-service">
                                    <a href="#"> Forgot Password ?</a>
                                </div>
                            </div>
                            <div class="formg-group">
                                <div class="col-xs-12-col-sm-12 col-md-12 col-lg-12 text-center">
                                    <button class="btn btn-lg btn-danger btn-login " name="signin">
                                        Sign In 
                                    </button>
                                </div>

                            </div>
                            <div class="formg-group text-service">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-12 text-center">
                                    <br> Bạn Chưa Có Tài Khoản ?
                                    <a href="register.php"> Đăng Ký Ngay </a><br>
                                    <!-- <a href="mywebsite.html" class="text-left"><i class="fa-solid fa-house"></i> Quay Lại Trang Chủ </a> -->
                                    <a href="mywebsite.html" class="text-left"><i class="fa-solid fa-right-from-bracket"></i></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            </div>
        </div>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- php -->
    <?php
    if (isset($_POST['signin']))
    {
        require 'mydb.php';

        $Ma_Kh = $_POST['Ma_Kh'];
        $So_Dt = $_POST['So_Dt'];

        $sql = "SELECT Ma_Kh,So_Dt FROM khachhang WHERE Ma_Kh ='$Ma_Kh' AND So_Dt ='$So_Dt'";
        $result = $conn->query($sql);
            //  sử dụng phương thức query để kết nối sql

        if ($result->num_rows == 0){
            echo "Tên đăng nhập này không tồn tại hoặc sai mật khẩu, bro vui lòng kiểm tra lại.
                <a href = 'signin.php'>Trở lại</a>";
            exit;
        }
        $_SESSION['Ma_Kh'] = $Ma_Kh;
        echo "Xin chào " , $Ma_Kh , ". Chúc mừng bạn đã đăng nhập thành công.
            <a href = 'mywebsite.html'>Quay lại trang chủ</a>";
        die();
    }
    ?>
</body>

</html>