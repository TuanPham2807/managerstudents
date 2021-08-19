

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
                <a class="selected" href="#"><li><i class="fa fa-file-text-o" aria-hidden="true"></i>Quản lí đơn hàng</li></a>
            </ul>
        </div>
    </div>   

        <!-- MODULE RIGHT -->
        <div class="col-10 module__right">
            <!-- HEADER -->
            <div class="row right__header">
                <div class="col-3">
                    <h2>Quản lí đơn hàng</h2>
                </div>
                <div class="col-4"></div>
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
            <div class="container right__main">
                <!-- <div>
                    <button class="btn-primary add__button">Thêm sản phẩm</button>
                </div> -->
                <table>
                    <thead>
                        <tr>
                            <th class="layout__center border__right" style="padding: 5px 10px;">Mã đơn hàng</th>
                            <th class="layout__center border__right" style="padding: 5px 10px;">Mã khách hàng</th>
                            <th class="layout__center border__right" style="padding: 5px 10px;">Ngày đặt hàng</th>
                            <th class="layout__center border__right" style="padding: 5px 10px;">Mã hàng</th>
                            <th class="layout__center border__right" style="padding: 5px 10px;">Số lượng</th>
                            <th class="layout__center border__right" style="padding: 5px 10px;">Giá đơn hàng</th>
                            <th class="layout__center border__right" style="padding: 5px 10px;">Trạng thái</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
require_once  ("ConnectDB.php") ;

    $SoDonDH = $SoDH = $MSKH = $NgayDH = $MSHH = $SoLuong = $GiaDatHang = $TrangThai = "" ;

    // Lấy dữ liệu từ database
    $sql = "SELECT * FROM DatHang" ;
    $result = mysqli_query($connect, $sql) ;
    while($row = mysqli_fetch_array($result)) {
        $SoDonDH        = $row['SoDonDH'] ;
        $MSKH           = $row['MSKH'] ;
        $NgayDH         = $row['NgayDH'] ;
        $TrangThai      = $row['TrangThai'] ;
        
        $sqla = "SELECT * FROM ChiTietDatHang" ;
        $resulta = mysqli_query($connect, $sqla) ;
        while($row = mysqli_fetch_array($resulta)){
            $SoDH = $row['SoDonDH'] ;
            if($SoDonDH == $SoDH){
                $MSHH = $row['MSHH'] ;
                $SoLuong = $row['SoLuong'] ;
                $GiaDatHang = $row['GiaDatHang'] ;
            
                echo '
                    <tr>
                        <td class="layout__center" style="padding: 35px 10px;">'.$SoDonDH.'</td>
                        <td>'.$MSKH.'</td>
                        <td class="layout__center">'.$NgayDH.'</td>
                        <td class="layout__center">'.$MSHH.'</td>
                        <td class="layout__center">'.$SoLuong.'</td>
                        <td class="layout__center">'.$GiaDatHang.'</td>
                        <td class="layout__center">'.$TrangThai.'</td>
                        <td class="button__sp"><button class="btn btn-warning">Nhận</button></td>
                        <td class="button__sp"><button class="btn btn-danger">Hủy</button></td>
                    </tr>
                ' ;
            }else continue ;
        }
        
    }


?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>