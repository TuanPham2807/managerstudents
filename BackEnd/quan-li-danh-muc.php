<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Management</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <a href="index.php">
                        <li><i class="fa fa-leaf" aria-hidden="true"></i>Quản lí sản phẩm</li>
                    </a>
                    <a class="selected" href="#">
                        <li><i class="fa fa-bars" aria-hidden="true"></i>Quản lí danh mục</li>
                    </a>
                    <a href="quan-li-don-hang.php">
                        <li><i class="fa fa-file-text-o" aria-hidden="true"></i>Quản lí đơn hàng</li>
                    </a>
                </ul>
            </div>
        </div>

        <!-- MODULE RIGHT -->
        <div class="col-10 module__right">
            <!-- HEADER -->
            <div class="row right__header">
                <div class="col-3">
                    <h2>Quản lí danh mục</h2>
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
                    <a href="them-nhom-hang-hoa.php"><button class="btn-primary add__button">Thêm nhóm sản phẩm</button></a>
                </div>
                <table>
                    <thead>
                        <tr class="tr__haed">
                            <th class="layout__center border__right">Mã nhóm</th>
                            <th class="border__right">Tên nhóm</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    require_once("ConnectDB.php");

                    $MaNhom = $TenNhom = "";

                    // Lấy dữ liệu từ database
                    $sql = "SELECT * FROM NhomHangHoa";
                    $result = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        $MaNhom        = $row['MaNhom'];
                        $TenNhom       = $row['TenNhom'];

                        echo '
            <tr>
                <td class="layout__center" style="padding: 20px 0px;">' . $MaNhom . '</td>
                <td style="padding: 20px 0px;">' . $TenNhom . '</td>
                <td class="button__sp">
                    <a href="them-nhom-hang-hoa.php?id=' . $MaNhom . '"><button class="btn btn-warning" style="margin-left:500px;">Sửa</button></a>
                </td>
                <td class="button__sp">
                    <a href="xoa-item.php?id=' . $MaNhom . '"  onclick="deleteItem()" ><button  class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>
        ';
                    }

                    ?>
                </table>
            </div>
        </div>
    </div>
    <script>
        function deleteItem() {
            var r = confirm("Bạn có chắc muốn xóa danh mục này không ?");
            
        }
    </script>
</body>

</html>

<!-- <?php
        $key = 'abc' ;
        if(isset($_POST['wordkey']))
            $key = $_POST['wordkey'] ;
        
    ?> -->