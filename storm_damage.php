<?php
	$title = "STORM DAMAGE";
	$icon ='<svg viewBox="0 0 200 200" width="85" height="85"><path d="M163.5 45.6C157.2 23.6 137 7.5 113 7.5c-21.4 0-39.8 12.7-48 31 -2.4-0.7-5-1.1-7.6-1.1 -13.6 0-24.8 10.2-26.3 23.4C13.2 65 0 80.9 0 100c0 22.3 18.1 40.3 40.4 40.3 0 0 10.9 0 25.8 0l46.7-72.2 0.1 61.9H142l-6.2 10.4c9.6 0 15.9 0 15.9 0 26.6 0 48.2-21.5 48.2-48.1C200 69.7 184.5 50.8 163.5 45.6z"></path><polygon points="102.5 103.3 67.5 157.5 92.9 157.5 92.9 192.5 123.8 140.3 102.5 140.3 "></polygon></svg>';
	$background = "https://www.dkiservices.com/wp-content/uploads/2018/07/stormDamage.jpg";
	$image = "https://www.dki-burkeskleins.com/images/service-sidebar-image.jpg";
	$content =<<<EOT
You don’t always know when a severe thunderstorm or other natural disaster is going to barrel through town, knocking down structures, damaging roofs, causing torrential floods, a mess of debris, etc. Rest assured, when this happens, Burke's Klein's DKI is ready 24/7 to assist.
<br><br>
Our industry-certified disaster recovery team is fully prepared with storm preparedness plans, including tree trimming, to minimize potential damage and secure your home to weather any storm. In the event that a storm has caused damage to your property, contact us immediately, day or night.
<br><br>
Our team will immediately arrive at your home and begin the recovery process quickly and professionally.
<br><br>
<span class="red_text">Commercial Storm Damage Services</span>
<br><br>
Storm damage can be detrimental to your business operations. Call our 24-hour emergency line immediately to begin the recovery process: 866-277-2977.
<br><br>
No matter the size or type of your damage, our educated, trained and certified restoration experts will make you feel at ease, working around the clock when needed, to quickly get you back to business. Trust the leading restoration company in Spokane and Coeur d'Alene to get your facility back to pre-loss condition at lower costs, minimizing disruption to your business operations.
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