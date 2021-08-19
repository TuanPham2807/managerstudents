<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="5(s) ; url=">  -->
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container-fluid header">
        <!-- HEADER TOP -->
        <div class="container header__top">
            <div class="row">
                <!-- GreenFood -->
                <div class="col-3">
                    <img src="image/GreenFood.jpg" alt="">
                </div>
                <!-- THANH TÌM KIẾM -->
                <div class="col-5 form__input">
                    <form id="searchhome" name="searchhome" action="tim-kiem-san-pham.php" method="POST">
                        <input class="search__input" name="keyword" type="text">
                        <input type="submit" class="search__submit"  value="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </input>
                    </form>
                    
                </div>
                <!-- ĐĂNG KÍ / ĐĂNG NHẬP -->
                <div class="col-2 login__button">
                    <ul>
                        <li><a href="#" name="DangKi">ĐĂNG KÍ</a></li>
                        <li><a href="#" name="DangNhap">ĐĂNG NHẬP</a></li>
                    </ul>
                </div>
                <!-- USER , GIỎ HÀNG -->
                <div class="col-2 user__shopping">
                    <a href="thong-tin-tai-khoan.php">
                        <button title="Tài khoản cá nhân" type="button" class="btn btn-success">
                            <svg width="2.3em" height="2.3em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                        </button>
                    </a>
                    <a href="gio-hang.php">
                        <button title="Giỏ hàng" type="button" class="btn btn-success" style="margin:0px;">
                            <svg width="2.3em" height="2.3em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- HEADER BOTTOM -->
        <div class="container header__bottom">
            <!-- BUTTON DANH MỤC SẢN PHẨM -->
            <div class="row">
                <div class="col-3">
                    <button name="product__list" type="button" class="btn btn-success">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        DANH MỤC SẢN PHẨM
                        <div class="sub__menu__1">
                            <ul>
                                <li><a href="trai-cay-tuoi.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Trái cây tươi</a></li>
                                <li><a href="trai-cay-da-lat.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Trái cây Đà Lạt</a></li>
                                <li><a href="rau-cu-sach.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Rau củ sạch</a></li>
                                <li><a href="rau-cu-da-lat.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Rau củ Đà Lạt</a></li>
                                <li><a href="thit-tuoi.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Thịt tươi</a></li>
                                <li><a href="hai-san-tuoi-song.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Hải sản tươi sống</a></li>
                                <li><a href="thuc-pham-tuoi-song.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Thực phẩm nhập khẩu</a></li>
                                <li><a href="trung.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Trứng</a></li>
                            </ul>
                        </div>
                    </button>
                </div>
                <div class="col-6 menu__header">
                    <ul>
                        <li><a href="trang-chu.php">TRANG CHỦ</a></li>
                        <li><a href="ban-chay-nhat.php">SẢN PHẨM<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <div class="sub__menu__1">
                                <ul>
                                    <li><a href="trai-cay-tuoi.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Trái cây</a></li>
                                    <li><a href="rau-cu-sach.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Rau củ</a></li>
                                    <li><a href="thit-tuoi.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Thịt </a></li>
                                    <li><a href="hai-san-tuoi-song.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Hải sản</a></li>
                                    <li><a href="thuc-pham-tuoi-song.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Thực phẩm nhập khẩu</a></li>
                                    <li><a href="trung.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Trứng</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                        <li name="news"><a href="tin-tuc.php">TIN TỨC<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <div class="sub__menu__1">
                                <ul>
                                    <li><a href="tin-tuc.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Tin tức</a></li>
                                    <li><a href="bi-quyet-noi-tro.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Bí quyết nội trợ</a></li>
                                    <li><a href="mon-ngon-moi-ngay.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Món ngon mỗi ngày </a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="lien-he.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
                <!-- HEADPHONE -->
                <div class="col-3 headphone">
                    <svg width="1.7em" height="1.7em" viewBox="0 0 16 16" class="bi bi-headset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1a5 5 0 0 0-5 5v4.5H2V6a6 6 0 1 1 12 0v4.5h-1V6a5 5 0 0 0-5-5z" />
                        <path d="M11 8a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V8zM5 8a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V8z" />
                        <path fill-rule="evenodd" d="M13.5 8.5a.5.5 0 0 1 .5.5v3a2.5 2.5 0 0 1-2.5 2.5H8a.5.5 0 0 1 0-1h3.5A1.5 1.5 0 0 0 13 12V9a.5.5 0 0 1 .5-.5z" />
                        <path d="M6.5 14a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1z" />
                    </svg>
                    Hotline:&nbsp;&nbsp;<a class="a_topright" href="tel:0359329688">0707730850</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- MODAL LAYOUT -->   
    <!--ĐĂNG NHẬP open -->
    <div class="modal__layout" name="sign_in">
        <div class="over__layout"></div>
        <div class="body__layout">
            <button class="btn btn-outline-success" name="button-close">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
            <div class="body">
                <br><br>
                <div class="body__top">
                    <span>ĐĂNG KÝ TÀI KHOẢN</span> <br><br>
                </div>
                <div class="body__bottom">
                    <div title="Đăng kí bằng Gmail" class="gmail"><a href=""><img src="image/gmail.png" alt=""></a></div>
                    <div title="Đăng kí bằng Facebook" class="facebook"><a href=""><img src="image/icon_facebook.jpg" alt=""></a></div>
                </div>
                <br>
                <div class="body__midle">
                    <form id="form-1" action="../BackEnd/DangKy.php" name="DangKy" method="POST">
                        <div class="textbox">
                            <i class="fa fa-user fa-1x" aria-hidden="true"></i>
                            <input id="fullname" name="fullname" type="text" placeholder="Tên đầy đủ"><br>
                            <hr>
                           
                        </div>
                        
                        <div class="textbox">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input id="numberphone" name="numberphone" type="text" placeholder="Số điện thoại"><br>
                            <hr>
                        </div>
                        
                        <div class="textbox">
                            <i class="fa fa-lock fa-1x" aria-hidden="true"></i>
                            <input id="password" name="password" type="password" placeholder="Mật khẩu">
                            <hr>
                        </div>
                        <input type="submit" class="btn-outline-success" value="Đăng ký"></input>
                    </form>
                    <div class="body__login">
                            <button name="DangNhap" class="btn btn-outline-success"
                                style="margin-left:45px;">Đăng nhập</button>
                        </div>  
                </div> <br>
               
            </div>
        </div>
    </div>

    <!-- ĐĂNG NHẬP close -->

    <!--ĐĂNG NHẬP open -->
    <div class="modal__layout" name="logn_in">
        <div class="over__layout"> </div>

        <div class="body__layout">
            <button class="btn btn-outline-success" name="button-close">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
            <div class="body">
                <br><br>
                <div class="body__top">
                    <span>ĐĂNG NHẬP TÀI KHOẢN</span>
                </div> <br>
                <div class="body__bottom">
                    <div title="Đăng nhập bằng Gmail" class="gmail"><a href="https://www.facebook.com/"><img src="image/gmail.png" alt=""></a></div>
                    <div title="Đăng nhập bằng Facebook" class="facebook"><a href="https://mail.google.com/mail/u/1/#inbox"><img src="image/icon_facebook.jpg" alt=""></a></div>
                </div> <br>
                <div class="body__midle">
                    <form id="form-2" action="../BackEnd/DangNhap.php" name="DangNhap" method="POST">
                        <div class="textbox">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input id="numberphone" name="numberphone" type="text" placeholder="Số điện thoại">
                        </div>
                        <hr>
                        <div class="textbox">
                            <i class="fa fa-lock fa-1x" aria-hidden="true"></i>
                            <input type="password" name="password" placeholder="Mật khẩu"></div>
                        <hr>
                        <input type="submit" name="dangnhap" class="btn-outline-success" value="Đăng nhập"></input>
                    </form>
                </div>
                <div class="body__login">
                    <button name="DangKi" style="margin-left:43px; padding: 5px 142px;" class="btn btn-outline-success">Đăng ký</button>
                </div>
                <div style="font-size: 17px; text-align: center; padding-top: 30px;"><a href="#">Bạn quên mật khẩu?</a></div>
            </div>
        </div>
    </div>

    <!-- ĐĂNG NHẬP close -->
    <script src="validator.js"></script>
    <script>
        Validator({
            form: '#form-1',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#fullname') ,
                Validator.isNumberPhone('#number-phone-1'),
            ]
        }) ; 
    </script>

    <script>
        $(document).ready(function() {
            // ĐĂNG KÝ
            $(".modal__layout[name='sign_in']").hide();

            $("a[name='DangKi']").click(function() {
                $(".modal__layout[name='sign_in']").show();
            })
            $("a[name='button-DangKi']").click(function() {
                $(".modal__layout[name='sign_in']").show();
            })
            $("button[name='button-close']").click(function() {
                $(".modal__layout[name='sign_in']").hide();
            })
            $("button[name='DangNhap']").click(function() {
                $(".modal__layout[name='logn_in']").show();
                $(".modal__layout[name='sign_in']").hide();
            })

            // ĐĂNG NHẬP
            $(".modal__layout[name='logn_in']").hide();

            $("a[name='DangNhap']").click(function() {
                $(".modal__layout[name='logn_in']").show();
            })
            $("a[name='button-DangNhap']").click(function() {
                $(".modal__layout[name='sign_in']").show();
            })
            $("button[name='button-close']").click(function() {
                $(".modal__layout[name='logn_in']").hide();
            })
            $("button[name='DangKi']").click(function() {
                $(".modal__layout[name='sign_in']").show();
                $(".modal__layout[name='logn_in']").hide();
            })

        })
    </script>
</body>

</html>