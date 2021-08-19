<?php
// ket noi voi database
include('ConnectDB.php') ;

//Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
require_once ('ConnectDB.php') ;

    $fullname = $numberphone = $password = $id = $LoaiTK = "" ;

// Neu khong nhap xe khong xu li
    if(empty($_POST['fullname']) && empty($_POST['numberphone']) && empty($_POST['password'])) {
        echo "Vui lòng điền đủ thông tin" ;
        exit() ;
    }

//  Nhan du lieu tu form 
    if(isset($_POST["fullname"])) { $fullname = $_POST['fullname']; }
    if(isset($_POST["numberphone"])) { $numberphone = $_POST['numberphone']; }
    if(isset($_POST["password"])) { $password = $_POST['password']; }
    $LoaiTK = 0 ; // 0 mac dinh cho tai khoan khach hang

// Xu li truong hop so dien thoai da ton tai
    $sql = "SELECT SDT FROM TaiKhoan" ;
    $result = mysqli_query($connect, $sql) ;
    while($row = mysqli_fetch_array($result)){
        if($row['SDT'] == $numberphone){
            echo "Số điện thoại đã được sử dụng !" ;
            exit() ;
        }
    }

//  Them du lieu vao database
    $sql = "INSERT INTO taikhoan(id, fullname, sdt, password)
            values ('$id', '.$fullname.', '$numberphone', '$password')" ;
    if(mysqli_query($connect, $sql)){
        echo "--- Successful ---" ;
        
        
    }
    else echo "Fail" ;
    
?>