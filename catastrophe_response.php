<?php
	$title = "CATASTROPHE RESPONSE";
	$icon = '<svg viewBox="0 0 200 200" width="85" height="85"><path d="M100 20C51.8 20 0 30.6 0 53.8c0 23 50.7 33.6 98.4 33.8 0.7 0 1.3 0 1.6 0 0.4 0 0.9 0 1.6 0 47.7-0.2 98.4-10.8 98.4-33.8C200 30.6 148.2 20 100 20zM51.3 64.3c4.4-3.7 22.1-9.1 48.7-9.1 26.6 0 44.3 5.4 48.7 9.1 -4.4 3.7-22.1 9.1-48.7 9.1C73.4 73.3 55.7 67.9 51.3 64.3zM163.7 65.8c-0.1 0-0.2 0-0.2 0.1 0.1-0.5 0.1-1 0.1-1.6 0-22.7-57.1-23.4-63.6-23.4 -6.5 0-63.6 0.7-63.6 23.4 0 0.5 0 1.1 0.1 1.6 -0.1 0-0.2 0-0.2-0.1 -18.3-5.3-22-10.8-22-12s3.7-6.7 22-12c16.9-4.9 39.6-7.5 63.7-7.5 24.2 0 46.8 2.7 63.7 7.5 18.3 5.3 22 10.8 22 12S182 60.5 163.7 65.8z"></path><path d="M171.5 82.8c-3.9-0.5-7.4 2.3-7.9 6.1 -2.1 4.7-25.5 13.4-63.6 13.4 -38 0-61.5-8.7-63.6-13.4 -0.3-3.9-3.7-6.7-7.5-6.5C25 82.6 22 86 22.2 90c1.2 21 49.5 26.7 77.8 26.7 27.7 0 75.2-5.4 77.7-25.8C178.2 86.9 175.4 83.3 171.5 82.8z"></path><path d="M151.6 120.6c-3.7-0.4-7 2-7.8 5.6 -2.6 3-18 8.4-43.8 8.4 -25.7 0-41-5.4-43.8-8.4 -0.6-3.5-3.8-6.1-7.4-5.9 -3.9 0.2-6.9 3.6-6.7 7.6 1.2 20.5 52.1 21 57.9 21 5.7 0 55.4-0.6 57.8-20.3C158.3 124.7 155.5 121.1 151.6 120.6z"></path><path d="M125.7 158.9c-3.1-0.4-6 1.3-7.3 4 -2.2 1.1-8.9 2.8-18.4 2.8 -9.5 0-16.1-1.7-18.4-2.8 -1.2-2.6-3.9-4.4-6.9-4.2 -3.9 0.2-6.9 3.6-6.7 7.6C68.8 178.7 90.6 180 100 180c9.1 0 30.5-1.3 31.9-13.2C132.4 162.9 129.6 159.4 125.7 158.9z"></path></svg>';
	$background = "https://www.dkiservices.com/wp-content/uploads/2018/07/persProperty.jpg";
	$image = "https://www.dki-burkeskleins.com/images/service-sidebar-image.jpg";
	$content =<<<EOT
No loss is too large for our team to handle! Our affiliation with the largest property restoration contracting organization in North America (DKI) gives us the advantage to provide the necessary manpower and equipment required to quickly mitigate large losses.
<br><br>
Upon immediate arrival, a DKI licensed contractor will inspect your property prior to beginning any repairs, then set up a restoration plan. We will work with you and your insurance company to keep you informed during every step of the process for transparency and fast recovery.
<br><br>
All Burke's Klein's DKI and other DKI contractors are continually educated, trained and certified to provide the best quality services for all losses, big or small, caused by water, fire, storm, mold or other damages.
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