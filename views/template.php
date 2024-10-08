<?php

  session_start();

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Inventory System</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="views/img/template/icono-negro.png">

  <!-- CSS Plugins -->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins. -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Javascript Plugins -->

  <!-- jQuery 3 -->
  <script src="views/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="views/bower_components/fastclick/lib/fastclick.js"></script>

  <!-- AdminLTE App -->
  <script src="views/dist/js/adminlte.min.js"></script>

</head>

<!-- Document body -->
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

<!-- Site wrapper -->


  <?php

    if (isset($_SESSION["sessionInit"]) && $_SESSION["sessionInit"] == "ok") {

      echo '<div class="wrapper">';

      // Header
      include "modules/header.php";

      // Menu
      include "modules/menu.php";

      // Home

      if (isset($_GET["route"])) {

        if ($_GET["route"] == "home" ||
            $_GET["route"] == "products" ||
            $_GET["route"] == "categories" ||
            $_GET["route"] == "users" ||
            $_GET["route"] == "customers" ||
            $_GET["route"] == "sales" ||
            $_GET["route"] == "sales-create" ||
            $_GET["route"] == "reports" ||
            $_GET["route"] == "exit") {

          include "modules/".$_GET["route"].".php";

        } else {

          include "modules/404.php";

        }

      } else {

        include "modules/home.php";

      }

      // Footer
      include "modules/footer.php";

      echo '</div>';

    } else {

      include "modules/login.php";

    }

  ?>

<script src="views/js/template.js"></script>

</body>
</html>
