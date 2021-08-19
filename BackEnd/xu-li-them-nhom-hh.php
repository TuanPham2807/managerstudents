<?php
    // ket noi voi database
    include('ConnectDB.php') ;

    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

// THEM NHOM HANG HOA
    $MaNhom = $TenNhom = "" ;

    if(isset($_POST['Them_MaNhom']))
        if(isset($_POST['Them_TenNhom'])){
            $MaNhom = $_POST['Them_MaNhom'] ;
            $TenNhom = $_POST['Them_TenNhom'] ;
            
         }
    $sql = "INSERT INTO NhomHangHoa(MaNhom, TenNhom)
            VALUES ('$MaNhom', '$TenNhom')" ;
    if(mysqli_query($connect, $sql)) 
        header("Location: quan-li-danh-muc.php") ;
    else {
        $sql = "UPDATE NhomHangHoa SET TenNhom='$TenNhom' WHERE MaNhom='$MaNhom'"  ;
        if(mysqli_query($connect, $sql)) 
            header("Location: quan-li-danh-muc.php") ;
    }

?>