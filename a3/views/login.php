<?php
include('elements/header.php');
require_once ('application/config.php');?>
<div class="container">
	<div class="page-header">
		
   <h1> Login View </h1>


   <?php echo $numbers; ?>

	 <?php include('elements/login_form.php');?>

  </div>
</div>
<?php include('elements/footer.php');?>