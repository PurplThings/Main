<?php
    session_start();
    error_reporting(1);
    include "../Asset/util/config.php";

    if(isset($_POST['blogpost'])){
        $title = mysqli_real_escape_string($link,$_POST['title']);
        $description = mysqli_real_escape_string($link,$_POST['description']);
        $post_id = generateID(6,$link);
        $date_post = "".date("d-m-Y h:i:s A");
        $posted_by = (String)$_SESSION['id'];
        $image_name= "IMG_".$post_id;
        $likes = 0;
        $error_msg="";

        if($_FILES['img']['error']!=4){
            $target_dir = "../Asset/images/uploads/blog_images/";
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
        
            $sql->bind_param("ssssiss",$post_id,$title,$description,$image_name,$likes,$date_post,$posted_by);
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

    if(isset($_POST['getPostList'])){
        $sql = $link->prepare("SELECT * FROM posts ORDER BY date_post DESC");
        $sql->execute();

        $result = $sql->get_result();
        if($result->num_rows>0){
            $i=1;$modals="";
            echo "<table class='table table-striped table-hover table-responsive'>
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Post ID</th>
                    <th>Title</th>
                    <th>Posted By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody >";
            while($data = $result->fetch_assoc()){
                $postid = (String) $data['post_id'];
                echo "<tr>
                    <td>$i</td>
                    <td>$postid</td>
                    <td>".$data['title']."</td>
                    <td>".$data['posted_by']."</td>
                    <td><i class='fas fa-edit text-warning mx-2' data-bs-toggle='modal' data-bs-target='#editPostModal$postid' style='cursor:pointer;'></i>
                    <i class='far fa-times-circle text-danger mx-1' onclick='deletePost($postid)' style='cursor:pointer;'></i></td>
                </tr>";
                $modals .= "
                    <div class='modal fade' id='editPostModal$postid' tabindex='-1' aria-labelledby='editPostLable$postid' aria-hidden='true'>
                        
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='editPostLable$postid'>Edit Blog Post</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <form action='action.php' method='post'>
                                <input class='form-control' type='text' name='title' placeholder='Enter title here..' value='".$data['title']."' required><br>
                                <textarea class='form-control' name='description' cols='30' rows='5' placeholder='Description' required>".$data['description']."</textarea><br>
                                <input type='file' name='img' class='form-control' ><br>
                                <input type='text' name='postid' value='$postid' hidden> 
                                <input type='submit' class='btn btn-purple float-end' name='updateblogpost' value='UPDATE'>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                ";
                $i++;
            }
            echo "</tbody></table>".$modals;
        }
    }

    if(isset($_POST['updateblogpost'])){
        $title = mysqli_real_escape_string($link,$_POST['title']);
        $description = mysqli_real_escape_string($link,$_POST['description']);
        $postid = mysqli_real_escape_string($link,$_POST['postid']);

        
    }
    if(isset($_POST['deletePostId'])){
        $id = $_POST['deletePostId'];

        $sql = $link->prepare("DELETE FROM posts WHERE post_id = ?");
        $sql->bind_param("s",$id);
        $sql->execute();
        if($sql->affected_rows >0){
            echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert' style='z-index:1100;position:absolute;width:100%;'>
                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#check-circle-fill'/></svg>
                Your post deleted successfully :)
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
        }
    }

    function generateID($length,$link){
        $chars = "1234567890";
        $code = "";
        $clean = strlen($chars)-1;
        while(strlen($code)<$length){
            $c = $chars[mt_rand(0,$clean)];
            if(strlen($code) > 0 || $c != "0"){
                $code .= $c;
            }
        }
        $sql = $link->prepare("SELECT * FROM `posts` WHERE post_id=?");
        $sql->bind_param("s",$code);
        $sql->execute();
        $result = $sql->get_result();
        if($result->num_rows>0){
            generateID(8,$link);
        }else{
            return $code;
        }
    }

    if(isset($_POST['getProfileForm'])){
        $id = $_POST['id'];
        $type = "admin";

        $sql = $link->prepare("SELECT * FROM `users` WHERE `identity_no`=? AND `logintype`=?");
        $sql->bind_param("ss",$id,$type);
        $sql->execute();
        $result = $sql->get_result();
        if($result->num_rows>0){
            while($data = $result->fetch_assoc()){
                echo "
                    <form action='action.php' method='post'>
                        <input class='form-control' type='text' name='fname' value='".$data['f_name']."'><br>
                        <input class='form-control' type='text' name='lname' value='".$data['l_name']."'><br>
                        <input class='form-control' type='tel' name='phno' value='".$data['phno']."'><br>
                    </form> 
                    ";
            }
        }
    }

?>