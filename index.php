<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login and Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      <?php include "style.css" ?>
    </style>    

  </head>
  <body>
    
    <header class="bg-dark text-white p-3 position-fixed ">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <img src="https://static.vecteezy.com/system/resources/previews/000/642/323/non_2x/search-job-icon-vector.jpg" alt="Site Logo" class="me-2 logo">
          <h1 class="h3 mb-0">Job Seeker</h1>
        </div>
        <nav>
          <ul class="nav" id="navBarItem">
            <li class="nav-item"><a href="index.php?page=home" class="nav-link text-white">Home</a></li>
            <li class="nav-item"><a href="index.php?page=views_cv" class="nav-link text-white">View CV</a></li>
            <li class="nav-item"><a href="index.php?page=fill_form" class="nav-link text-white">Make new CV</a></li>
            <li class="nav-item"><a href="index.php?page=contact_us" class="nav-link text-white">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <br></br>
    <br></br>
    <br></br>
    <!-- Container -->
    <!-- <nav id="header-bar">
      <div class="header-nav">
        <img
        id="logo"
        src="https://static.vecteezy.com/system/resources/previews/000/642/323/non_2x/search-job-icon-vector.jpg"
        alt="Logo"
        style="width: 100px; height: auto;"
        />
        <a
          href="?page=home"
        >
          Home
        </a>
        <a
          href="?page=views_cv"
        >
          View CV
        </a>
        <a
          href="?page=contact_us"
        >
          Contact Us
        </a>
        <a
          href="?page=fill_form"
        >
          Make new CV
         </a>
        <a 
          href="?page=see all "
        >

      </a>
      </div>
    </nav> -->
    <div id="main-content" class =" container mt-5 bg-white p-5 rounded-5">
      <?php include 'controllers/RouteController.php'; ?>
    </div>
    
    <footer class="bg-dark text-white text-center p-3 mt-5">
      <div class="container">
        <p>&copy; 2024 Group 1. All rights reserved.</p>
        <a href="#" class="text-white">Privacy Policy</a> |
        <a href="#" class="text-white">Terms of Service</a>
      </div>
    </footer>

  </body>
</html>