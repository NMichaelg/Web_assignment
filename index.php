<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login and Register</title>
    <style>
      <?php include "style.css" ?>
    </style>    
  <script src="script.js" defer></script>
  </head>
  <body>
    <!-- Container -->
    <nav id="header-bar">
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
          href="?page=views_cvs"
        >
          View CVs
        </a>
        <a
          href="?page=contact_us"
        >
          Contact Us
        </a>
      </div>
    </nav>
    <div id="main-content">
      <?php include 'controllers/RouteController.php'; ?>
    </div>
  </body>
</html>
