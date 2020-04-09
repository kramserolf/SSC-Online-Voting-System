<?php  
  ob_start();
?>
<DOCTYPE html>
<html lang="en">
<head>
  <?php  
    include '../layouts/css.php';
  ?>
</head>
<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
      <!-- title -->
      <div class="sidebar-heading border-bottom pb-md-5 pl-4 mt-2">SSC Online Voting</div>
      <!-- sidebar links -->
      <div class="list-group list-group-flush">
        <!-- dashboard -->
        <a href="dashboard.php" class="list-group-item list-group-item-action "><i class="fa fa-home"></i>Dashboard</a>
        <!-- candidates -->
        <a href="candidates.php" class="list-group-item list-group-item-action"><i class="fa fa-github-square"></i>Candidates</a>
        <!-- students per course -->
        <a href="#" class="list-group-item list-group-item-action" data-toggle="dropdown" ><i class="fa fa-users"></i>Students</a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="#" class="dropdown-item">BSIT / BLISS</a>
          <a href="educ.php" class="dropdown-item">BSED / BEED</a>
          <a href="bsba.php" class="dropdown-item">BSBA / ABEC</a>
          <a href="bssw.php" class="dropdown-item">BSSW / BSTM</a>
          <a href="crim.php" class="dropdown-item">BSCRIM</a>
        </div>
        <div>
          <a href="#" class="list-group-item list-group-item-action" data-toggle="dropdown" ><i class="fa fa-cog"></i>Settings</a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="#enable" data-toggle="modal" class="dropdown-item">Enable/Disable Voting</a>
            <a href="#" class="dropdown-item">Backup/Restore</a>
            <a href="#about" data-toggle="modal" class="dropdown-item">About</a>
          </div>
        </div>
      </div>
      <?php  
        include('../layouts/about-modal.php');
        include('../layouts/enable-disable.php');
      ?>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <!-- navbar toggle -->
      <?php  
        include('navbar.php');
      ?>
      <!-- content title -->
      <div class="container">
      	<div class="d-flex text-black pt-3 pb-2">
      		<div class="w-100">
      			<h4>College of Information and Computing Science</h4>
      		</div>
      		<div class="flex-shrink-0">
      			 <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus mr-1"></i>Add Student</button>
      		</div>
      	</div>
        <!-- cics table -->
        <div class="table-responsive-sm">
      	<table class="table table-bordered table-hover" id="tbl_cics">
      		<thead class="thead-light text-center">
      			<tr>
              <th style="width: 140px;">ID Number</th>
              <th>Name</th>
              <th style="width: 120px;">Department</th>
              <th style="width: 55px;">Status</th>
              <th style="width: 55px;">Action</th>
      			</tr>
      		</thead>
          <?php  
            include '../../dbcon.php';
            $sql = mysqli_query($conn, "SELECT * FROM students WHERE course = 'BSIT' or course = 'BLISS'");
            while($row = mysqli_fetch_array($sql))
            { include '../modals/updateStudentModal.php';
            ?>
              <tr>
                  <td><?php echo $row['id_number']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['course'] .' - '. $row['year']; ?></td>
                 <td class="text-center"><?php echo $row['vote_status']; ?></td>
                <td class="text-center">
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?php echo $row['id'] ?>"><i class="fa fa-pencil"></i></button>
                  <a href="../function/delete_student_cics.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
            <?php include '../function/update_student.php'; } ?>
      	</table>
      </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
    <!-- add student modal -->
    <?php  
      include '../modals/addStudentModal.php';
    ?>
  </div>
  <!-- /#wrapper -->
  <?php  
    include'../layouts/scripts.php';
  ?>
  <script type="text/javascript">
     // declare the datatables
    $(document).ready( function () {
           $('#tbl_cics').DataTable({
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
