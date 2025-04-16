<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap -->
    <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css">
    <!-- Font awesome  -->
    <link rel="stylesheet" href="assets/css/font-awasome/css/all.css">
    <!-- CSS  -->
    <link rel="stylesheet" href="assets/css/adminStyle.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <title>Admin-Record</title>
</head>

<body>
    <!-- Navigation -->
    <?php include "./inc/adminNavbar.php"; ?>
    <!-- admin nav -->


    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12">
                <div class="row">
                    <!-- outsidebar -->
                    <div class="col-lg-3 ">
                        <div
                            class="nav-list portal-hold mx-5 mt-5 d-none d-lg-block position-fixed">
                            <div class="p-3 border-bottom">
                                <h4 class="fw-bold">School Portal</h4>
                            </div>

                            <div class="list-group list-group-flush">
                                <a href="#"
                                    class="list-group-item list-group-item-action">
                                    <i
                                        class="fas fa-home me-3"></i>Dashboard
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action">
                                    <i
                                        class="fas fa-users  me-3"></i>Students
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action">
                                    <i
                                        class="fas fa-calendar-alt  me-3"></i>Attendance
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action">
                                    <i class="fas fa-cog  me-3"></i>Settings
                                </a>
                            </div>

                        </div>

                    </div>
                    <!-- outsidesidebar attendance -->
                    <!-- main -->
                    <div class="col-lg-9 scroll-main  ">

                        <div class="card mt-3 mb-4">
                            <div class="card-header py-3">
                                <h6
                                    class="m-0 font-weight-bold text-primary">
                                    <i class="fa fa-user-circle fa-3x "
                                        aria-hidden="true"></i>
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-8">
                                        <h3> Buhari life</h3>

                                        <dl class="row">
                                            <dt class="col-sm-12">
                                                <!-- studetails -->
                                                <h4
                                                    class="text-success studetails">Student
                                                    details</h4>
                                                <!-- studetails -->
                                            </dt>
                                            <dt class="col-sm-4">User
                                                name:</dt>
                                            <dd class="col-sm-8"> Buhari
                                                Life</dd>
                                            <dt class="col-sm-4">Email:</dt>
                                            <dd
                                                class="col-sm-8">buhari@gmail.com</dd>
                                            <dt class="col-sm-4">Member
                                                since:</dt>

                                            <dd class="col-sm-8">11th
                                                April,2025</dd>
                                            <dt class="col-sm-4">Started
                                                Date:</dt>

                                            <dd class="col-sm-8">11th
                                                April,2025</dd>
                                            <dt class="col-sm-4">Ending
                                                Date:</dt>

                                            <dd class="col-sm-8">11th
                                                April,2025</dd>
                                            <dt
                                                class="col-sm-4">Department:</dt>
                                            <dd class="col-sm-8">f.c.t</dd>
                                            <dt class="col-sm-4">Matric
                                                Number:</dt>
                                            <dd class="col-sm-8">
                                                003246
                                            </dd>
                                            <dt class="col-sm-4">Level:</dt>
                                            <dd class="col-sm-8">233</dd>
                                            <dt class="col-sm-4"> User
                                                Password</dt>
                                            <dd class="col-sm-8">
                                                mega17889
                                            </dd>
                                            <hr>

                                            <dt class="col-sm-12">
                                                <!-- studentdetails color -->

                                                <h4
                                                    class="text-success studetails">Student
                                                    details</h4>
                                                <!-- studentdetails color -->
                                            </dt>
                                            <dt class="col-sm-4">Account
                                                state:</dt>
                                            <dd class="col-sm-8">
                                                <span
                                                    class="text-capitalize">
                                                    Active

                                            </dd>

                                            <dt class="col-sm-4">Member
                                                since:</dt>
                                            <dd class="col-sm-8">11th
                                                April,2025</dd>

                                        </dl>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <h5>Profile Image</h5>
                                        <img
                                            style="width: 100%; overflow:hidden;"
                                            src="./assets/images/defaultprofilePic.jpg"
                                            alt="No profile image uploaded">
                                        <h5>user profile</h5>

                                    </div>
                                </div>
                                <hr>
                                <button type="button"
                                    class="btn btn-primary btn-sm mt-5">
                                    EDIT PROFILE
                                </button>
                                <button type="button"
                                    class="btn btn-danger btn-sm mt-5">
                                    DELETE PROFILE
                                </button>

                            </div>

                           <!-- adminfooter -->
                            <?php include "./inc/adminfooter.php";?>
                            <!-- adminfooter -->
                        </div>
                        <!-- main attendance-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>