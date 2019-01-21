<?php
	$title = "FIRE DAMAGE";
	$icon = '<svg viewBox="0 0 200 200" width="85" height="85"><path d="M150.4 72.6c-1-0.5-2.3-0.2-3.1 0.5 -0.8 0.8-1.2 1.9-0.9 3 3.1 11.1 6.5 30.7 2.5 36.4 -0.5 0.7-1.1 1.1-1.8 1.2 -0.9-0.1-6.2-1-12-7.6 -10.2-11.4-21.5-38.5-17.5-103.1 0.1-1.2-0.5-2.3-1.6-2.8 -1-0.6-2.3-0.5-3.2 0.2C64.5 38.8 55.8 87.7 66.7 111.3c-8.2-4-22-13.8-24.2-34.3 -0.1-1.2-0.9-2.2-2-2.5 -1.1-0.4-2.3 0-3.1 0.9 -23.9 26.5-47 97 37.8 123.2 2.2 0.7 4.6 1.1 7 1.5 0.2 0 0.3 0 0.5 0 0 0 0 0 0.1 0 1.6 0 2.9-1.4 2.9-3 0-1-0.5-1.8-1.2-2.4 -14.8-12.7-23.1-28.6-24-43.4 20 19.9 41.2 7.1 40.6-26.2 30 24.2 39.8 45.7 30.7 67.4 -0.4 1-0.3 2.2 0.5 3.1 0.7 0.9 1.9 1.2 2.9 1 2.5-0.6 4-1 4.3-1.1C185.8 184.8 208.2 104.2 150.4 72.6z"></path></svg>';
	$background = "https://www.dkiservices.com/wp-content/uploads/2018/07/fireDamage.jpg";
	$image = "https://www.dki-burkeskleins.com/images/service-sidebar-image.jpg";
	$content =<<<EOT
Burke's Klein's DKI knows that a fire can be a traumatic experience to any home or business owner. As a result, our contractors are fully trained and certified with the proper equipment and manpower to quickly and professionally restore your property to pre-loss condition.
<br><br>
With a fire, there are also the after-effects of soot, debris, odor, smoke and structural damage. Rest assured, our expert teams are equipped with the industry’s most advanced equipment and expertise to effectively repair all size fire losses and remove all remaining odors and debris. Upon immediate arrival, Burke's Klein's DKI will evaluate the damage and get to work, preparing a plan and keeping you involved in the entire process.
<br><br>
<span class="red_text">Commercial Fire Damage Services</span>
<br><br>
In the event of a fire, large or small, Burke's Klein's DKI has the training, experience and manpower to get your facility up and running again. Trust the leading commercial fire restoration company in Spokane and Coeur d'Alene to handle your property damage. Call us immediately at our 24-hour emergency services line: 866-277-2977.
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