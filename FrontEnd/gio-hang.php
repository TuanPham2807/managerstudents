<?php
// ket noi voi database
include('../BackEnd/ConnectDB.php');

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

$MSHH = $TenHH = $Gia  = $Hinh =  "";
$SoLuong = 1;
$temp = false;

if (isset($_GET['MSHH'])) {
    $MSHH = $_GET['MSHH'];
}

$sqla = "SELECT * FROM GioHang";
$resulta = mysqli_query($connect, $sqla);
while ($value = mysqli_fetch_array($resulta)) {
    if ($MSHH == $value['MSHH'])
        $temp = true;
}

if ($temp == false) {
    $sql = "SELECT * FROM HangHoa";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {
        if ($MSHH == $row['MSHH']) {
            $TenHH   = $row['TenHH'];
            $Gia     = $row['Gia'];
            $Hinh    = $row['Hinh'];

            $sqla = "INSERT INTO GioHang(MSHH, TenHH, Hinh, Gia, SoLuong)
                        VALUES ('$MSHH', '$TenHH', '$Hinh', '$Gia', '$SoLuong')";
            mysqli_query($connect, $sqla);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
</head>

<body>
    <?php require "header.php" ?>

    <div class="container">
        <br><br>
        <button class="btn btn-success" style="font-size:20px; font-weight:bold;">GIỎ HÀNG</button>
    </div>
    <div class=" shopping">

        <!-- <div class="shopping__normal">
           <img src="image/GioHangTrong.png" alt="">
           <p style="font-size: 18px; color: #333;">Không có sản phẩm nào trong giỏ hàng</p>
           <a href="trang-chu.php"><button class="btn btn-outline-success">VỀ TRANG CHỦ</button></a> <br>
           <p style=" color: #333;">Khi cần hỗ trợ vui lòng gọi <a href="#">1800.1234</a> hoặc <a href="#">070.7730.850</a> (7h-22h)</p>
        </div> -->

        <div class="row container product__in__shopping">
            <div class="col-9">
                <table>
                    <?php
                    // ket noi voi database
                    include('../BackEnd/ConnectDB.php');

                    $TenHH = $Hinh = $Gia = $SoLuong = "";
                    $sql = "SELECT * FROM GioHang";
                    $result = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        $TenHH = $row['TenHH'];
                        $Hinh = $row['Hinh'];
                        $Gia = $row['Gia'];
                        $SoLuong = $row['SoLuong'];

                        echo '
            <tr style="font-size: 20px;">
                <td class="layout__center"><img src="' . $Hinh . '" style="width: 170px; height: 170px;"></td>
                <td ><h4 style="margin-right:10px;">' . $TenHH . '</h4></td>
                <td class="layout__center"><h5>' . $Gia . '.đ</h5></td>
                <td class="layout__center"><input type="text" value="' . $SoLuong . '" style="width:50px; text-align:center; margin-left:50px;"></td>
                <td class="button__sp">
                    <a href="" style="margin-left:0px;"><button class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>
        ';
                    }
                    ?>
                </table>
            </div>
            <div class="col-3">
                <div class="promotion">
                    <h5>Mã khuyến mãi</h5>
                    <a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Chọn mã khuyến mãi</a>
                </div>
                <hr>
                <div class="pay" style="margin-left:22px;">
                    <ul>

                        <?php
                        // ket noi voi database
                        include('../BackEnd/ConnectDB.php');
                        $TamTinh = $TongTien = 0;
                        $sql = "SELECT * FROM GioHang";
                        $result = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            $TamTinh = $TamTinh + ($row['Gia'] * $row['SoLuong']);
                        }
                        $TongTien = $TamTinh;

                        echo '
        <li>Tạm tính:  <span style="color:black;"> ' . $TamTinh . '.đ</span></li>
        <li>Tổng tiền: <span style="color:Red;font-size:28px;">' . $TongTien . '.đ</span></li>
    ';

                        ?>


                    </ul>
                </div><br>
                <button class="btn btn-success muahang" style="font-size: 19px; font-weight:bold;">TIẾN HÀNH ĐẶT HÀNG</button>
            </div>
        </div>
    </div>

    <?php require "footer.php" ?>
</body>
</html>