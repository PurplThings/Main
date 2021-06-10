<?php 

    session_start();
    if(isset($_SESSION['logintype'])){
        if($_SESSION['logintype']=='user'){
            header('location:../Users/index.php');
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
        <form action="action.php" method="post">
            <h3 class="text-center">Blog Post</h3>
            <input class="form-control" type="text" name="title" placeholder="Enter title here.." required><br>
            <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Description" required></textarea><br>
            <input type="file" name="img" class="form-control" ><br>
            <input type="submit" class="btn btn-purple float-end" name="blogpost" value="POST">
        </form>
    </div>
    <br><br><br><br>
    <?php include_once "../Asset/util/footer.php"; ?>
</body>
</html>