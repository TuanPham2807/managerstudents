<?php
    // ket noi voi database
    include('ConnectDB.php') ;

    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    // Nut SUA
    $id = $name = '' ;
    if(isset($_GET['id'])){
        $id = $_GET['id'] ;
        $sql = "SELECT * FROM NhomHangHoa" ;
        $result = mysqli_query($connect, $sql) ;
        while($row = mysqli_fetch_array($result)) {
            if($row['MaNhom'] == $id)
                $name = $row['TenNhom'] ;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Management</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body >
    <div class="row container-fluid admin">
    <!-- MODULE LEFT -->
    <div class="col-2 module__left" style="padding: 0px;">
        <!-- User -->
        <div class="module__left__top user__account">
            <img src="image/logo_G.jpg" alt="">
            <div class="user__name">PHAM HOANG TUAN</div>
        </div>

        <!-- Management -->
        <div class="module__left__bottom">
            <ul>
                <a href="index.php"><li><i class="fa fa-leaf" aria-hidden="true"></i>Quản lí sản phẩm</li></a>
                <a href="quan-li-danh-muc.php"><li><i class="fa fa-bars" aria-hidden="true"></i>Quản lí danh mục</li> </a>  
                <a href="quan-li-don-hang.php"><li><i class="fa fa-file-text-o" aria-hidden="true"></i>Quản lí đơn hàng</li></a>
            </ul>
        </div>
    </div>

        <!-- MODULE RIGHT -->
        <div class="col-10 module__right">
            <!-- HEADER -->
            <div class="row right__header">
                <div class="col-4">
                    <!-- <h2> Thêm loại hàng hóa</h2> -->
                </div>
                <div class="col-3"></div>
                <div class="col-2">
                    <form action="">
                        <input type="text" placeholder="Search...">
                        <span><i class="fa fa-search" aria-hidden="true"></i></span>
                    </form>
                </div>  
                <div class="col-3 header__icon">
                    <ul>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- MAIN -->
            <div class="container right__main"> <br>
                <h2 style="text-align:center;">Thêm/Sửa nhóm hàng hóa</h2>
                <div class="add__catelogy"> <br>
                    <form action="xu-li-them-nhom-hh.php" name="Them_LoaiHH" method="POST">
                        <input name="Them_MaNhom" type="text" value="<?=$id?>" placeholder=" ---   Mã nhóm hàng hóa   ---">
                        <input name="Them_TenNhom" type="text" value="<?=$name?>" placeholder=" ---   Tên nhóm hàng hóa   ---"><br>
                        <input  type="submit" class="btn-success save" value="Lưu lại">
                    </form>
                </div> <br>
                
            </div>
        </div>
    </div>
</body>
</html>