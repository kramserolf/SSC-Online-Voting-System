<?php 
  ob_start();
  include('../../dbcon.php');
  // include '../admin-login.php';
  // if (!isset($_SESSION['username'])) {
  //   header('location: ../');
  // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include ('../layouts/css.php'); ?>
  <link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css">
  <style type="text/css">
    footer {
      font-size: 0.9em;
    }
  </style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading border-bottom pb-md-5 pl-4 mt-2">SSC Online Voting</div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-home"></i>Dashboard</a>
        <a href="candidates.php" class="list-group-item list-group-item-action"><i class="fa fa-github-square"></i>Candidates</a>
        <a href="#" class="list-group-item list-group-item-action" data-toggle="dropdown" ><i class="fa fa-users"></i>Students</a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="cics.php" class="dropdown-item">BSIT / BLISS</a>
          <a href="educ.php" class="dropdown-item">BSED / BEED</a>
          <a href="bsba.php" class="dropdown-item">BSBA / ABEC</a>
          <a href="bssw.php" class="dropdown-item">BSSW / BSTM</a>
          <a href="crim.php" class="dropdown-item">BSCRIM</a>
        </div>
      </div>
      <footer class="fixed-bottom text-right">
      <span class="text-success">&copy;</span>Copyright 2020. Mark Flores.
      </footer>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <?php  
        include('navbar.php');
      ?>
      <div class="container-fluid">
        <!-- dashboard heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 mt-2">
            Dashboard
          </h1>
          <button class="btn btn-info btn-sm mb-0 mt-3"><i class="fa fa-print mr-1"></i>Print</button>
        </div>
        <!-- dashboard content -->
        <div class="row">
          <!-- candidates -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 py-2 card1">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-uppercase mb-1 text-primary">Candidates</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $candidates = mysqli_query($conn, "SELECT * FROM candidates");
                      $rows = mysqli_num_rows($candidates);
                      echo $rows; ?></div>
                  </div>
                  <div class="col-auto">
                   <i class="fa fa-github-square icons"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- total students -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 py-2 card2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-uppercase mb-1 text-success">Total Students</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $students = mysqli_query($conn, "SELECT * FROM students");
                      $rows = mysqli_num_rows($students);
                      echo $rows; ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-users icons"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- casted votes -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 py-2 card3">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-uppercase mb-1 text-info">Casted Votes</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $casted = mysqli_query($conn, "SELECT * FROM students WHERE vote_status ='Voted'");
                    $rows = mysqli_num_rows($casted);
                    echo $rows; ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-check-square-o icons"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- active votes -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 py-2 card4">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-uppercase mb-1 text-warning">Active Votes</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $active = mysqli_query($conn, "SELECT * FROM students WHERE vote_status ='Active'");
                    $rows = mysqli_num_rows($active);
                    echo $rows; ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-bitbucket-square icons"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<!-- popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
