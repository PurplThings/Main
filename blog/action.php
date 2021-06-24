<?php

    include './Asset/util/config.php';
    error_reporting(1);

    if(isset($_POST['getPosts'])){
        $sql= $link->prepare('SELECT * FROM posts ORDER BY id DESC LIMIT 5');
        $sql->execute();

        $result = $sql->get_result();
        if($result->num_rows >0){
            while($data = $result->fetch_assoc()){
                $date = date("d-M-Y | h:i A",strtotime($data['date_post']));
                $hlink = "https://blog.purplthings.com/blog_post.php?id=".$data['post_id'];

                echo "<div class='shadow-lg p-4' style='margin-bottom:15px;'>
                <div class='header'>
                    <h5 class='heading float-start'>".$data['title']."</h5>
                    <div class='float-end time'>".$date."</div>
                </div><br>
                <div class='image'>";

                if($data['img']!="") echo "<img src='https://purplthings.com//Asset/images/uploads/blog_images/".$data['img']."' class='w-100'>";else echo "";
            
                echo "</div><br>
                <div class='description'>
                    <div class='dtext'>".$data['description']."</div>
                </div><br>
                <div class='cardfooter'>
                    <div class='row'>
                        <div class='col-sm-2 hearticon'>
                            <div class='likes'><i class='far fa-heart text-purple' onclick='updatelike()'></i> </div>
                        </div>
                        <div class='col-sm-1 likescount'>
                            <p id='likescount'>".$data['likes']."</p>
                        </div>
                        <div class='col-sm-6 social-icons'>
                            <ul>
                                <li><a href='https://www.facebook.com/sharer/sharer.php?u=$hlink' target='_blank'><i class='fab fa-facebook-f'></i></a></li>
                                <li><a href='#'><i class='fab fa-instagram'></i></a></li>
                                <li><a href='#'><i class='fab fa-linkedin-in'></i></a></li>
                                <li><a href='https://t.me/joinchat/bcDcl_dXXWc2NGY1'><i class='fab fa-telegram-plane'></i></a></li>
                                <li><a href='whatsapp://send?text=$hlink'><i class='fab fa-whatsapp'></i></a></li>
                            </ul>
                        </div>
                        <div class='col-sm-3' id='readmore'>
                            <a href='$hlink' class='btn btn-outline-purple float-end'>Read More..</a>
                        </div>
                    </div>
                </div>
            </div>";
            }
        }
    }

?>