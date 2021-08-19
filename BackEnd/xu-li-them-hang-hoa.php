<?php
    // ket noi voi database
    include('ConnectDB.php') ;

    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    // THEM HANG HOA
    $MSHH = $TenHH = $Gia = $SoLuongHang = $MaNhom = $Hinh = "" ;

    if(isset($_POST['Them_MSHH']))
        if(isset($_POST['Them_TenHH'])){
            $MSHH        = $_POST['Them_MSHH'] ;
            $TenHH       = $_POST['Them_TenHH'] ;
            $Gia         = $_POST['Them_Gia'] ;
            $SoLuongHang = $_POST['Them_SoLuongHang'] ;
            $MaNhom      = $_POST['Them_MaNhom'] ;
            $Hinh        = $_POST['Them_Hinh'] ;
        }
    
        $sql = "INSERT INTO HangHoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh)
                VALUES ('$MSHH', '$TenHH', '$Gia', '$SoLuongHang', '$MaNhom', '$Hinh')" ;
        if(mysqli_query($connect, $sql)) 
            header("Location: index.php") ;
            else {
                $sql = "UPDATE HangHoa 
                        SET TenHH='$TenHH',  Gia='$Gia', 
                            SoLuongHang='$SoLuongHang', MaNhom='$MaNhom',
                            Hinh='$Hinh'
                        WHERE MSHH='$MSHH'"  ;
                if(mysqli_query($connect, $sql)) 
                    header("Location: index.php") ;
            }
?>