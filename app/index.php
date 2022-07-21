<!DOCTYPE html>
<html lang="en">
<?php
include('header.php');
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <?php
    include('preloader.php');
    ?>

    <!-- Navbar -->
    <?php
    include('navbar.php');
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php
      include('brandlogo.php');
      ?>

      <!-- Sidebar -->
      <?php
      include('sidebar.php');
      ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Dashboard header) -->
      <?php
      include('dashboardHeader.php');
      ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
      include('dataAset.php')
      ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php
    include('footer.php')
    ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

</body>

</html>