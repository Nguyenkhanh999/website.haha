<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "mydbìhairhgpioaqe";
$conn = new mysqli($servername, $username, $password, $db);
if($conn-> connect_error){
    //  sử dụng phương thức query để kết nối sql
    die("Kết Nối Thất Bại , Vui Lòng Thử Lại: " . $conn->connect_error);
}
echo " Kết Nối Với DataBase Thành Công  <br>";
?>