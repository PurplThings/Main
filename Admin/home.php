<?php 

    session_start();
    if(isset($_SESSION['logintype'])){
        if($_SESSION['logintype']=='user'){
            header('location:../Users/home.php');
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
    <?php require 'util/admin_requirements.php';?>
    <style>
        body{
            /* background-color: rgba(0, 0, 0, 0.7); */
        }
        .container .shadow-lg{
            background-color: #6610b2;
            color:#fff;
        }
    </style>
</head>
<body class="scrollbar">
    <!-- User Navigation Bar -->
    <?php require 'util/adminnavbar.php'; ?>
    <!-- End User Navigation Bar -->

    <br><br>
    <div class="container">
        <div class="shadow-lg p-2">
            <div class="row">
                <div class="col-sm-7 mt-3 ms-5">
                    <img class="shadow-lg px-1 py-1 bg-warning" src="../Asset/images/profile1.jpg" alt="profile photo" style="height:150px;width:150px;border-radius:50%;">
                </div>
                <div class="col-sm-4 text-end py-4 px-4">
                    <h3><?php echo $_SESSION['name']; ?></h3>
                    <h6><?php echo $_SESSION['email']; ?></h6>
                    <h6>ID: <?php echo $_SESSION['id']; ?></h6>
                    <h6>Tel: <?php echo $_SESSION['phno']; ?></h6>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <?php include_once "../Asset/util/footer.php"; ?>
</body>
</html>