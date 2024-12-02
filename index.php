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
    </nav>
    <div id="main-content" class =" container mt-5 bg-white p-5 rounded-5">
      <?php include 'controllers/RouteController.php'; ?>
    </div>
  </body>
</html>
