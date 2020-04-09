<?php  
  include('../../dbcon.php');
  include('../admin-login.php');
  if (!isset($_SESSION['username'])) {
    header('location: ../');
  }
?>
<style type="text/css">
  .subnav-content {
    display: none;
    position: absolute;
    left: 76px;
    width: 100%;
    z-index: -1;
  }
  .subnav .subnav-content:hover {
    display: block;
  }
</style>
 <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
       <button class="btn btn-primary btn-sm" id="menu-toggle">Menu</button>
       <a href="#" style="visibility: hidden">
         <?php echo $_SESSION['username'] ?>
       </a>
      <a class="nav-link ml-auto text-black-50" href="../function/logout.php" id="formsubmitbutton" onclick="ButtonClicked()">
      Logout<i class="fa fa-power-off ml-1"></i></a>
      <span id=buttonreplacement class="ml-auto" style="display:none;">
      <img src="//www.willmaster.com/images/preload.gif" alt=loading...>
      </span>
      </nav>
  <script type="text/javascript" src="../../student/assets/js/animation.js"></script>