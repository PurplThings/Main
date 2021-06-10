<?php

    include "../Asset/util/config.php";

    if(isset($_POST['blogpost'])){
        $title = mysqli_real_escape_string($link,$_POST['title']);
        $description = mysqli_real_escape_string($link,$_POST['description']);

        
    }


?>