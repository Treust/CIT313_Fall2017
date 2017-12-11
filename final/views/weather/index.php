<?php
include('views/elements/header.php');?>

<?php if(!$result) {?>
<div class="container">
	<div class="page-header">
		<h1>Weather</h1>
 </div>
 <form method="post" action="<?php echo BASE_URL?>weather/getresults">

		 <label for "zip">Enter Your Zip Code</label>
		 <input type="text" name="zip" id="zip" required="zip" />
		 <br/>
		 <button type="submit" class="btn">Show Results</button>

 </form>
 <?php
 }
 else {
 ?>

</div>


<div class="container">
<div class="page-header">
 <h1>Weather for zip code <?php echo $weather->request->query;?></h1>
</div>
 <h4>Today's high temperature: <?php echo $weather->weather->maxtempF;?></h4>
 <h4>Today's low temperature: <?php echo $weather->weather->mintempF;?></h4>

 <h2>
  Local weather
 </h2>
	 <figure>
		 <a href="https://www.accuweather.com/en/us/indianapolis-in/46204/weather-forecast/348323" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
</a><div id="awtd1513012380053" class="aw-widget-36hour"  data-locationkey="348323" data-unit="f" data-language="en-us" data-useip="false" data-uid="awtd1513012380053" data-editlocation="true"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
</figure>
</div>

<?php
 }
?>
<?php include('views/elements/footer.php');?>
