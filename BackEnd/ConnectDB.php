<?php
    
    $SERVER = "localhost" ;
    $USERNAME = "root" ;
    $PASSWORD = "" ;
    $DBNAME = "ct237_doan" ;

    $connect = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME) ;

    if(!$connect)
        echo "Connect Database Fail !" ;
    
?>