<?php include('elements/header.php');
require_once ('application/config.php')?>
<div class="container">
	<div class="page-header">
   <h1> Registration </h1>

	 <?php if($message){?>
	    <div class="alert alert-success">
	    <button type="button" class="close" data-dismiss="alert">×</button>
	    	<?php echo $message?>
	    </div>
	  <?php }?>

	<?php include ('elements/registration_form.php');

	?>

	</div>
	</div>

	<?php include('elements/footer.php');
	?>
