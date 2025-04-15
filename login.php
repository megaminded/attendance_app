<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/registration.css">
    <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css.map">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="assets/css/font-awasome/css/all.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Login</title>
</head>
<body>
        <!-- Navigation -->
        <?php include "./inc/navbar.php" ?>
    <!-- loader  -->
      <div class="loader bg-light">
  <i class="fa fa-spinner spinner "></i>

</div>


    <!-- loader -->

    <div class="container auth-section">
        <div class="row">
            <div class="col-sm-12 col-lg-6 left-side">
                
                <div class="reg-form">
                    <h1>Login</h1>

                    <!-- warning message here -->
                    <div class="alert  d-none" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <form action="#" onsubmit="handleLogin(event)" enctype="multipart/form-data">
                        <div class="row m-3">
                            <div class="mb-5 col-12 ">
                                <input type="text" class="form-control w-75 mx-auto h-100" id="matric" name="matric" placeholder="Matric number">
                                <div id="matricWarning" class="warning-message text-danger"></div>
                            </div>
                            <div class="mb-3 col-12">
                                <input type="password" class="form-control w-75 mx-auto" id="password" name="password" placeholder="Password">
                                <div id="passwordWarning" class="warning-message text-danger  "></div>
                            </div>
                        </div>
                        <div class="row col-12 justify-content-center">
                            <button class="btn primary-bg-color text-white w-25" > Submit</button>
                        </div>
                        <div class="row">
                            <p class="col-12">Don't have an account? <a href="./registration.php">Register here</a></p>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-6 right-side">

            </div>
        </div>
    </div>
    
    <?php include "./inc/footer.php" ?>
    <script src="./assets/js/bootstrap.bundle.js"></script>
    <script src="./assets/js/bootstrap.bundle.js.map"></script>
    <script src="./assets/js/custom.js"></script>
</body>
</html>