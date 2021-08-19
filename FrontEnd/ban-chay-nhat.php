<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm bán chạy</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fixed.css">
    <link rel="stylesheet" href="motion.css">
</head>

<body>
    <?php require "header.php" ?>

    <div class="container product__main">
        <!-- DÙNG LẠI DANH MỤC TIN TỨC open -->
        <div class="row news">
            <div class="col-xl-3 news__left">
                <h4>Danh mục</h4>
                <div class="type__news">
                    <ul>
                        <li class="mark__product"><a href="ban-chay-nhat.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Bán chạy nhất</a></li>
                        <hr>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Trái cây tươi</a></li>
                        <hr>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Trái cây Đà Lạt</a></li>
                        <hr>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Rau củ sạch</a></li>
                        <hr>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Rau củ Đà Lạt</a></li>
                        <hr>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Thịt tươi</a></li>
                        <hr>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Hải sản tươi sống</a></li>
                        <hr>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Thực phẩm nhập khẩu</a></li>
                        <hr>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Trứng</a></li>
                        <hr>
                    </ul>
                </div>
            </div>
            <!-- DÙNG LẠI DANH MỤC TIN TỨC close-->

            <!-- DÙNG LẠI SẢN PHẨM ĐÃ XEM open -->
            <div class="col-xl-9 sent__product" style="padding-right: 0px;">
                <button type="button" class="btn btn-success" name="button__in__main">BÁN CHẠY NHẤT</button>
                <ul>
                    <li class="hover__product"><a href="#"><img src="image/heo3chi.jpg" alt="">
                            Thịt heo 3 chỉ<p>149.000<sup>đ</sup>/KG</p></a></li>
                    <li class="hover__product"><a href="#"><img src="image/ThitGa.jpg" alt="">
                            Thịt gà ta<p>129.00<sup>đ</sup>/KG</p></a>
                    <li class="hover__product"><a href="#"><img src=" image/Kiwi.jpg" alt="">
                            Kiwi New Zealand<br><p>210.000<sup>đ</sup>/KG</p></a></li>

                </ul>
                <ul>
                    <li><a href="#"><img src=" image/ThitBoMy1.jpg" alt="">
                            Thịt Bò Mỹ 3 chỉ<p>385.000<sup>đ</sup>/KG</p></a>

                    <li class="hover__product"><a href="#"><img src=" image/SauRieng.jpg" alt="">
                            Sầu riêng<p>79.000<sup>đ</sup>/KG</p></a></li>

                    <li class="hover__product"><a href="#"><img src=" image/TômCang.jpg" alt="">
                            Tôm càng xanh<p>329.000<sup>đ</sup>/KG</p></a>

                </ul>
                <ul>
                    <li class="hover__product"><a href="#"><img src="image/cam.png" alt="">
                            Cam vàng<br>
                            <p>69.000<sup>đ</sup>/KG</p>
                        </a></li>
                    <li class="hover__product"><a href="#"><img src="image/QuytDuong.jpg" alt="">
                            Quýt đường<p>39.000<sup>đ</sup>/KG</p></a></li>
                    <li class="hover__product"><a href="#"><img src="image/NhoMi.jpg" alt="">
                            Nho Mĩ đỏ<p>149.000<sup>đ</sup>/KG</p></a></li>
                </ul>
            </div>
            <!-- DÙNG LẠI SẢN PHẨM ĐÃ XEM close -->
        </div>
    </div>

    <?php require "footer.php" ?>
</body>

</html>