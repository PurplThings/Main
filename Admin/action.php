<?php
    session_start();
    include "../Asset/util/config.php";

    if(isset($_POST['blogpost'])){
        $title = mysqli_real_escape_string($link,$_POST['title']);
        $description = mysqli_real_escape_string($link,$_POST['description']);
        $post_id = generateID(6,$link);
        $date_post = "".date("d-m-Y h:i:s A");
        $likes = 0;
        // $img ="IMG_".$post_id;
        $img ="";

        $sql = $link->prepare("INSERT INTO `posts`(`post_id`,`title`,`description`,`img`,`likes`,`date_post`) VALUES(?,?,?,?,?,?)");
        
        $sql->bind_param("ssssis",$post_id,$title,$description,$img,$likes,$date_post);
        $sql->execute();
        if($sql->affected_rows === 1){
            $_SESSION['posted'] =true;
            header("location:blog.php");
        }
        
    }

    function generateID($length,$link){
        $chars = "1234567890";
        $code = "";
        $clean = strlen($chars)-1;
        while(strlen($code)<$length){
            $code .= $chars[mt_rand(0,$clean)];
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

?>