<?php
    if($_SERVER['HTTP_HOST']!='purplthings.com'){
        //localhostkey
        $link = mysqli_connect("localhost","root","","purple_things") or die("Database Connection Error!");
    }else{
        //Portal key
        $link = mysqli_connect("localhost","u854027864_purplthings","KKss77@@","u854027864_purplthings") or die("Database Connection Error!");

    }

    $emailheader = "
    <!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <style>
       .email{border:1px solid purple;border-width:1px 1px;border-radius:8%;margin:auto;}
    </style>
    <style type='text/css'>
        @media only screen and (min-width:600px){
                .email{
                    width: 40%;
                }
            }
        @media only screen and (max-width:600px){
            .email{
                width: 70%;
            }
        }
    </style>
  </head>
  <body>
    <div class='email shadow-lg'>
      <div style='text-align:center;color:purple;'>
        <h2>PURPL THINGS</h2>
      </div>
      <div class='container' style='margin-left:10%;width:80%;'>
        <hr>
    ";
    
    $emailfooter = "
            <hr>
      </div>
      <div style='text-align:center;color:purple;'>
        <p>&copy;Purpl Things, Contact us : support@purplthings.com</p>
      </div>
    </div>
  </body>
</html>
    ";
?>