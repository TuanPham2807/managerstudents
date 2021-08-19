<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fixed.css">
    <link rel="stylesheet" href="animation.css">
</head>
<body>
    <?php require "header.php" ?>

    <div class="user container">
        <div class="user__left">
            <table>
                <tr>
                    <th style="font-size: 20px;"><img src="image/AccUser.jpg" alt=""> Phạm Hoàng Tuấn</th>
                </tr>
                <tr>
                    <td style="background-color: rgb(127, 255, 159);"><a href="thong-tin-tai-khoan.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Thông tin tài khoản</a></td>
                </tr>
                <tr>
                    <td><a href="thong-bao-cua-toi.php"><i class="fa fa-bell" aria-hidden="true"></i>Thông báo của tôi</a></td>
                </tr>
                <tr>
                    <!-- <td><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quản lí đơn hàng</a></td> -->
                </tr>
                <tr>
                    <td><a href="so-dia-chi.php"><i class="fa fa-map-marker" aria-hidden="true"></i>Số địa chỉ</a></td>
                </tr>
                <tr>
                    <td><a href="lich-su-mua-hang.php"><i class="fa fa-history" aria-hidden="true"></i>Lịch sử mua hàng</a></td>
                </tr>
                <tr>
                    <td><a href="san-pham-yeu-thich.php"><i class="fa fa-heart" aria-hidden="true"></i>Sản phẩm yêu thích</a></td>
                </tr>
                <tr>
                    <td><a href="san-pham-da-xem.php"><i class="fa fa-eye" aria-hidden="true"></i>Sản phẩm đã xem</a></td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Đăng xuất</a></td>
                </tr>
            </table>
        </div>

        <div class="user__right">
            <p>Thông tin tài khoản</p>
            <div class="frame__user row">
                <div class="frame__user__left col-xl-3">
                    <div>Họ và tên</div>
                    <div>Số điện thoại</div>
                    <div>Email</div>
                    <div>Giới tính</div>
                    <div>Ngày sinh</div>
                </div>

                <div class="frame__user__right col-xl-9">
                    <div><input type="text" placeholder=""></span></div>
                    <div><input type="text" placeholder=""></span></div>
                    <div><input type="text" placeholder=""></span></div>
                    <div class="Gioi__tinh">
                        <span><input name="Gaden" type="radio" placeholder="" value="Nam"></span>Nam
                        <span><input name="Gaden" type="radio" placeholder="" value="Nữ"></span>Nữ
                    </div>
                    <div>
                        <select name="day">
                            <option>Ngày</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                            <option value="">13</option>
                            <option value="">14</option>
                            <option value="">15</option>
                            <option value="">16</option>
                            <option value="">17</option>
                            <option value="">18</option>
                            <option value="">19</option>
                            <option value="">20</option>
                            <option value="">11</option>
                            <option value="">22</option>
                            <option value="">23</option>
                            <option value="">24</option>
                            <option value="">25</option>
                            <option value="">26</option>
                            <option value="">26</option>
                            <option value="">28</option>
                            <option value="">29</option>
                            <option value="">30</option>
                            <option value="">31</option>
                        </select>
                        
                        <select name="month" id="">
                            <option>Tháng</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                        </select>
                        
                        <select name="year" id="">
                            <option>Năm</option>
                            <option value="">2020</option>
                            <option value="">2019</option>
                            <option value="">2018</option>
                            <option value="">2017</option>
                            <option value="">2016</option>
                            <option value="">2015</option>
                            <option value="">2014</option>
                            <option value="">2013</option>
                            <option value="">2012</option>
                            <option value="">2011</option>
                            <option value="">2010</option>
                            <option value="">2009</option>
                            <option value="">2008</option>
                            <option value="">2007</option>
                            <option value="">2006</option>
                            <option value="">2005</option>
                            <option value="">2004</option>
                            <option value="">2003</option>
                            <option value="">2002</option>
                            <option value="">2001</option>
                            <option value="">2000</option>
                            <option value="">1999</option>
                            <option value="">1998</option>
                            <option value="">1997</option>
                            <option value="">1996</option>
                            <option value="">1995</option>
                            <option value="">1994</option>
                            <option value="">1993</option>
                            <option value="">1992</option>
                            <option value="">1991</option>
                            <option value="">1990</option>
                            <option value="">1989</option>
                            <option value="">1988</option>
                            <option value="">1987</option>
                            <option value="">1986</option>
                            <option value="">1985</option>
                            <option value="">1984</option>
                            <option value="">1983</option>
                            <option value="">1982</option>
                            <option value="">1981</option>
                            <option value="">1980</option>
                            <option value="">1979</option>
                            <option value="">1978</option>
                            <option value="">1977</option>
                            <option value="">1976</option>
                            <option value="">1975</option>
                            <option value="">1974</option>
                            <option value="">1973</option>
                            <option value="">1972</option>
                            <option value="">1971</option>
                            <option value="">1970</option>
                            <option value="">1969</option>
                            <option value="">1968</option>
                            <option value="">1967</option>
                            <option value="">1966</option>
                            <option value="">1965</option>
                            <option value="">1964</option>
                            <option value="">1963</option>
                            <option value="">1962</option>
                            <option value="">1961</option>
                            <option value="">1960</option>
                        </select>
                    </div>
                </div>
                

            </div>
            <p>Bảo mật</p>
            <div class="frame__user row">
                
                <div class="frame__user__left col-xl-3">
                    <div>Mật khẩu cũ</div>
                    <div>Mật khẩu mới</div>
                    <div>Nhập lại</div>
                </div>

                <div class="frame__user__right col-xl-9">
                    <div><input type="text" placeholder=""></span></div>
                    <div><input type="text" placeholder=""></span></div>
                    <div><input type="text" placeholder=""></span></div>
                </div>
               
               
            </div>
            <button type="button" class="btn btn-success">Cập nhật</button>
        </div>
    </div>

    <?php require "footer.php" ?>
</body>
</html>