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
<body>
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
                <a class="selected" href="#"><li><i class="fa fa-leaf" aria-hidden="true"></i>Quản lí sản phẩm</li></a>
                <a href="quan-li-danh-muc.php"><li><i class="fa fa-bars" aria-hidden="true"></i>Quản lí danh mục</li> </a>  
                <a href="quan-li-don-hang.php"><li><i class="fa fa-file-text-o" aria-hidden="true"></i>Quản lí đơn hàng</li></a>
            </ul>
        </div>
    </div>   

        <!-- MODULE RIGHT -->
        <div class="col-10 module__right">
            <!-- HEADER -->
            <div class="row right__header">
                <div class="col-3">
                    <h2>Quản lí sản phẩm</h2>
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
                <div>
                    <a href="them-san-pham.php">
                    <button class="btn-primary add__button">Thêm sản phẩm</button>
                    </a>
                </div>
                <table>
                    <thead>
                        <tr class="tr__haed">
                            <th class="layout__center border__right">Mã số</th>
                            <th class="border__right">Tên</th>
                            <th class="layout__center border__right">Giá</th>
                            <th class="layout__center border__right">Số Lượng</th>
                            <th class="layout__center border__right">Mã nhóm</th>
                            <th class="layout__center border__right">Hình ảnh</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
require_once  ("ConnectDB.php") ;

    $MSHH = $TenHH = $Gia = $SoLuongHang = $MaNhom = $Hinh = "" ;

    // Lấy dữ liệu từ database
    $sql = "SELECT * FROM HangHoa" ;
    $result = mysqli_query($connect, $sql) ;
    while($row = mysqli_fetch_array($result)) {
        $MSHH        = $row['MSHH'] ;
        $TenHH       = $row['TenHH'] ;
        $Gia         = $row['Gia'] ;
        $SoLuongHang = $row['SoLuongHang'] ;
        $MaNhom      = $row['MaNhom'] ;
        $Hinh        = $row['Hinh'] ;
        echo '
            <tr>
                <td class="layout__center">'.$MSHH.'</td>
                <td>'.$TenHH.'</td>
                <td class="layout__center">'.$Gia.'</td>
                <td class="layout__center">'.$SoLuongHang.'</td>
                <td class="layout__center">'.$MaNhom.'</td>
                <td class="layout__center"><img src="'.$Hinh.'" style="width: 110px; height: 100px;"></td>
                <td class="button__sp">
                    <a href="them-san-pham.php?MSHH='.$MSHH.'"><button class="btn btn-warning" id="update">Sửa</button></a>
                </td>
                <td class="button__sp">
                    <a  href="xoa-item.php?MSHH='.$MSHH.'"><button onclick="deleteItem()" class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>
        ' ;
    }

?>
                </table>
            </div>
        </div>
    </div>
    <script>
        function deleteItem(){
            confirm("Bạn có chắc muốn xóa không ?");
        }
    </script>
</body>
</html>