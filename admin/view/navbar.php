<?php  
  include('../../dbcon.php');
  include('../admin-login.php');
  if (!isset($_SESSION['username'])) {
    header('location: ../');
  }
?>
 <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <img src="../assets/css/social-media/menu.png" type="button" id="menu-toggle">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-secret mr-1"></i>
              <?php echo $_SESSION['username']; ?>
             </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../function/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>