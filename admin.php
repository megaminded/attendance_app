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
  <title>Admin-dashboard</title>
</head>

<body>
  <!-- Navigation -->
  <?php include "./inc/adminNavbar.php"; ?>
  <!-- admin nav -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 ">
        <!-- outsidebar attendance -->
        <div class="col-lg-3 ">
          <div
            class="nav-list portal-hold mx-5 mt-5 d-none d-lg-block position-fixed">
            <div class="p-3 border-bottom mt-5">
              <h4 class="fw-bold">School Portal</h4>
            </div>

            <div class="list-group list-group-flush ">
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

      </div>
      <!-- main -->
      <div class="col-lg-9 scroll-main mt-5 ">

        <div class="card border-0 mb-3 main-bg mt-5">

          <!-- media screen -->
          <div class="card-header fw-bold text-light">Student
            Attendance
            List</div>
          <div class="card-body text-primary ">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <div class="list-group d-lg-none ">
              <a href="adminRecord.php"
                class="list-group-item list-group-item-action flex-column align-items-start main-bg text-light ">
                <div
                  class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">buharilife01
                  </h5>
                  <small>
                    <button
                      class="btn  btn-sm me-3 mt-4 ">
                      <i
                        class="fa fa-pen fa-2x circleUED"></i></button>

                  </small>

                </div>
                <p class="mb-1">Email:
                  buhari@gmail.com</p>
                <small>Registered: 12th April
                  2025</small>

              </a>

            </div>


            <!-- media screen  -->
            <div class="d-none d-lg-block">
              <table class="tableColo text-light"
                id="dataTable"
                width="100%"
                cellspacing="0">
                <thead class="border-bottom">
                  <tr>
                    <th width="30%">Name</th>
                    <th width="20%">Email</th>
                    <th width="10%">Start
                      Date</th>
                    <th width="10%">End
                      Date</th>
                    <th
                      width="15%">Submit</th>
                    <th
                      width="15%">Edit</th>
                    <th
                      width="20%">Delete</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>
                      <a
                        href="adminRecord.php"
                        class="list-group-item-action nameHover text-decoration-none text-light"><br>
                        <i
                          class="fa fa-user text-muted me-2 circleUED"></i>
                        Buharilife01</a>
                    </td>
                    <td><strong
                        class><br>
                        buhari@gmail.com</strong></td>
                    <td>
                      <strong
                        class="text-light me-3">
                        <br>
                        <input type="date">
                      </strong>
                    </td>
                    <td>
                      <strong
                        class="text-light me-3">
                        <br>

                        <input type="date">
                      </strong>
                    </td>
                    <td> <button
                        class="btn btn-light btn-sm me-3 mt-3">Submit</button>
                    </td>
                    <td><br>
                      <i
                        class="fa fa-pen  fa-1x circleUED"></i>
                    </td>
                    <td><br>
                      <i
                        class="fa fa-trash text-danger fa-1x circleUED "></i>
                    </td>
                  </tr>

                </tbody>
                <tfoot class="border-top">

                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Submit</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
        <!-- adminfooter -->

        <?php include "./inc/adminfooter.php"; ?>
        <!-- ad,infooter -->
      </div>
      <!-- main -->
    </div>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>