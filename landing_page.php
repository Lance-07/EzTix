<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('./db_connect.php');
ob_start();
// if(!isset($_SESSION['system'])){

$system = $conn->query("SELECT * FROM system_settings")->fetch_array();
foreach ($system as $k => $v) {
  $_SESSION['system'][$k] = $v;
}
// }
ob_end_flush();

include 'header.php';
?>

<head>
  <style>
    #lp_nav {
      background-color: rgb(2, 59, 109);
    }
  </style>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" id="lp_nav">
    <div class="container-lg">
      <a class="navbar-brand" href="#">EzTix</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- hero -->
  <div class="container mt-5">
    <div class="jumbotron text-center">
      <h1 class="display-4">Welcome to EzTix!</h1>
      <p class="lead">Efficiently manage your tasks and issues with our easy-to-use ticketing system.</p>
      <hr class="my-4">
      <p>This system allows you to create, track, and manage tickets for various tasks and projects.</p>
      <a class="btn btn-primary btn-lg" href="login.php" role="button">Get Started</a>
    </div>
  </div>

  <!-- features -->
  <section id="features">
    <div class="container-lg my-5 text-center-sm">
      <h2 class="text-center my-5 fw-bold">Why Choose Our Ticketing System?</h2>
      <div class="row">
        <div class="col-md-6">
          <i class="fas fa-chart-line fa-5x text-primary"></i>
          <h3>Track Progress & Stay Ahead</h3>
          <p class="lead">Visualize project and task progress in real-time, identify bottlenecks, and make data-driven decisions for maximum efficiency.</p>
        </div>
        <div class="col-md-6">
          <i class="fas fa-users fa-5x text-primary"></i>
          <h3>Effortless Team Collaboration</h3>
          <p class="lead">Assign tasks, share files, and communicate seamlessly with your team. Foster collaboration and ownership for a productive work environment.</p>
        </div>
      </div>

      <div class="row mt-5 bg-light rounded p-4">
        <div class="col-md-12 text-center">
          <i class="fas fa-rocket fa-3x text-primary"></i>
          <h3>Launch Successful Projects, Every Time</h3>
        </div>
        <div class="col-md-12 mt-3">
          <p class="lead text-center">Plan, assign, and track tasks, milestones, and resources with ease. Achieve project goals on time and within budget.</p>
          <ul class="list-unstyled text-center">
            <li><i class="fas fa-check-circle text-primary"></i> Automated Reports & Insights</li>
            <li><i class="fas fa-users-cog text-primary"></i> Team-based Project Management</li>
            <li><i class="fas fa-file-pdf text-primary"></i> Printable Project Lists & Reports</li>
          </ul>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-6">
          <img src="./assets/devs/System_SS.png" alt="Screenshot of the system interface" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-6">
          <h3>Say Goodbye to Complexity</h3>
          <p class="lead">Our user-friendly interface makes project and task management a breeze. Navigate easily, find what you need quickly, and get things done.</p>
          <ul class="list-unstyled">
            <li><i class="fas fa-desktop text-primary"></i> Clean and Clutter-free Design</li>
            <li><i class="fas fa-search text-primary"></i> Powerful Search and Filter Options</li>
            <li><i class="fas fa-mobile-alt text-primary"></i> Responsive Design for Mobile Devices</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-lg my-5">
      <h2 class="text-center mb-4">Meet the Minds Behind the Magic</h2>
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <img src="./assets/devs/me.jpg" alt="Team member 1 image" class="img-fluid rounded-circle mx-auto d-block shadow-sm" style="width: 150px; height: 150px;">
          <h4 class="text-center mt-3">Lance Samuel Ballesteros</h4>
          <p class="text-center text-muted">Lead Developer</p>
          <!-- <a href="#" class="btn btn-primary btn-sm mt-2">Connect</a> -->
        </div>
        <div class="col mb-4">
          <img src="./assets/devs/adrian.jpg" alt="Team member 2 image" class="img-fluid rounded-circle mx-auto d-block shadow-sm" style="width: 150px; height: 150px;">
          <h4 class="text-center mt-3">Adrian Alcobendas</h4>
          <p class="text-center text-muted">Front-End Developer</p>
          <!-- <a href="#" class="btn btn-primary btn-sm mt-2">Connect</a> -->
        </div>
        <div class="col mb-4">
          <img src="./assets/devs/marcus.jpg" alt="Team member 3 image" class="img-fluid rounded-circle mx-auto d-block shadow-sm" style="width: 150px; height: 150px;">
          <h4 class="text-center mt-3">Marcus James Tapang</h4>
          <p class="text-center text-muted">Back-End Developer</p>
          <!-- <a href="#" class="btn btn-primary btn-sm mt-2">Connect</a> -->
        </div>
      </div>
    </div>
  </section>

  <footer class="text-center py-3 bg-dark text-white">
    &copy; 2023 <a href="#">EzTix</a>
  </footer>

</body>

</html>