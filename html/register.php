<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/all.css">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="icon" href="../img/icon-logo.png">
    <title> Register </title>
</head>

<body>
    <!-- <form action="register.php" method="post" name="Đăng Kí" target="_blank"> -->
    <div id="register">
    <form action="register.php" method="post" name="Đăng Kí" target="_blank">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 register-top"></div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 register-center ">
                    <h2 class="text-center">
                        Register

                    </h2>

                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4> Mã Khách Hàng: </h4>
                            <input type="text" class="form-control" name="Ma_Kh" placeholder="Mã Khách Hàng">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4> Tên Khách Hàng: </h4>
                            <input type="text" class="form-control" name="Ten_Kh" placeholder="Mã Khách Hàng">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4> Số Điện Thoại: </h4>
                            <input type="number" class="form-control" name="So_Dt" placeholder="Mã Khách Hàng">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4> Địa Chỉ: </h4>
                            <input type="text" class="form-control" name="Dia_chi" placeholder="Mã Khách Hàng">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4>Ngày Sinh: </h4>
                            <input type="Date" class="form-control" name="Ngay_Sinh" placeholder="Mã Khách Hàng">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4>Giới Tính: </h4>
                            <input type="text" class="form-control" name="Gioi_Tinh" placeholder="Giới Tính">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <button class="btn btn-lg btn-default btn-login">
                                Register
                            </button>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center register-center_login">
                            <br> Bạn Đã Tài Khoản ?
                            <a href="signin.php"> Đăng Nhập Ngay</a><br>
                            <!-- <a href="mywebsite.html" class="text-left"><i class="fa-solid fa-house"></i> Quay Lại Trang Chủ </a> -->
                            <a href="mywebsite.html" class="text-left"><i class="fa-solid fa-right-from-bracket"></i></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 register-bottom"></div>
            </div>
        </div>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<?php
if ($_POST){ //đẻ đọc dữ liệu 
    $Ma_Kh = $_POST['Ma_Kh'];
    $Ten_Kh =$_POST['Ten_Kh'];
    $So_Dt = $_POST['So_Dt'];
    $Dia_Chi = $_POST['Dia_chi'];
    $Ngay_Sinh = $_POST['Ngay_Sinh'];
    $Gioi_Tinh = $_POST['Gioi_Tinh'];
   
    require 'mydb.php';// để kết nối đến dâtbase nếu không có dòng này thì không thực thi được nội dung của dòng code này

    $sql = "INSERT INTO khachhang (Ma_Kh, Ten_Kh, So_Dt, Dia_chi , Ngay_Sinh, Gioi_Tinh) VALUES ('$Ma_Kh', '$Ten_Kh ','$So_Dt', '$Dia_Chi', '$Ngay_Sinh', '$Gioi_Tinh')";//thêm dữ liệu vào csdl
    $conn->query($sql);//thực hiện dòng code
    // 
    if ($result->num_rows == 0){
        echo "Bạn Chưa Nhập Thông Tin Vui Lòng Điền Đầy Đủ Thông Tin Để Đăng Kí.
            <a href = 'signin.php'>Trở lại</a>";
        exit;
    }
    $_SESSION['Ten_Kh'] = $Ten_Kh;
        echo "Xin chào " , $Ten_Kh , ". Bạn đã Đăng Kí Thành Công Tài Khoản
            <a href = 'mywebsite.html'>Quay lại trang chủ để đăng nhập </a>"
;
            
        die();
   $conn->close();

  
    
}
?>
<!-- <br>
     <span> Quay lại trang chủ hãy ấn vào đây  </span>
     <a href = 'mywebsite.html'> <i class="fa-solid fa-house"></i>Trở lại</a>
     <br>
     <br><br> -->

</body>

</html>