<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="fixed.css">
    <link rel="stylesheet" href="animation.css"> -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php require "header.php" ?>

    <div class="container news">
        <div class="row">
            <div class="col-xl-3 news__left">
                <h4>Danh mục tin tức</h4>
                <div class="type__news">
                    <ul>
                        <li  class="mark__product"><a href="tin-tuc.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Tin tức</a></li>
                        <hr>
                        <li><a href="bi-quyet-noi-tro.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Bí quyết nội trợ</a></li>
                        <hr>
                        <li><a href="mon-ngon-moi-ngay.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Món ngon mỗi ngày</a></li>
                        <hr>
                    </ul>
                </div>
                <h4>Tin tức nổi bậc</h4>
                <div class="special__news"> 
                    <ul>
                        <li><img src="image/news-che-khuc-bach-1.jpg" alt=""></li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><span class="date__news">31/8/2020</span></li>
                        <li style="font-weight:bold; font-size:18px;">Cách làm món chè khúc...</li>
                        <li>Chè khúc bạch có cách làm khá đơn giản, có thể thực hiện tại n...</li>
                    </ul>
                    <hr>
                    <ul>
                        <li><img src="image/news-hoa-qua-Viet-1.jpg" alt=""></li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><span class="date__news">31/8/2020</span></li>
                        <li style="font-weight:bold; font-size:18px;">Vì sao hoa quả Việt thất...</li>
                        <li>Rau củ quả Việt Nam đang dần khẳng định tên tuổi của mình trê...</li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-9 news__right">
                <h4 name="tintuc">Tin tức</h4>
                <!-- HÀNG 1 -->
                <div class="row">
                    <div class="col-4">
                        <ul>
                            <li><img src="image/news_rau-xanh-1.jpg" alt=""></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><span class="date__news">31/8/2020</span></li>
                            <li class="header__news">Rau xanh tăng giá mạnh vì...</li>
                            <li>Khoảng gần 1 tuần nay, do ảnh hưởng của những cơn mưa lớn kéo...</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li><img src="image/news_trai-cay-1.jpg" alt=""></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><span class="date__news">31/8/2020</span></li>
                            <li class="header__news">Những loại trái cây Nhật đ...</li>
                            <li>Nhật Bản là đất nước có nhiều loại hoa quả có chất lượng thuộc hàng ...</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li><img src="image/new_trai-cay-2.jpg" alt=""></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><span class="date__news">31/8/2020</span></li>
                            <li class="header__news">Nhập khẩu rau quả vượt m...</li>
                            <li>Theo báo cáo từ Bộ NN&PTNT, giá trị xuất khẩu hàng rau quả tháng 9...</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <!-- HÀNG 2 -->
                <div class="row">
                    <div class="col-4">
                        <ul>
                            <li><img src="image/news-trong-rau-sach-1.jpg" alt=""></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><span class="date__news">31/8/2020</span></li>
                            <li class="header__news">Kỹ thuật trồng rau sạch tro...</li>
                            <li>Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều gia đìn...</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li><img src="image/news-hoa-qua-Viet-1.jpg" alt=""></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><span class="date__news">31/8/2020</span></li>
                            <li class="header__news">Vì sao hoa quả Việt thất th...</li>
                            <li>Rau củ quả Việt Nam đang dần khẳng định tên tuổi của mình trên...</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li><img src="image/news-nong-san-Viet-1.jpg" alt=""></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><span class="date__news">31/8/2020</span></li>
                            <li class="header__news">Gia tăng năng lực cạnh tra...</li>
                            <li>Hàng nông sản muốn tham gia chuỗi giá trị toàn cầu cần phải cải t...</li>
                        </ul>
                    </div>
                </div>  
                <hr>
                <!-- HÀNG 3 -->
                <div class="row">
                    <div class="col-4">
                    <ul>
                        <li><img src="image/news-che-khuc-bach-1.jpg" alt=""></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><span class="date__news">31/8/2020</span></li>
                            <li class="header__news">Cách làm món chè khúc bạ...</li>
                            <li>Chè khúc bạch có cách làm khá đơn giản, có thể thực hiện tại nhà với...</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li><img src="image/news-tu-che-sua-chua-1.jpg" alt=""></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><span class="date__news">31/8/2020</span></li>
                            <li class="header__news">Hướng dẫn làm món sữa c...</li>
                            <li>Sữa chua uống từ trước đến nay luôn là thức uống giải nhiệt được...</li>
                        </ul>
                    </div>
                    <div class="col-4"></div>
                </div>  
            </div>
        </div>
    </div>

    <?php require "footer.php" ?>
</body>
</html>