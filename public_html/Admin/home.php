<?php 

    session_start();
    error_reporting(0);
    if($_SESSION['logintype']=='user'){
        header('location:../Users/home.php');
    }else{
        header('location:../index.php');
    }

?>
<a href='../Asset/util/logout.php'>Logout</a>