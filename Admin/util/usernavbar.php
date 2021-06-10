<!-- NAVIGATION BAR  -->

    <nav class="navbar shadow-lg sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand fw-bold" href="index.php" style="color: purple;"><img src='../Asset/images/logo.png' width='25' height='25'>PURPLTHINGS</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item fw-bold">
                <a class="nav-link" href="home.php" style="color: purple;">HOME <i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link" href="blog.php" style="color: purple;">BLOG <i class="fas fa-search"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link" href="#" style="color: purple;">IDEAS <i class="far fa-lightbulb"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link" href="#aboutus" style="color: purple;">ABOUT <i class="far fa-address-card"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModallg" style="color: purple;"> CONTACT US <i class="far fa-id-badge"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#LoginModalsm" style="color: purple;"> PROFILE <i class="far fa-user-circle"></i></a>
            </li>
            <li class="nav-item fw-bold">
                <a class="nav-link active" href="../Asset/util/logout.php" style="color: purple;">LOGOUT <i class="fas fa-sign-out-alt"></i> </a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </nav>
    <!-- END NAVIGATION BAR -->

<?php

    if(isset($_SESSION['posted'])){
        echo "
                        <div class='alert alert-success alert-dismissible fade show' role='alert' style='z-index:1100;position:absolute;width:100%;'>
                        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#check-circle-fill'/></svg>
                        Your post successfully posted :)
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
            ";
        $_SESSION['posted'] = FALSE;
    }
?>