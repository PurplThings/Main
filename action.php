<?php
    include_once './Asset/util/config.php';
    //error_reporting(0);
    session_start();

    // Login Action
    if(isset($_POST['login'])){
        $lemail = $_POST['lemail'];
        $lpass  = $_POST['lpass'];
        $sql = $link->prepare("SELECT * FROM `users` WHERE `email`=? AND `password`=? ");
        $sql->bind_param("ss",$lemail,$lpass);
        $sql->execute();
  
        $result = $sql->get_result();
        if($result->num_rows > 0 ){
            while($data = $result->fetch_assoc()){
                $_SESSION['name']      = $data['f_name']." ".$data['l_name'];
                $_SESSION['email']     = $lemail;
                $_SESSION['avatar']    = $data['avatar'];
                $_SESSION['id']    = $data['identity_no'];
                $_SESSION['phno']    = $data['phno'];
                $activation = $data['activation'];
  
                if($activation == 1){
                    $_SESSION['logintype'] = $data['logintype'];
                    if($data['logintype']=="user"){
                        header("location:Users/home.php");
                    }else if($data['logintype'] == "admin"){
                        header("location:Admin/home.php");
                    }
                }else{
                    header("location:index.php?msg=Your account is not activated yet, please activate and Login!");
                }
            }
        }else{
            header("location:index.php?msg=Email or Password incorrect!");
        }
  
      }

      // Register Action
    if(isset($_POST['register'])){

        $fname      = $_POST['fname'];
        $lname      = $_POST['lname'];
        $email      = $_POST['email'];
        $phno       = $_POST['phno'];
        $gender     = $_POST['gender'];
        $avatar     = "";
        $activation = "0";
        $pwd        = generatePWD(8);
        $id         = generateID(8,$link);
        $logintype  = "user";


        $sql = $link->prepare("SELECT * FROM `users` WHERE `email`=? AND `phno`=?");
        $sql->bind_param("ss",$lemail,$phno);
        $sql->execute();
  
        $result = $sql->get_result();
        if($result->num_rows < 1 ){
            $sql = $link->prepare("INSERT INTO `users`(`f_name`,`l_name`,`email`,`identity_no`,`phno`,`password`,`gender`,`avatar`,`logintype`,`activation`) VALUES(?,?,?,?,?,?,?,?,?,?)");
            $sql->bind_param("ssssssssss",$fname,$lname,$email,$id,$phno,$pwd,$gender,$avatar,$logintype,$activation);
            $sql->execute();
            echo $sql->affected_rows ;
            if($sql->affected_rows === 1){
                $sql = $link->prepare("SELECT * FROM `users` WHERE `email`=?");
                $sql->bind_param("s",$lemail);
                $sql->execute();
                $result = $sql->get_result();
                if($result->num_rows >0){
                    while($data = $result->fetch_assoc()){
                        $id = $data['identity_no'];
                    }
                }
                $subject  = "Account Activation / Password reset.";
                $headers  = "MIME-Version: 1.0\r\n";
                $headers .= "From:support@purplthings.com \r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                $msg = $emailheader."
                            Hi $fname $lname,<br><br>
                            Thank you for registering with us.<br><br>
                            Account Details:-<br>
                            Account Username : $email<br>
                            Account Identity : $id <br><br>
                            Activation Link -> <a href='https://purplthings.com/forgotpwd.php?id=$id' class='btn btn-primary'>Activate</a>
                        ".$emailfooter;
                if(mail($email,$subject,$msg,$headers)){
                    $_SESSION['activate'] = TRUE;
                    header('location:index.php');
                }
            }else{
                $_SESSION['insert_err']=TRUE;
                header('location:index.php');
            }
        }else{
            header("location:index.php?msg=Email or Mobile number Already exists!");
        }
  
      }

    //Contact us
    if(isset($_POST['contactus'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "From : $email \r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        if(mail("support@purplthings.com",$subject,$msg,$headers)){
            $_SESSION['contact'] = TRUE;
            header('location:index.php');
        }
    }

    //forgot or activation mail
    if(isset($_POST['activate'])){
        $email = $_POST['email'];

        $sql = $link->prepare("SELECT * FROM `users` WHERE email=?");
        $sql->bind_param("s",$email);
        $sql->execute();

        $result = $sql->get_result();
        if($result->num_rows>0){
            while($data = $result->fetch_assoc()){
                $id = $data['identity_no'];
                $fname = $data['f_name'];
                $lname = $data['l_name'];
            }
            $subject  = "Account Activation / Password reset.";
            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "From:support@purplthings.com \r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $msg = $emailheader."
                        Hi $fname $lname,<br><br>
                        Thank you for registering with us.<br><br>
                        Account Details:-<br>
                        Account Username : $email<br>
                        Account Identity : $id <br><br>
                        Activation Link -> <a href='https://purplthings.com/forgotpwd.php?id=$id' class='btn btn-primary'>Activate</a>
                    ".$emailfooter;
            if(mail($email,$subject,$msg,$headers)){
                $_SESSION['activate'] = TRUE;
                header('location:index.php');
            }
        }else{
            header("location:index.php?msg=Email or Password incorrect!");
        }
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

    function generateID($length,$link){
        $chars = "1234567890";
        $code = "";
        $clean = strlen($chars)-1;
        while(strlen($code)<$length){
            $code .= $chars[mt_rand(0,$clean)];
        }
        $sql = $link->prepare("SELECT * FROM `users` WHERE identity_no=?");
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