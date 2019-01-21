<?php
	$title = "PERSONAL PROPERTY RESTORATION";
	$icon = '<svg viewBox="0 0 200 200" width="85" height="85"><rect y="85" width="200" height="27.9"></rect><path d="M172.9 193.5H27.4c-7.4 0-13.3-6-13.3-13.4v-62.3h53.5l0 5.4c0 6.3 5.1 11.5 11.4 11.5H121c6.3 0 11.4-5.1 11.4-11.5l0-5.4h53.9v62.3C186.3 187.5 180.3 193.5 172.9 193.5z"></path><rect x="36.2" y="6.5" width="127.6" height="17.8"></rect><path d="M146.5 75.7H53.7c-4.7 0-8.5-3.8-8.5-8.6V27.4h34.2l0 3.4c0 4 3.3 7.3 7.3 7.3h26.7c4 0 7.3-3.3 7.3-7.3l0-3.4h34.4v39.8C155.1 71.9 151.2 75.7 146.5 75.7z"></path></svg>';
	$background = "https://www.dkiservices.com/wp-content/uploads/2018/07/persProperty.jpg";
	$image = "https://www.dki-burkeskleins.com/images/service-sidebar-image.jpg";
	$content =<<<EOT
If your home or business suffers water, fire, smoke or mold damage, your belongings have been through a lot of abuse. Burke's Klein's DKI provides a variety of necessary services to clean and secure these items to avoid further damage.
<br><br>
<span class="red_text">Contents Pack-Out & Storage</span>
<br><br>
Some situations require home and business contents to be removed from the property and relocated for comprehensive cleaning and restoration. These are professionally inventoried and documented. Burke's Klein's DKI has the resources to safely load, transport and secure your contents at another location until cleaning and restoration is complete. Items are then delivered with care to your home or business, using the same inventory procedures during the pack-out process.
<br><br>
<span class="red_text">Cleaning</span>
<br><br>
Investing in the latest and highest quality industry technology, training and advanced equipment, Burke's Klein's DKI is skilled to restore fabric-related items to their pre-loss conditions. In addition to concerns with an item's appearance and structural integrity, we take into consideration the smells associated with fire and water related disasters. We use ozone treatments that break down the foreign particles that cause the odor.
<br><br>
Trust the leading restoration company in Spokane and Coeur d'Alene to professionally store, clean and restore your personal and business contents.
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