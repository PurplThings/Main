<?php
    require 'google-api/vendor/autoload.php';
    require 'Asset/util/config.php';

    

    if(isset($_GET['code'])){
        $token = $Client->fetchAccessTokenWithAuthCode($_GET['code']);
    }else{
        header('location:index.php');
        exit();
    }
    if(!isset($token['error'])){
            $oAuth = new Google_Service_Oauth2($Client);
            $data = $oAuth->userinfo_v2_me->get();
        
            $fn = $data['familyName'];
            $gn = $data['givenName'];
            $email = $data['email'];
            $avatar = $data['picture'];
            $pwd = generatePWD(8);

            

            $sql = "SELECT * FROM `users` WHERE email='".$data['email']."'";
            $query = mysqli_query($link,$sql);
            while($data = mysqli_fetch_array($query)){
                $_SESSION['logintype'] = $data['logintype'];
            }
            if(mysqli_num_rows($query)<1){
                $sql = "INSERT INTO `users`(`f_name`,`l_name`,`email`,`password`,`phno`,`gender`,`avatar`,`logintype`) 
                        VALUES('$fn','$gn','$email','$pwd','','','$avatar','user')";
                $query = mysqli_query($link,$sql);
                if($query){
                    session_start();
                    $_SESSION['email']=$email;
                    $_SESSION['avatar']=$avatar;
                    $_SESSION['name']=$fn.' '.$gn;
                    
                    
                    $headers = "MIME-Version: 1.0\r\n";
                    $headers .="Content-Type: text/html; charset=ISO-8859-1\r\n";
                    
                    $msg = "<p style='color:purple;'>Hi $fn $gn, <br><br> Thank you for registering with us.<br><br>Your Username : $email <br>Your Password : $pwd <br><br>Best Regards<br>Purpl Things<p>";
                    
                    $message = $emailheader.$msg.$emailfooter;
                    mail($email,"Congratulations for Registering Purple Things",$message,$headers);

                    if($_SESSION['logintype'] == "admin"){
                        header('location:Admin/home.php');
                    }else if($_SESSION['logintype']=="user"){
                        header('location:Users/home.php');
                    }
                    

                }else{
                    $_SESSION['insert_err'] = TRUE;
                    header('location:index.php');
                }
            }else{
                $_SESSION['email']=$email;
                $_SESSION['avatar']=$avatar;
                $_SESSION['name']=$fn.' '.$gn;
                $_SESSION['logintype'] = "user";
                header('location:Users/home.php');
            }

    }else if($token["error"] == "invalid_grant"){
        $_SESSION['invalid_grant'] = TRUE;
        header('location:index.php');
        exit();
    }

    function generatePWD($length){
        $chars = "ABCDEFGHIJKLMnopqrstuvwxyz1234567890@#%&";
        $code = "";
        $clean = strlen($chars)-1;
        while(strlen($code)<$length){
            $code .= $chars[mt_rand(0,$clean)];
        }
        return $code;
    }
?>