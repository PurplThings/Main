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
        
    </style>
</head>
<body class="scrollbar">
    <!-- User Navigation Bar -->
    <?php require 'util/adminnavbar.php'; ?>
    <!-- End User Navigation Bar -->

    <br><br>
    <div class="container shadow-lg p-4 w-25">
        
    </div>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <?php include_once "../Asset/util/footer.php"; ?>
</body>
</html>

<script>
    getForm();
    function getForm(){
        var id = <?php echo $_SESSION['id'];?>;
        $.ajax({
            url:"action.php",
            method:"post",
            data:{getProfileForm:1,id:id},
            success:function(data){
                $(".container").html(data);
            }
        })
    }
</script>