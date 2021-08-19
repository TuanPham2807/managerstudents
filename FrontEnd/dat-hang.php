<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiến hành đặt hàng</title>
</head>
<body>
    <?php require "header.php" ?>
    <br><br>
    <!-- Thong tin san pham dat hang -->
    <div class="container">
    <div class="row main__order">
        <div class="col-9">
            <table class=" row product__order">
                <?php
                    include('../BackEnd/ConnectDB.php') ;
                
                    $MSHH = $SoLuongDat = $TenHH = $Hinh = $Gia = "" ;
                
                    if(isset($_GET['MSHH']))
                        $MSHH = $_GET['MSHH'] ;
                    if(isset($_POST['SoLuongDat']))
                        $SoLuongDat = $_POST['SoLuongDat'] ;
                    $sql = "SELECT * FROM HangHoa" ;
                    $result = mysqli_query($connect, $sql) ;
                    while($row = mysqli_fetch_array($result)){
                        if($MSHH == $row['MSHH']) {
                            $TenHH = $row['TenHH'] ;
                            $Gia = $row['Gia'] ;
                            $Hinh = $row['Hinh'] ;
                
                            echo '
                
                            <tr style="font-size: 20px;">
                                <td class="layout__center"><img src="'.$Hinh.'" style="width: 170px; height: 170px;"></td>
                                <td ><h4 style="margin-right:40px;">'.$TenHH.'</h4></td>
                                <td class="layout__center"><h5>'.$Gia.'.đ</h5></td>
                                <td class="layout__center"><input type="text" value="'.$SoLuongDat.'" style="width:50px; text-align:center; margin-left:50px;"></td>
                                <td class="button__sp">
                                    <a style="margin-left:0px;"><button class="btn btn-danger">Hủy</button></a>
                                </td>
                            </tr>
                        ' ;
                        } 
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
    include('../BackEnd/ConnectDB.php') ;
    $MSHH =  "" ;
    $TamTinh = $TongTien = $Gia = 0 ;
    if(isset($_GET['MSHH']))
        $MSHH = $_GET['MSHH'] ;
    if(isset($_POST['SoLuongDat']))
        $SoLuongDat = $_POST['SoLuongDat'] ;

    $sql = "SELECT * FROM HangHoa" ;
    $result = mysqli_query($connect, $sql) ;
    while($row = mysqli_fetch_array($result)){
        if($MSHH == $row['MSHH']){
            $Gia = $row['Gia'] ;
            $TamTinh = $SoLuongDat * $Gia ;
            $TongTien = $TamTinh ;

        echo '
            <li>Tạm tính:  <span style="color:black; font-size:20px;"> '.$TamTinh.'.đ</span></li>
            <li>Tổng tiền: <span style="color:Red;font-size:28px; font-weight:bold;">'.$TongTien.'.đ</span></li>
        ' ;
        }
    }
?>    
                    </ul>
                </div><br>
        </div>
    </div>
    </div>
    <hr class="container">
    <!-- Thong tin khach hang -->
    <div class="container">
        <div class="information_customer">
            <h5 style="color:green;">THÔNG TIN KHÁCH HÀNG</h5>
            <form action="">
                Họ tên <input type="text" value="Phạm Hoàng Tuấn"> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Số điện thoại <input type="text" value="0707730850"> <br> <br>
                Giới tính
                <input name="Gaden" type="radio" placeholder="" value="Nam"></> Nam
                <input name="Gaden" type="radio" placeholder="" value="Nữ"></> Nữ
            </form>
        </div> <hr>
        <div class="take__order">
            <h5 style="color:green;">CÁCH THỨC NHẬN HÀNG</h5>
            <form action="">
                <input name="Gaden" type="radio" placeholder="" value="Nam"></> Nhận tại cửa hàng
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="Gaden" type="radio" placeholder="" value="Nữ"></> Giao tận nơi
            </form>
        </div> <hr>
        <div class="address__ship">
            <h5 style="color:green;">ĐỊA CHỈ GIAO HÀNG</h5>
            <form action="">
                <input type="text" placeholder=" Thành phố">
                <input type="text" placeholder=" Quận / Huyện"> <br>
                <input type="text" placeholder=" Phường / Xã">
                <input type="text" placeholder=" Số nhà, tên đường">
            </form>
        </div> <br><br>
    </div>
    <div class="container" style="text-align: center;">
    <form action="dat-hang-thanh-cong.php">
    <input class=" btn btn-success button__muahang" type="submit" value="TIẾN HÀNH ĐẶT HÀNG" style="font-size: 20px; font-weight:bold; padding:10px 150px;">
    </form>
    </div>
    <br><br>            
    <?php require "footer.php" ?>
</body>
</html>