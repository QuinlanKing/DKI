<?php
	$title = "EMERGENCY RESPONSE";
	$icon = '<svg viewBox="0 0 200 200" width="85" height="85"><path d="M143.3 26.4c-15.5 6.8-34.3 3.9-47-8.9 -0.8-0.8-1.6-1.7-2.4-2.6L75.6 33.3l31 31L96.9 74l18.9 18.9 -5.8 5.7c-2.4 2.3-2.4 6.2 0 8.5 0.7 0.7 1.6 1.2 2.5 1.4l19.2-19.2 31 31L200 83.1 143.3 26.4z"></path><path d="M69.9 138.7l-5.8 5.8 -18.9-18.9 -30.3 30.3L40.1 181l39.8-39.8c-0.3-0.9-0.8-1.8-1.5-2.5C76.1 136.4 72.2 136.4 69.9 138.7z"></path><path d="M104.3 112.9c-5.5-5.5-5.5-14.5 0-20l-9.7-9.7 -14 14L44.3 60.9l-0.7-13.7L17.2 28.7 0 46l18.5 26.4L32.2 73l36.2 36.2 -14 14 9.7 9.7c5.5-5.5 14.5-5.5 20 0 5.5 5.5 5.5 14.5 0 20l32 32c21.7-1.1 39-18.5 40.1-40.1l-32-32C118.8 118.4 109.8 118.4 104.3 112.9z"></path></svg>';
	$background = "https://www.dkiservices.com/wp-content/uploads/2018/07/contact-us.jpg";
	$content =<<<EOT
Burke's Klein's DKI provides emergency services 24 hours a day, 7 days a week, 365 days a year in Spokane and Coeur d'Alene. These services include water damage mitigation, fire and smoke damage, mold and biohazard remediation, board-up and tarping services, complete reconstruction, and much more.
<br><br>
With access to more than 15,000 technicians nationwide, and the largest fleet of vehicles and equipment around the country, we will secure any size damaged property immediately and efficiently, helping to minimize secondary damage.
<br><br>
If you are in need of emergency services, call Burke's Klein's DKI today.
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
					<div class="col-sm-12">
						<span class="header_text"><?php print_r($title); ?></span>
						<br><br>
						<span class="main_text">
						<?php print_r($content); ?>
						</span>
					</div>
				</div>	
			</div>
		</div>
<?php include('footer.php'); ?>