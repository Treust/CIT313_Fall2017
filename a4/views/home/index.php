<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News From <?php echo $rss_title; ?></h1>
  </div>
	<?php
	echo $data;
	?>
</div>
<?php include('views/elements/footer.php');?>
