
<?php include('elements/header.php');?>
<?php
if( is_array($post) ) {
	extract($post);?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

<?php echo $content;?>
<br>
<?php echo "<sub>Posted on ".$date." by ".$first_name." ".$last_name." in ".$name;?>
</sub>

</div>
<?php }?>

<?php if(is_array($posts) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/view/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
	<p><?php echo $p['content'];?></p>
	<sub>
	<p><?php echo "Posted on: ".$p['date']." by ".$p['first_name']." ".$p['last_name']." in ".$p['name'];?>

	</p>

</sub>
<br>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>
