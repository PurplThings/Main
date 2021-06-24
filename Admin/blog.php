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

    if(isset($_POST['blogpost'])){
        $title = mysqli_real_escape_string($link,$_POST['title']);
        $description = mysqli_real_escape_string($link,$_POST['description']);
        $post_id = generateID(6,$link);
        $date_post = "".date("d-m-Y h:i:s A");
        $posted_by = (String)$_SESSION['id'];
        $likes = 0;
        $error_msg="";

        if($_FILES['img']['error']!=4){
            $target_dir = "../Asset/images/uploads/blog_images/";
            $image_name= "IMG_".$post_id;
            $check = getimagesize($_FILES["img"]["tmp_name"]);
            $imageFileType = strtolower(pathinfo(basename($_FILES["img"]["name"]),PATHINFO_EXTENSION));
            $path = $target_dir.$image_name.".".$imageFileType;
            $image = $image_name.".".$imageFileType;
            if($check !== false) {
                if (!($_FILES["img"]["size"] > 25000000)) {
                    if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
                            if(move_uploaded_file($_FILES["img"]["tmp_name"], $path)){
                                //change_image_resolution($path,400,300);
                                $error_msg="uploaded";
                            }else{
                                $error_msg= "Failed to upload Image";
                            }
                        }else{
                            $error_msg= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        }
                }else{
                    $error_msg= "Sorry, your file is too large.";
                }
            } else {
                $error_msg= "File is not an image.";
            }

        }

        if($error_msg=="uploaded"){
            $sql = $link->prepare("INSERT INTO `posts`(`post_id`,`title`,`description`,`img`,`likes`,`date_post`,`posted_by`) VALUES(?,?,?,?,?,?,?)");
        
            $sql->bind_param("ssssiss",$post_id,$title,$description,$img,$likes,$date_post,$posted_by);
            $sql->execute();
            if($sql->affected_rows === 1){
                $_SESSION['msg'] ="Your post successfully posted :)";
                $_SESSION['msg_type']="success";
                header("location:blog.php");
            }
        }else{
                $_SESSION['msg'] =$error_msg;
                $_SESSION['msg_type']="danger";
                header("location:blog.php");
        }
        
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
            <form action="" method="post" enctype="multipart/form-data">
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
    function deletePost(id){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{deletePostId:id},
            success:function(data){
                getPostList();
                $("#err_show").html(data);
            }
        })
    }
</script>