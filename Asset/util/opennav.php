<?php 
        if(isset($_SESSION['email_exists'])){
            echo "
                        <div class='alert alert-warning alert-dismissible fade show' role='alert' style='z-index:1100;position:absolute;width:100%;'>
                        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Warning:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                        Email Already Exists!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
            ";
            $_SESSION['email_exists'] = NULL;
        }
        if(isset($_SESSION['insert_err'])){
            echo "
                        <div class='alert alert-danger alert-dismissible fade show' role='alert' style='z-index:1100;position:absolute;width:100%;'>
                        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                        Error While inserting your details!
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
            ";
            $_SESSION['insert_err'] = NULL;
        }
        if(isset($_SESSION['contact'])){
            echo "
                        <div class='alert alert-success alert-dismissible fade show' role='alert' style='z-index:1100;position:absolute;width:100%;'>
                        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#check-circle-fill'/></svg>
                        Thanks for contacting us, we will reach out you soon!
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
            ";
            $_SESSION['contact'] = NULL;
        }
        if(isset($_SESSION['invalid_grant'])){
          echo "
                      <div class='alert alert-danger alert-dismissible fade show' role='alert' style='z-index:1100;position:absolute;width:100%;'>
                      <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                      Thanks for contacting us, we will reach out you soon!
                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>
          ";
          $_SESSION['invalid_grant'] = NULL;
      }
        if(isset($e_msg)){
            echo "
                        <div class='alert alert-danger alert-dismissible fade show' role='alert' style='z-index:1100;position:absolute;width:100%;'>
                        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                        $e_msg
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
            ";
            $e_msg= NULL;
        }
        if(isset($_SESSION['activate'])){
          echo "
                      <div class='alert alert-success alert-dismissible fade show' role='alert' style='z-index:1100;position:absolute;width:100%;'>
                      <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#check-circle-fill'/></svg>
                      Activation Mail successfully sent please check your inbox!
                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>
          ";
          $_SESSION['activate'] = NULL;
        }
        if(isset($_SESSION['pwd'])){
          echo "
                      <div class='alert alert-success alert-dismissible fade show' role='alert' style='z-index:1100;position:absolute;width:100%;'>
                      <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#check-circle-fill'/></svg>
                        Password Changed Successfully!
                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>
          ";
          $_SESSION['pwd'] = NULL;
        }
    ?>
    
    <!-- NAVIGATION BAR  -->

    <nav class="navbar shadow-lg sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand fw-bold" href="index.php" style="color: purple;"><img src='Asset/images/logo.png' width='25' height='25'> PurplThings</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item fw-bold">
                <a class="nav-link" href="index.php" style="color: purple;">HOME <i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link" href="https://research.purplthings.com/" target="_blank" style="color: purple;">RESEARCH <i class="fas fa-search"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link" href="index.php" style="color: purple;">IDEAS <i class="far fa-lightbulb"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link" href="https://blog.purplthings.com/" target="_blank" style="color: purple;">BLOG <i class="far fa-address-card"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModallg" style="color: purple;"> CONTACT US <i class="far fa-id-badge"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#LoginModalsm" style="color: purple;"> LOGIN <i class="far fa-user-circle"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#RegisterModalsm" style="color: purple;">REGISTER <i class="fas fa-user-plus"></i> </a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </nav>
    <!-- END NAVIGATION BAR -->

    <!-- Contact us Modal -->
<div class="modal fade" id="contactModallg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalLgLabel"><i class="fas fa-envelope text-purple"></i> Contact Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="action.php" method="POST">
          <input type="text" name="name" class="form-control" placeholder="Full Name" required><br>
          <input type="email" name="email" class="form-control" placeholder="Email" required><br>
          <input type="text" name="subject" class="form-control" placeholder="Subject" required><br>
          <textarea name="message" class="form-control" placeholder="Body of the message" cols="30" rows="5" required></textarea><br>
          <button type="submit" name="contactus" class="btn w-100" style="background-color: purple;color:#fff;"><i class="fas fa-envelope"></i> SEND</button><hr>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Contact us Modal -->

<!-- Login Modal -->
<div class="modal fade" id="LoginModalsm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalLgLabel"><i class="far fa-user-circle text-purple"></i> Account Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="action.php" method="POST">
            <?php echo $e_msg; ?>
            <input type="email" name="lemail" class="form-control" placeholder="Email" required><br>
            <input type="password" name="lpass" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g" class="form-control" placeholder="Password" required><br>
            <button type="submit" name="login" class="btn shadow-lg w-100" style="background-color: purple;color:#fff;">Login</button><hr>
          </form>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Forgot password ? / didn't get Activation mail ? Then click here...
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <form action="action.php" method="post">
                      <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <button type="submit" name="activate" class="btn" style="background-color: purple;color:#fff;">SEND</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <!-- <button onclick="window.location='<?php echo $loginurl;?>'" class="btn shadow-lg btn-outline-danger w-100"><i class="fab fa-google"></i> Login with Google</button><br><br> -->
            <!-- <button onclick="window.location='<?php echo $fblogin_url;?>'" class="btn shadow btn-outline-primary w-100"><i class="fab fa-facebook-square"></i> Login with Facebook</button> -->
      </div>
    </div>
  </div>
</div>
<!-- End Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="RegisterModalsm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalLgLabel"><i class="fas fa-user-plus text-purple"></i> Register Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="action.php" method="post">
            <div class="input-group">
              <input type="text" name="fname" class="form-control" placeholder="First Name" required>
              <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
            </div>
            <br>
            <input type="email" name="email" class="form-control" placeholder="Email" required><br>
            <input type="tel" name="phno" class="form-control" placeholder="Mobile Number" required><br>
            <select name="gender" class="form-control" required>
              <option class="form-control" value="male"><i class="fas fa-male"></i> Male</option>
              <option class="form-control" value="female"><i class="fas fa-female"></i> Female</option>
            </select><br>
            <button type="submit" name="register" class="btn w-100" style="background-color: purple;color:#fff;">Register</button>
          </form><hr>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Forgot password ? / didn't get Activation mail ? Then click here...
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <form action="action.php" method="post">
                    <div class="input-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required>
                      <button type="submit" name="activate" class="btn" style="background-color: purple;color:#fff;">SEND</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- <hr><button onclick="window.location='<?php echo $loginurl;?>'" class="btn shadow btn-outline-danger w-100"><i class="fab fa-google"></i> Register using Google</button><br><br> -->
          <!-- <button onclick="window.location='<?php echo $fblogin_url;?>'" class="btn shadow btn-outline-primary w-100"><i class="fab fa-facebook-square"></i> Login with Facebook</button> -->
      </div>
    </div>
  </div>
</div>
<!-- End Register Modal -->