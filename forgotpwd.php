<?php
    include_once './Asset/util/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <?php require_once 'Asset/util/index_require.php'; ?>
</head>
<body>
    <div class="shadow" style="width: 30%;margin: 10% auto;">
        <form action="" method="post" style="padding: 5%;">
            <?php if(isset($_GET['id'])){ ?>
            <h5 class="text-center">Forgot Password / Activate Account</h5><br>
            <input class="form-control" type="password" id="npass" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g" name="npass" placeholder="New Password" required><br>
            <input class="form-control" type="password" id="cpass" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g" name="cpass" placeholder="Confirm Password" required><br>
            <input class="btn w-100" id="button" type="submit" name="submit" value="SUBMIT" style="color:#fff;background-color:purple;"><br>
            <?php }else{ echo "<h5 class='text-center text-danger'>Invalid Activation Link!</h5>";} ?>
        </form>
    </div>
</body>
</html>
<?php

    if(isset($_POST['submit'])){
        $npass = $_POST['npass'];
        $cpass = $_POST['cpass'];
        $activation = "1";

        $id    = $_GET['id'];

        if($npass == $cpass){
            $sql = $link->prepare("UPDATE `users` SET `password`=?,`activation`=? WHERE `identity_no`=?");
            $sql->bind_param("sss",$cpass,$activation,$id);
            if($sql->execute()){
                session_start();
                $_SESSION['pwd'] = TRUE;
                header('location:index.php');
            }else{
                $_SESSION['insert_err'] = TRUE;
                header('location:index.php');
            }
        }else{
            echo "<script>alert('Password Mismatch!');</script>";
        }
    }

?>