<?php 

    session_start();
    include "../Asset/util/config.php";
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
        .row{
            --bs-gutter-x:0%;
        }
    </style>
</head>
<body class="scrollbar">

    <div id="err_show"></div>

    <!-- User Navigation Bar -->
    <?php require 'util/adminnavbar.php'; ?>
    <!-- End User Navigation Bar -->

    <div class="row">
        <div class="col-sm-4 p-4">
            <form action="action.php" method="post" enctype="multipart/form-data">
                <h3 class="text-center">Blog Post</h3>
                <input class="form-control" type="text" name="title" placeholder="Enter title here.." required><br>
                <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Description" required></textarea><br>
                <input type="file" name="img" class="form-control" accept="image/jpeg,image/x-png,image/jpg"><br>
                <input type="submit" class="btn btn-purple float-end" name="blogpost" value="POST">
            </form>
        </div>
        <div class="col-sm-8" id="getPostList"></div>
    </div>
    <br><br><br><br>
    <?php include_once "../Asset/util/footer.php"; ?>
</body>
</html>
<script>
    getPostList();
    function getPostList(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{getPostList:1},
            success:function(data){
                $("#getPostList").html(data);
            }
        })
    }
    function editPost(id){
        alert(id);
    }
    function deletePost(id,type){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{deletePostId:id,type:type},
            success:function(data){
                getPostList();
                $("#err_show").html(data);
            }
        })
    }
</script>