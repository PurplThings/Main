<?php
    session_start();
    include "../Asset/util/config.php";

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