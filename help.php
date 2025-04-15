<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Attendance Help Management</title>
  <!-- bootstrap-link -->
  <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css">
  <script src="assets/js/bootstrap.js"></script>

    <!--css-style -->
    <link rel="stylesheet" href="assets/css/help.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/base.css">

      <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/font-awasome/css/all.css">
  <!-- css -->
  <!-- <link rel="stylesheet" href="assets/css/homepage.css"> -->
  


</head>
<body>
 <!-- Navigation -->
  <?php include "./inc/navbar.php"?>
  <!-- Hero Section -->
  <section class="hero primary-bg-color mt-5">
    <div class="container">
      <h1>Attendance Help Management System</h1>
      <p>Having issues with your attendance? Submit a request and get help fast!</p>
    </div>
  </section>

  <!-- Submit Ticket Section -->
  <section id="submit" class="py-5">
    <div class="container">
      <h2 class="section-title text-center primary-color">Submit Attendance Issue</h2>
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="card p-4">
            <form>
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter your full name" required />
              </div>
              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email" required />
              </div>
              <div class="mb-3">
                <label class="form-label">Student/Staff ID</label>
                <input type="text" class="form-control" placeholder="Enter your ID" required />
              </div>
              <div class="mb-3">
                <label class="form-label">Issue Type</label>
                <select class="form-select" required>
                  <option value="">Select Issue</option>
                  <option value="missing">Missing Attendance</option>
                  <option value="incorrect">Incorrect Marking</option>
                  <option value="other">Other</option>
                </select>
              </div>

              

              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="4" placeholder="Describe your issue" required></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="primary-bg-color" id="submit-btn">Submit Ticket</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="bg-light py-5">
    <div class="container">
      <h2 class="section-title text-center primary-color">Frequently Asked Questions</h2>
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
              How long does it take to resolve a ticket?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body">We aim to resolve issues within 2–3 business days.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
              Can I update my ticket after submission?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body">Please contact support to request any updates to your ticket.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

 

  <!-- Footer -->
  <?php include "./inc/footer.php" ?>

 
  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.js"></script>
</body>
</html>
