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
     <link rel="stylesheet" href="assets/css/admin.css">
     <link rel="stylesheet" href="assets/css/base.css">
    <title>Admin-dashboard</title>
</head>
<body>
    <!-- Navigation -->
    <?php include "./inc/navbar.php" ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <nav class="sidebar primary-color">
                    <div class="p-3 border-bottom">
                        <h4>School Portal</h4>
                      </div>
                      <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                          <i class="fas fa-home me-2"></i>Dashboard
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <i class="fas fa-users me-2"></i>Students
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <i class="fas fa-calendar-alt me-2"></i>Attendance
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <i class="fas fa-cog me-2"></i>Settings
                        </a>
                      </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="justify-content-between align-items-center mb-4 primary-color">
                    <h2>Student Attendance List</h2>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search..." />
                      <button class="btn btn-outline-secondary">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Student Card -->
                     <a href="/user/profile/view.html">
                      <div class="col-12">
                        <div class="student-card p-3">
                          <div class="d-flex align-items-center">
                            <div class="col-12 student-img bg-light d-flex align-items-center justify-content-center me-3">
                              <i class="fas fa-user text-muted"></i>
                            </div>
                            <div class="flex-grow-1">
                              <h5 class="mb-1">John Doe</h5>
                              <div class="d-flex flex-wrap align-items-center student-info">
                                <span class="text-light me-3">Matric Number:</span>
                                <span class="text-light me-3">Department:</span>
                                <span class="text-light me-3">Level:</span>
                                <span class="text-light me-3">
                                  <i class="fas fa-calendar-day me-1"></i>
                                  <input type="date">
                                </span>
                                <span class="badge bg-success">Present</span>
                              </div>
                            </div>
                            <button class="btn btn-danger btn-sm">
                              <i class="fas fa-trash"></i>
                              <span class="d-none d-md-inline">Delete</span>
                            </button>
                          </div>
                        </div>
                      </div>
                     </a>

                     <a href="/user/profile/view.html">
                      <div class="col-12">
                        <div class="student-card p-3">
                          <div class="d-flex align-items-center">
                            <div class="col-12 student-img bg-light d-flex align-items-center justify-content-center me-3">
                              <i class="fas fa-user text-muted"></i>
                            </div>
                            <div class="flex-grow-1">
                              <h5 class="mb-1">Jane Smith</h5>
                              <div class="d-flex flex-wrap align-items-center student-info">
                                <span class="text-light me-3">Matric Number:</span>
                                <span class="text-light me-3">Department:</span>
                                <span class="text-light me-3">Level:</span>
                                <span class="text-light me-3">
                                  <i class="fas fa-calendar-day me-1"></i>
                                  <input type="date">
                                </span>
                                <span class="badge bg-danger">Absent</span>
                              </div>
                            </div>
                            <button class="btn btn-danger btn-sm">
                              <i class="fas fa-trash"></i>
                              <span class="d-none d-md-inline">Delete</span>
                            </button>
                          </div>
                        </div>
                      </div>
                     </a>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>