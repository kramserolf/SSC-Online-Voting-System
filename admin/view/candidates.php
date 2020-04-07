<?php ob_start(); ?>
<DOCTYPE html>
<html lang="en">

<head>
    <?php 
      include('../layouts/css.php');
     ?>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading border-bottom pb-md-5 pl-4 mt-2">SSC Online Voting</div>
      <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action"><i class="fa fa-home"></i>Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-github-square"></i>Candidates</a>
        <a href="#" class="list-group-item list-group-item-action" data-toggle="dropdown"><i class="fa fa-users"></i>Students</a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="cics.php" class="dropdown-item">BSIT / BLISS</a>
          <a href="educ.php" class="dropdown-item">BSED / BEED</a>
          <a href="bsba.php" class="dropdown-item">BSBA / ABEC</a>
          <a href="bssw.php" class="dropdown-item">BSSW / BSTM</a>
          <a href="crim.php" class="dropdown-item">BSCRIM</a>
        </div>
      </div>
   <!--    <footer class="fixed-bottom" style="font-size: 0.9em;">
        Copyright 2020. <br>Developed by Mark Flores.
      </footer> -->
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <!-- navbar toggle -->
       <?php  
        include('navbar.php');
      ?>
      <!-- add candidate modal -->
      <?php include('../modals/addCandidateModal.php'); ?>
      <div class="container">
        <div class="d-flex text-black pt-3 pb-2">
          <div class="w-100">
            <h4>Candidates</h4>
          </div>
          <div class="flex-shrink-0">
            <a href="#addModal" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-user-plus mr-1"></i>Add Candidate</a>
          </div>
        </div>
        <div class="table-responsive-sm">
           <table class="table table-hover table-bordered" id="tbl_candidates">
              <thead class="thead-light text-center">
                <tr>
                  <th>Position</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Party</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php 
                // include the database connection 
                include('../../dbcon.php');
                // fetch query
                $sql = mysqli_query($conn, "SELECT * FROM candidates") or die(mysqli_error($sql));
                foreach($sql as $row) {
                  
                  include('../modals/updateCandidateModal.php');
              ?>
                <tr>
                  <td><?php echo $row['position']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['course'];?> - <?php echo $row['year'] ?></td>
                  <td><?php echo $row['party']; ?></td>
                  <td class="text-center">
                    <a href="#editModal<?php echo $row['id'] ?>" data-toggle="modal" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                    <a href="../function/delete_candidate.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
            <?php include '../function/update_candidate.php'; } ?>
          </table>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  <?php  
    include'../layouts/scripts.php';
  ?>
  <!-- Menu Toggle Script -->
  <script type="text/javascript">
     // declare the datatables
    $(document).ready( function () {
           $('#tbl_candidates').DataTable({
             pagingType: "first_last_numbers",
             lengthChange : false, 
             ordering: false,
                 dom: 'Bfrtip',
                 buttons: [
                   'print'
               ]
           });
       } );
  </script>
</body>
</html>
