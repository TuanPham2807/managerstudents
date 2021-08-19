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
    <title>Cherry</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <?php require "header.php" ?>

    <div class="container detail__product">
        <div class="top_left_SP">
            <div class="img_SP">
                <img src="image/ThitBo.jpg" alt="">
            </div>
            <div class="interaction_SP">
                <h2 style="font-weight: bold; color: rgb(94, 94, 94);">Thịt bò Úc</h2>
                <div>
                    <span style="color: orange;" class="star"><i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span> &nbsp;&nbsp;Viết đánh giá</span>
                </div>
                <div>
                    <span>Trạng thái &nbsp;&nbsp;</span>
                    <span class="state_SP"><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Còn hàng</span>
                </div>
                <h2 style="font-weight: bold; color: orange;">339.000<sup>đ</sup>/KG</h2>
                <p>Thịt bò là thực phẩm giàu protein chất lượng cao có tác dụng duy trì và phát triển khối lượng cơ bắp.
                    Ngoài ra, thịt bò còn là nguồn cung cấp vitamin và chất khoáng đa dạng như vitamin B12, kẽm, sắt...
                    cũng như một số hoạt chất tính sinh học (taurine, creatine...).</p>
                <div>

                    <div class="purchase__add">
                        <form action="dat-hang.php?MSHH=HH006" method="POST">
                            <span style="font-size: 17px; font-weight: bold;">Số lượng</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#" type="text" class="add__sub__button" onclick="subProduct()" style="font-size: 35px;">-</a>
                            <input name="SoLuongDat" id="result" type="number" max="" min="1" value="1" style="width:50px; margin:0px;">
                            <a href="#" type="text" class="add__sub__button" onclick="addProduct()">+</a>
                            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                            <input class="btn btn-success  buttton__product" type="submit" value="Mua Hàng">
                        </form> <br>

                    </div>
                    <form action="gio-hang.php?MSHH=HH006" method="POST" style="margin-left:300px; margin-top:10px;">
                        <input class="btn btn-primary" type="submit" value="Thêm vào giỏ hàng">
                    </form>
                </div>
            </div>
        </div>
        <div class="mid_left_SP">
            <div>
                <button name="mo_ta" type="button" class="btn btn-danger" title="Description">Mô tả</button>
                <button name="thong_tin" type="button" class="btn btn-info" title="Information">Thông tin</button>
                <button name="danh_gia" type="button" class="btn btn-warning" title="Evaluate">Đánh giá</button>
            </div>
        </div>
        <div class="bot_left_SP">

        </div>
        <!-- MÔ TẢ -->
        <div class="Description_class">
            <h4>Mô tả sản phẩm</h4>
            <p>Thịt bò là thực phẩm giàu protein chất lượng cao có tác dụng duy trì và phát triển khối lượng cơ bắp.
                Ngoài ra, thịt bò còn là nguồn cung cấp vitamin và chất khoáng đa dạng như vitamin B12, kẽm, sắt...
                cũng như một số hoạt chất tính sinh học (taurine, creatine...).</p>
        </div>
        <!-- THÔNG TIN -->
        <div class="Information_class">
            <h4>Thông tin chi tiết</h4>
            <table>
                <tr>
                    <th>Tên sản phẩm</th>
                    <td>Cherry Mĩ</td>
                </tr>
                <tr>
                    <th>Xuất xứ</th>
                    <td>Hoa Kì</td>
                </tr>
                <tr>
                    <th>Chất ding dưỡng</th>
                    <td>Chất xơ, kali, đồng, magiê cũng như mangan,
                        sắt, canxi, kẽm và phốt pho</td>
                </tr>
                <tr>
                    <th>Công dụng</th>
                    <td>Giúp duy trì sức khỏe, tốt cho tim mạch, ngăn ngừa tiến trình bệnh tiểu đường</td>
                </tr>
                <tr>
                    <th>Hướng dẫn sử dụng</th>
                    <td>Ăn trực tiếp, bảo quản trong tủ lạnh ngăn mát</td>
                </tr>
                <tr>
                    <th>Hạn sử dụng</th>
                    <td>3 ngày sau khi mua</td>
                </tr>
            </table>
        </div>
        <!-- ĐÁNH GIÁ -->
        <div class="Evaluate_class">
            <h4>Đánh giá sản phẩm</h4>
            <ul>
                <li class="eva_web ">
                    <div>
                        <div>
                            <span style="font-size: 30px; font-weight: normal;">4.8</span>
                            &nbsp;
                            <span style="color: orange;">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div style="padding-bottom: 15px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span><i style="color: rgb(8, 155, 8) ;" class="fa fa-user " aria-hidden="true"></i></span>
                            <span>5</span>
                        </div>
                    </div>
                    <span><button style="padding: 5px 20px; font-size: 17px;" type="button" class="btn btn-success">Viết đánh giá</button></span>
                </li>

                <li class="user_evaluate eva_web">
                    <div class="user_eva_row">
                        <span><i class="fa fa-user fa-2x" aria-hidden="true"></i></span>
                        <span class="user_eva_col">
                            <span style="font-size: 16px;">Phạm Hoàng Tuấn</span>
                            <span>
                                <span style="color: orange;">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span> &nbsp;&nbsp;
                                <span>15/7/2020</span>
                            </span>
                            <div class="eva_content">
                                Trái cây rất tươi, rất ngon
                            </div>
                        </span>
                    </div>
                    <div><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                </li>
                <hr>

                <li class="user_evaluate eva_web">
                    <div class="user_eva_row">
                        <span><i class="fa fa-user fa-2x" aria-hidden="true"></i></span>
                        <span class="user_eva_col">
                            <span style="font-size: 16px;">Nguyễn Phước Nhân</span>
                            <span>
                                <span style="color: orange;">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span> &nbsp;&nbsp;
                                <span>10/5/2020</span>
                            </span>
                            <div class="eva_content">
                                Tươi, ngọt, giá cả hợp lí
                            </div>
                        </span>

                    </div>

                    <div><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                </li>
                <hr>

                <li class="user_evaluate eva_web">
                    <div class="user_eva_row">
                        <span><i class="fa fa-user fa-2x" aria-hidden="true"></i></span>
                        <span class="user_eva_col">
                            <span style="font-size: 16px;">Lâm Thị Kiều Diễm</span>
                            <span>
                                <span style="color: orange;">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span> &nbsp;&nbsp;
                                <span>1/4/2020</span>
                            </span>
                            <div class="eva_content">
                                Sản phảm tươi, ngon, sạch
                            </div>
                        </span>

                    </div>

                    <div><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                </li>
                <hr>

                <li class="user_evaluate eva_web">
                    <div class="user_eva_row">
                        <span><i class="fa fa-user fa-2x" aria-hidden="true"></i></span>
                        <span class="user_eva_col">
                            <span style="font-size: 16px;">Trương Minh Tâm</span>
                            <span>
                                <span style="color: orange;">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span> &nbsp;&nbsp;
                                <span>5/3/2020</span>
                            </span>
                            <div class="eva_content">
                                Sản phẩm tốt, rất thích
                            </div>
                        </span>

                    </div>

                    <div><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                </li>
                <hr>

                <li class="user_evaluate eva_web">
                    <div class="user_eva_row">
                        <span><i class="fa fa-user fa-2x" aria-hidden="true"></i></span>
                        <span class="user_eva_col">
                            <span style="font-size: 16px;">Nguyễn Thanh Thiện</span>
                            <span>
                                <span style="color: orange;">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span> &nbsp;&nbsp;
                                <span>31/12/2019</span>
                            </span>
                            <div class="eva_content">
                                Khá thích sản phẩm của GreenABC, giá hợp lí
                            </div>
                        </span>
                    </div>
                    <div><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                </li>
            </ul>
        </div>
        <div class="product__like">
            <button class="btn-success">Sản phẩm tương tự</button>
            <div class="sent__product">
                <ul>
                    <li class="hover__product"><a href="#"><img src="image/Kiwi.jpg" alt="">
                            Kiwi New Zealand<br>
                            <p>210.000<sup>đ</sup>/KG</p>
                        </a>
                    <li class="hover__product"><a href="#"><img src="image/QuaTao2.jpg" alt="">
                            Táo Mỹ<p>69.000<sup>đ</sup>/KG</p></a>
                    <li class="hover__product"><a href="#"><img src="image/quaLe.jpg" alt="">
                            Lê Nam Phi<p>99.000<sup>đ</sup>/KG</p></a>
                    <li class="hover__product"><a href="#"><img src="image/RongBienNhat.jpg" alt="">
                            Rong biển Wakame Nhật<p>529.000<sup>đ</sup>/KG</p></a>
                </ul>
            </div>
        </div>
    </div>

    <?php require "footer.php" ?>

    <script>
        function addProduct() {
            document.getElementById("result").value++;
        }

        function subProduct() {
            if (document.getElementById("result").value > 1)
                document.getElementById("result").value--
            else {}
        }
        $(document).ready(function() {
            $(".Description_class").show();
            $(".Information_class").hide();
            $(".Evaluate_class").hide();
            $("button[name='mo_ta']").click(function() {
                $(".Description_class").show();
                $(".Information_class").hide();
                $(".Evaluate_class").hide();
            })
            $("button[name='thong_tin']").click(function() {
                $(".Information_class").show();
                $(".Description_class").hide();
                $(".Evaluate_class").hide();
            })
            $("button[name='danh_gia']").click(function() {
                $(".Evaluate_class").show();
                $(".Description_class").hide();
                $(".Information_class").hide();
            })
        })
    </script>
</body>

</html>