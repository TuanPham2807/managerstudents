<?php
    // ket noi voi database
    include('ConnectDB.php') ;

    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    $id = $MSHH =  "" ;
    if(isset($_GET['id'])) {
        $id = $_GET['id'] ;
        $sql = "DELETE FROM NhomHangHoa WHERE MaNhom='$id'" ;
        
        if(mysqli_query($connect, $sql))
            header("Location: quan-li-danh-muc.php") ;
    }

    if(isset($_GET['MSHH'])) {
        $MSHH = $_GET['MSHH'] ;
        $sql = "DELETE FROM HangHoa WHERE MSHH='$MSHH'" ;

        if(mysqli_query($connect, $sql))
            header("Location: index.php") ;
    }
?>