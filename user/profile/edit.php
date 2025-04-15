<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/font-awasome/css/all.css">
    <link rel="stylesheet" href="../../assets/css/boostrap/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/base.css">
    <link rel="stylesheet" href="../../assets/css/profile_page.css">
    <title>Profile Page </title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light  nav fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/index.html"><img src="/assets/images/icons/logo.png" alt="logo"
                    width="200"></a>
            <!-- sidebar insidebtn -->
            <button class="btn  d-lg-none d-block  Bars" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="fa fa-bars text-light "></i>
            </button>
            <!-- sidebar insidebtn -->

        </div>
    </nav>
    <!-- nav -->
    <!-- loader animation -->
    <div class="loader bg-light">
        <i class="fa fa-spinner spinner "> </i>

    </div>
    <!-- loader animination -->
    <div class="container-fluid ">
        <!-- first-row margin top -->
        <div class="row  first_row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-3  mt-5">

                        <!-- inside bar -->

                        <div class="offcanvas offcanvas-start mb-3" data-bs-scroll="true" data-bs-backdrop="true"
                            tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <a
                                        class="navbar-brand text-light" href="/index.html"><img
                                            src="/assets/images/icons/logo.png" alt="logo" width="60%"></a>
                                </h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mx-5">
                                    <a href="/index.html" class="text-decoration-none text-dark">
                                        <div>
                                            <i class="fa fa-home mx-3 fw-bold"></i>Home
                                        </div>
                                    </a>

                                    <div class="dropdown mt-3">
                                        <button class="btn dropdown-toggle sidebar-drop fw-bold" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown">
                                            Account Settings
                                        </button>
                                        <ul class="dropdown-menu sidebar-drop-ul " aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Profile
                                                    Page</a></li>
                                            <li><a class="dropdown-item" href="#">LogOut</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- inside bar  -->

                        <!-- outsidesidebar -->
                        <div class="sidecontrol mx-5 d-none d-lg-block mt-3 fw-bold position-fixed ">
                            <a href="/index.html" class="text-decoration-none text-dark">
                                <div>
                                    <i class="fa fa-home mx-3 fw-bold"></i>Home
                                </div>
                            </a>
                            <!-- dropdown -->
                            <div class="dropdown mt-2">
                                <button class="btn dropdown-toggle text-dark fw-bold sidebar-drop" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-cog mx-1"></i> Account
                                    Settings
                                </button>

                                <ul class="dropdown-menu sidebar-drop-ul border-0"
                                    aria-labelledby="dropdownMenuButton1">
                                    <li class="border-bottom"><a class="dropdown-item text-dark  " href="#">Profile
                                            Page</a></li>

                                    <li><a class="dropdown-item text-dark " href="#">LogOut</a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- main -->
                    <div class="col-9  scroll-main mt-5 shadow">
                        <div class="row">

                            <div class=" col-lg-5 col-md-4 col-sm-12  mt-5 mb-5">
                                <div class="card  mb-3 border-0 child1">
                                    <div class="card-header text-danger fw-bold">Please
                                        upload Photo</div>
                                    <div class="card-body text-dark">
                                        <h5 class="card-title text-danger fw-bold"></h5>
                                        <p class="card-text"> upload a photo
                                            in the
                                            fields provided</p>
                                        <img width="500" src=" " alt="No ID found">
                                        <form action=" " method="post" enctype="multipart/form-data">
                                            <input type="hidden" name=" " value autocomplete="off">
                                            <div class="custom-file col-sm-12">
                                                <input id="my-input" class=" mb-2" type="file" name="photo_front">
                                            </div>
                                            <button type="submit" class="btn btn-sm edit-pro  ">Upload
                                                photo</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-4 col-sm-12 mt-5  mb-5">

                                <div class="card  mb-3 border-0 child2 ">
                                    <div class="card-header">Personal
                                        Account Details</div>
                                    <div class="card-body text-primary">
                                        <div class="mt-4">
                                            <div class>
                                                <div class="upper text-dark opacity-50">Account
                                                    holder</div>
                                                <div class="text-dark  ">
                                                    First name
                                                    Last name
                                                </div>
                                            </div>
                                            <div class>
                                                <div class="text-dark opacity-50">Department</div>
                                                <div class="text-dark ">default</div>
                                            </div>
                                        </div>
                                        <div class=" mt-2">
                                            <div>
                                                <div class="text-dark opacity-50">Matric
                                                    Number</div>
                                                <div class="cap text-dark">default</div>
                                            </div>
                                            <div>
                                                <div class=" text-dark opacity-50">Level</div>
                                                <div class="cap text-dark">
                                                    default
                                                </div>
                                                <div class=" text-dark opacity-50">Email</div>
                                                <div class="cap text-dark">
                                                    default
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <footer class="main-footer ">
                            <div class="pull-left d-none d-sm-inline-block">
                                <ul
                                    class=" nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                                    <li class="nav-item">
                                        <a class="nav-link" href>Contact US:
                                            megamindsetsolution.com
                                            Phone: <i class="fab fa-whatsapp  whatsap p-1"></i>
                                            +234 8069208957</a>
                                    </li>
                                </ul>
                            </div>
                            &copy; mega mindset 2025. All Rights Reserved.
                        </footer>
                    </div>
                </div>

            </div>
        </div>

        <script src="/assets/js/bootstrap.bundle.js"></script>
</body>

</html>