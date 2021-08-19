CREATE DATABASE CT237_DOAN


CREATE TABLE KhachHang (
    MSKH varchar(5) PRIMARY KEY,
    HoTenKH VARCHAR(50) NOT NULL,
    DiaChi VARCHAR(50) NOT NULL,
    SoDienThoai VARCHAR(10) NOT NULL
)

CREATE TABLE NhanVien(
    MSNV VARCHAR(5) PRIMARY KEY,
    HoTenNV VARCHAR(50) NOT NULL,
    ChucVu VARCHAR(50) NOT NULL,
    DiaChi VARCHAR(50),
    SoDienThoai VARCHAR(10) NOT NULL
)

CREATE TABLE DatHang(
    SoDonDH VARCHAR(5) PRIMARY KEY,
    MSKH VARCHAR(5) NOT NULL REFERENCES KhachHang(MSKH),
    MSNV VARCHAR(5) REFERENCES NhanVien(MSNV),
    NgayDH DATETIME NOT NULL,
    TrangThai VARCHAR(10) NOT NULL
)

CREATE TABLE NhomHangHoa(
    MaNhom VARCHAR(5) PRIMARY KEY,
    TenNhom VARCHAR(50) NOT NULL
)

CREATE TABLE HangHoa(
    MSHH VARCHAR(5) PRIMARY KEY,
    TenHH VARCHAR(50) NOT NULL,
    Gia INT NOT NULL CHECK (Gia > 0),
    SoLuongHang TINYINT NOT NULL,
    MaNhom VARCHAR(5) NOT NULL REFERENCES NhomHangHoa(MaNhom),
    Hinh VARCHAR(400) NOT NULL,
    MoTaHH VARCHAR(200)
)

CREATE TABLE ChiTietDatHang(
    SoDonDH VARCHAR(5) NOT NULL REFERENCES DatHang(SoDonDH),
    MSHH VARCHAR(5) NOT NULL REFERENCES DatHang(MSHH),
    SoLuong TINYINT NOT NULL CHECK (SoLuong > 0),
    GiaDatHang REAL NOT NULL CHECK (GiaDatHang > 0),
    PRIMARY KEY (SoDonDH, MSHH)
)

CREATE TABLE GioHang(
    MSHH VARCHAR(5) NOT NULL REFERENCES HangHoa(MSHH),
    TenHH VARCHAR(50) NOT NULL,
    Hinh VARCHAR(400) NOT NULL,
    Gia INT NOT NULL CHECK (Gia > 0),
    SoLuong TINYINT NOT  NULL,
    PRIMARY KEY (MSHH, SoLuong)
)

CREATE TABLE TaiKhoan(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    FullName VARCHAR(50) NOT NULL,
    SDT VARcHAR(10) NOT NULL,
    PassWord VARCHAR(20) NOT NULL
)

-- THÊM DANH MUC SAN PHAM
INSERT INTO NhomHangHoa(MaNhom, TenNhom) VALUES ('DM001', "Rau củ Đà Lạt") ;

INSERT INTO NhomHangHoa(MaNhom, TenNhom) VALUES ('DM002', "Trái cây Đà Lạt") ;

INSERT INTO NhomHangHoa(MaNhom, TenNhom) VALUES ('DM003', "Trái cây tươi") ;

INSERT INTO NhomHangHoa(MaNhom, TenNhom) VALUES ('DM004', "Rau củ sạch") ;

INSERT INTO NhomHangHoa(MaNhom, TenNhom) VALUES ('DM005', "Hải sản tươi sống") ;

INSERT INTO NhomHangHoa(MaNhom, TenNhom) VALUES ('DM006', "Nhập khẩu") ;

INSERT INTO NhomHangHoa(MaNhom, TenNhom) VALUES ('DM007', "Trứng") ;

INSERT INTO NhomHangHoa(MaNhom, TenNhom) VALUES ('DM008', "Bán chạy nhất") ;

-- THÊM SẢN PHẨM
INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH)
VALUES ('HH001', 'Ớt chuông Đà Lạt', 59000, 10, 'DM001', 'https://salt.tikicdn.com/ts/tmp/a7/10/7d/8d944cd441585b2c4efb6083ff8f4bff.jpg', '') ;

INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH)
VALUES ('HH002', 'Dâu tây Đà Lạt', 149000, 10, 'DM002', 'https://dautaydalat.vn/wp-content/uploads/2019/10/dau-tay.png', '');

INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH)
VALUES ('HH003', 'Vãi thiều', 39000, 5, 'DM003', 'https://file.hstatic.net/1000339502/article/gan-nua-trieu-dong-1kg-vai-thieu-van-dat-nhu-tom-tuoi_724f78fe959a4b64a9a1490501477d9a.png', '') ;

INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH)
VALUES ('HH004', 'Cà rốt', 17000, 11, 'DM004', 'https://bizweb.dktcdn.net/thumb/grande/100/197/189/products/40-fb6f74ad-ba7d-4024-9ccc-ea6ce037b671.jpg?v=1587175588110', '') ;

INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH)
VALUES ('HH005', 'Tôm càng xanh', 329000, 10, 'DM005', 'https://tincay.com/wp-content/uploads/2018/12/tomcangxanh.png', '') ;

INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH)
VALUES ('HH006', 'Thịt bò Úc', 339000, 10, 'DM006', 'https://baogialai.com.vn/dataimages/201803/original/images2631552_me.jpg', '') ;

INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH)
VALUES ('HH007', 'Trứng gà', 30000, 50, 'DM007', 'https://thuocdantoc.vn/wp-content/uploads/2019/09/dung-trung-ga-chua-yeu-sinh-ly1.jpg', '') ;

INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH)
VALUES ('HH008', 'Cherry Mỹ', 319000, 15, 'DM008', 'https://product.hstatic.net/200000077081/product/fresh-aus-cherry-cotsaris-cherry-uc_5926512a62584b97abf48652e7a45c71.jpg', '') ;

INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH)
VALUES ('HH009', 'Kiwi New Zealand', 210000, 20, 'DM006', 'https://bizweb.dktcdn.net/100/065/538/products/kiwi-xanh.jpg?v=1501164103217', '') ;

INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH)
VALUES ('HH010', 'Sầu riêng', 79000, 15, 'DM003', 'https://product.hstatic.net/1000359458/product/sau_rieng_6d8d1511bafd468fba51e7e2cbf86ab7_master.png', '') ;

-- THÊM NHÂN VIÊN
INSERT INTO NhanVien(MSNV, HoTenNV, ChucVu, DiaChi, SoDienThoai)
VALUES ('NV001', 'Phạm Hoàng Tuấn', 'Quản lí', '', '0707730850') ;

INSERT INTO NhanVien(MSNV, HoTenNV, ChucVu, DiaChi, SoDienThoai)
VALUES ('NV002', 'Dương Thị Cẩm Tiên', 'Nhân viên', '', '0901234567') ;

INSERT INTO NhanVien(MSNV, HoTenNV, ChucVu, DiaChi, SoDienThoai)
VALUES ('NV003', 'Nguyễn Phước Nhân', 'Nhân viên', '', '0309876543') ;

INSERT INTO NhanVien(MSNV, HoTenNV, ChucVu, DiaChi, SoDienThoai)
VALUES ('NV004', 'Trương Minh Tâm', 'Nhân viên', '', '0504569876') ;

-- THÊM KHÁCH HÀNG

INSERT INTO KhachHang(MSKH, HoTenKH, DiaChi, SoDienThoai)
VALUES ('KH001', 'Võ Tính Thành', 'C123D xã Mỹ Thuận huyện Bình Tân Vĩnh Long', '09876543') ;

INSERT INTO KhachHang(MSKH, HoTenKH, DiaChi, SoDienThoai)
VALUES ('KH002', 'Phan Khánh Quan', 'A456B đường 3/2 quận Ninh Kiều Cần Thơ', '07476555') ;

INSERT INTO KhachHang(MSKH, HoTenKH, DiaChi, SoDienThoai)
VALUES ('KH003', 'Nguyễn Hữu Minh Thy', 'E567F xã Mỹ Thuận huyện Bình Tân Vĩnh Long', '07076559') ;

INSERT INTO KhachHang(MSKH, HoTenKH, DiaChi, SoDienThoai)
VALUES ('KH004', 'Nguyễn Nhi', 'C166D đường Trần Văn Hoài quận Ninh Kiề Cần Thơ', '03076598') ;