<?php

// Khai báo sử dụng session
    session_start() ;
//Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

// Xử lí đăng nhập
    if(isset($_POST['dangnhap'])) {
        include('ConnectDB.php') ;
        $numberphone = $password = "" ;
        $temp = 0 ;

        // Lấy dữ liệu từ form
        if(isset($_POST['numberphone']))    $numberphone = $_POST['numberphone'] ;
        if(isset($_POST['password']))       $password    = $_POST['password'] ;

        // Lấy dữ liệu từ database
        $sql = "SELECT * FROM TaiKhoan" ;
        $result = mysqli_query($connect, $sql) ;

        while($row = mysqli_fetch_array($result)){
            if($row['SDT'] == $numberphone){
                $temp = 1 ;
                if($row['PassWord'] == $password) {
                    echo  "Đăng nhập thành công" ;
                } else
                    echo "Sai mật khẩu" ;
            }
        }
        if($temp == 0)      echo "Số điện thoại này chưa đăng kí" ;
    }
?>
