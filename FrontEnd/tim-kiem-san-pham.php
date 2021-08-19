<?php
// ket noi voi database
include('../BackEnd/ConnectDB.php');
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim kiem san pham</title>
</head>

<body>
    <?php require_once "../FrontEnd/header.php"; ?>

    <div class="container result__search">
        <br><br>
        <h4 style="color: rgb(5, 158, 5);">Kết quả tìm kiếm</h4>
        <div class="home__page_product sent__product">
            <ul>
                <?php
                $TenHH = $Gia = $Hinh = $key = $arrKey = $arrTenHH = '';
                // Xử lí từ khóa tìm kiếm
                if (isset($_POST['keyword']))
                    $key = trim($_POST['keyword']);
                $arrKey = explode(" ", $key) ;

                $sql = "SELECT * FROM HangHoa";
                $result = mysqli_query($connect, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $TenHH  =  $row['TenHH'];
                    $Gia    =  $row['Gia'];
                    $Hinh   =  $row['Hinh'];
                    $arrTenHH =  explode(" ", $TenHH) ;
                    $mark = 0 ;
                    
                    foreach ($arrTenHH as $valTenHH){
                        foreach ($arrKey as $valKey) {
                            if (strtolower($valKey) == strtolower($valTenHH) && $mark == 0){
                                echo '
                                    <li class="hover__product" style="margin-bottom:25px;"><a href="cherry.php"> <img src="' . $Hinh . '" alt="">
                                    ' . $TenHH . '<p>' . $Gia . '<sup>đ</sup>/KG</p></a>
                                    </li>
                                ';
                                $mark = 1 ;
                            }
                        }
                    }
                    
                }

                ?>
            </ul>

        </div>
    </div>

    <?php require_once "../FrontEnd/footer.php"; ?>
</body>

</html>