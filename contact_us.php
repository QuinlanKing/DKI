<?php
	$title = "CONTACT US";
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
						<span class="header_text">Have Questions?</span>
						<br><br>
						<span class="main_text">
						Fill out the form below to contact us today.
						</span>
					</div>
				</div>	
			</div>
		</div>
		<div class="contact_form_container">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<span class="text_10" style="line-height: 0;">CONTACT</span>
						<br>
						<span class="text_11">BURKE'S KLEIN'S DKI</span>
						<br><br><br>
						<span class="text_11">OR CALL US NOW AT</span>
						<br>
						<span class="text_10" style="font-size: 1.5rem; line-height: 1;"><a href="tel:+12086646433">(208) 664-6433</a></span>
					</div>
					<div class="col-sm-7">
						<div class="row form_contain">
							<form action="send_email.php" method="POST" class="col-12" style="padding: 0;">
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Full Name" name="full_name">
									</div>
									<div class="col-md-6">
										<input type="text" placeholder="company name" name="company_name">
									</div>
									<div class="col-md-4">
										<input type="text" placeholder="address" name="address">
									</div>
									<div class="col-md-3">
										<input type="text" placeholder="city" name="city">
									</div>
									<div class="col-md-2">
										<select name="state">
											<option value="">STATE</option>
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="DC">District Of Columbia</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>	
									</div>
									<div class="col-md-3">
										<input type="text" placeholder="zip/postal code" name="zip_code">
									</div>
									<div class="col-md-4">
										<input type="text" placeholder="email" name="email">
									</div>
									<div class="col-md-4">
										<input type="text" placeholder="phone" name="phone">
									</div>
									<div class="col-md-4">
										<select name="inquiry">
											<option value="">INQUIRY</option>
											<option value="General Inquiry">General Inquiry</option>
											<option value="Feedback">Feedback</option>
										</select>
									</div>
									<div class="col-md-8 col-lg-10">
										<input type="textarea" placeholder="message" name="message">
									</div>
									<div class="col-md-4 col-lg-2">
										<button class="submit_button" type="submit" id="submit">
											SEND
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include('footer.php'); ?>