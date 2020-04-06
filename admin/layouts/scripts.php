
<!-- font awesome -->
<!-- <script src="https://kit.fontawesome.com/9cea5e267a.js" crossorigin="anonymous"></script> -->

<!-- jquery -->
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<!-- jquery datatables js -->
<script src="../assets/js/jquery.dataTables.min.js" type="text/javascript"></script>

<!-- datatables button js -->
<script src="../assets/js/dataTables.buttons.min.js" type="text/javascript"></script>

<!-- buttons print js -->
<script src="../assets/js/buttons.print.min.js" type="text/javascript"></script>

<!-- popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script type="text/javascript">
	// menu toggle
	$("#menu-toggle").click(function(e) {
	  e.preventDefault();
	  $("#wrapper").toggleClass("toggled");
	});
	<?php ob_end_flush(); ?>
</script>
