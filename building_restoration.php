<?php
	$title = "BUILDING RESTORATION";
	$icon = '<svg viewBox="0 0 200 200" width="85" height="85"><path d="M143.3 26.4c-15.5 6.8-34.3 3.9-47-8.9 -0.8-0.8-1.6-1.7-2.4-2.6L75.6 33.3l31 31L96.9 74l18.9 18.9 -5.8 5.7c-2.4 2.3-2.4 6.2 0 8.5 0.7 0.7 1.6 1.2 2.5 1.4l19.2-19.2 31 31L200 83.1 143.3 26.4z"></path><path d="M69.9 138.7l-5.8 5.8 -18.9-18.9 -30.3 30.3L40.1 181l39.8-39.8c-0.3-0.9-0.8-1.8-1.5-2.5C76.1 136.4 72.2 136.4 69.9 138.7z"></path><path d="M104.3 112.9c-5.5-5.5-5.5-14.5 0-20l-9.7-9.7 -14 14L44.3 60.9l-0.7-13.7L17.2 28.7 0 46l18.5 26.4L32.2 73l36.2 36.2 -14 14 9.7 9.7c5.5-5.5 14.5-5.5 20 0 5.5 5.5 5.5 14.5 0 20l32 32c21.7-1.1 39-18.5 40.1-40.1l-32-32C118.8 118.4 109.8 118.4 104.3 112.9z"></path></svg>';
	$background = "https://www.dkiservices.com/wp-content/uploads/2018/07/bldgRestNew.jpg";
	$image = "https://www.dki-burkeskleins.com/images/service-sidebar-image.jpg";
	$content =<<<EOT
Once the fire is put out, water is extracted and contents are cleaned, it’s important to return the structure back to its pre-loss condition. We understand it’s crucial to resume your normal day-to-day as quickly as possible. As a result, whether restoring a large hotel or the room of a home, Burke's Klein's DKI can return your property to its previous state quickly, cost effectively and professionally.
<br><br>
By continuously investing in the latest and highest quality industry technology, training and advanced equipment, Burke's Klein's DKI is able to restore any size residential or commercial property from water, fire, mold and other disasters. Trust the leading restoration company in Spokane and Coeur d'Alene to professionally restore and repair your property.
EOT;
?>
<html>
<?php include('header.php'); ?>
<!-- Header ^ -->
		
		<div class="water_damage" style="background-image: url('<?php print_r($background); ?>');">
			<div class="container">
				<div class="row">
					<div class="icon_container">
						<?php print_r($icon); ?>
					</div>
					<br>
					<div class="text_8">
						<span><?php print_r($title); ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="main_container">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<span class="header_text"><?php print_r($title); ?></span>
						<br><br>
						<span class="main_text">
						<?php print_r($content); ?>
						</span>
						
					</div>
					<div class="col-sm-6">
						
						<div class="all_day">
							<div class="text">
								<strong>24</strong>
								<span class="float_up"><span>HOURS</span>A DAY</span>
							</div>
							<br>
							<div class="text">
								<strong>365</strong>
								<span class="float_up"><span>DAYS</span>A YEAR</span>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
<?php include('footer.php'); ?>