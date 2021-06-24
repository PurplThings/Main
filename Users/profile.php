<?php 

    session_start();
    if(isset($_SESSION['logintype'])){
        if($_SESSION['logintype']=='admin'){
            header('location:../Admin/index.php');
        }
    }else{
        header('location:../index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo strtoupper($_SESSION['name']); ?></title>
    <?php require 'util/user_requirements.php';?>
    <style>
        
        
    </style>
</head>
<body class="scrollbar">
    <!-- User Navigation Bar -->
    <?php require 'util/usernavbar.php'; ?>
    <!-- End User Navigation Bar -->

    <br><br>
    
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <?php include_once "../Asset/util/footer.php"; ?>
</body>
</html>