<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error </title>

    <!-- Boostrap -->
    <link rel="stylesheet" href="/views/assets/css/boostrap/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/views/assets/css/font-awasome/css/all.css">
    <!-- css -->
    <link rel="stylesheet" href="/views/assets/css/home.css">

    <style>
        .Container-err04{
            background-color: #D1D1D1;
        }
    </style>

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand text-light" href="<?= route_url("attendance","home")?>"><img src="/views/assets/images/icons/logo.png" alt="logo" width="200px"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="<?= route_url("attendance","home")?>" aria-current="page">
                            <i class="fa fa-home" aria-hidden="true"></i>HOME
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= route_url("attendance","about")?>">ABOUT US</a>
                    </li>
                </ul>
            
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= route_url("attendance","login")?>">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            LOGIN
                        </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link text-light" href="<?= route_url("attendance","registration")?>">REGISTER</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container-fluid d-flex h-50 justify-content-center" style="position: absolute; top: 10rem;">
        <div class="row w-75 h-100 d-flex justify-content-center">
            <div class="col-md-6 Container-err04 d-flex justify-content-center align-items-center">
                <!-- <div class="Container-err04">
                    <h1>404</h1>
                </div> -->
                <div class="row  w-100 h-50 d-flex justify-content-center">
                    <div class="col-12">
                       <div class="row">
                            <div class="col d-flex justify-content-center">
                                <span class="fs-1">404</span><br>
                            </div>
                       </div>
                       <div class="row">
                            <div class="col d-flex justify-content-center">
                                <span class="">This page is not found</span><br>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</body>
<script src="/views/assets/js/bootstrap.js"></script>
</html>