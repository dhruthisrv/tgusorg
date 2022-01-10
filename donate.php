<?php $page_title = 'Donate'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Donate</title>
	<?php include('components/header_links.php'); ?>

	<style>
		.section_content {
			margin-top: 50px;
			box-shadow: 0 0.125rem 0.5rem -0.25rem #1f1b2d1f, 0 0.25rem 1rem #1f1b2d1f;
		}
		.donation_img {
			position: relative;
			display: block;
			width: 100%;
			padding: 35px 25px 25px;
			background-image: url('<?php echo $baseUrl; ?>assets/imgs/donation.jpg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}
		.donation_form {
			position: relative;
			display: block;
			width: 100%;
			padding: 35px 25px 25px;
			background-color: #fff;
		}

		.donation_form ul {
			position: relative;
			display: block;
			width: 100%;
			list-style: none;
			padding: 0;
			margin-bottom: 25px;
		}

		.donation_form ul li {
			position: relative;
			width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;		
			align-content: center;
			justify-content: space-between;
			align-items: flex-start;
		}

		.donation_form ul li>div {
			flex-grow: 1;
			flex-basis: 0;
			max-width: 49%;
		}

		.donation_form ul li:last-child>div, .donation_form ul li:nth-last-child(2)>div {
			max-width: 100%;
		}

		.payment_mode {
			position: relative;
			display: block;
			width: 100%;
		}

		.payment_mode ul {
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: center;
			justify-content: flex-start;
			align-items: flex-start;
			padding: 0;
			margin: 0;
		}

		.payment_mode ul li {
			width: auto;
		}

		.payment_mode ul li+li {
			margin-left: 30px;
		}

		.input_div.checkbox input[type=checkbox]+.checkbox_style+p {
			white-space: unset;
		}

		@media (max-width: 800px) {
			.donation_form ul li {
				flex-direction: column;
			}
			.donation_form ul li>div {
				max-width: 100%;
				width: 100%;
			}
		}

		@media (max-width: 600px) {
			.donation_img {
				display: none;
			}
		}
	</style>
</head>
<body>
	<?php include('components/header.php'); ?>

	<main>
		
		<?php include('components/page_banner.php'); ?>

		<section id="donation" class="section">
			<div class="container-fluid">
				<div class="section_title">
					<h3>Donation</h3>
				</div>
				<p class="sub_title">Making a donation is the ultimate sign of solidarity</p>
				<div class="section_content flex equal_heights">
					<div class="col-lg-6 col-md-6 donation_img"></div>
					<div class="col-lg-6 col-md-6 donation_form">
						<form method="POST" action="">
							<ul>
								<li>
									<div class="input_div with_label">
										<input type="text" name="fname" required>
										<label>First Name*</label>
									</div>
									<div class="input_div with_label">
										<input type="text" name="lname" required>
										<label>Last Name*</label>
									</div>
								</li>
								<li>
									<div class="input_div with_label">
										<input type="text" name="email" required>
										<label>Email*</label>
									</div>
									<div class="input_div with_label">
										<input type="text" name="phone" required>
										<label>Phone Number*</label>
									</div>
								</li>
								<li>
									<div class="input_div with_label">
										<input type="text" name="amount" required>
										<label>Donation Amount*</label>
									</div>
								</li>
								<li>
									<div class="input_div with_label">
										<textarea name="description" rows="5"></textarea>
										<label>Description</label>
									</div>
								</li>
							</ul>
							<div class="payment_mode">
								<ul>
									<li>
										<div class="input_div radio">
											<input type="radio" name="payment_mode" value="Paypal" checked="true">
											<span class="radio_style"></span>
											<p>Paypal</p>
										</div>
									</li>
									<li>
										<div class="input_div radio">
											<input type="radio" name="payment_mode" value="Direct">
											<span class="radio_style"></span>
											<p>Direct Pay</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="input_div checkbox aggree">
								<input type="checkbox" name="aggree">
								<span class="checkbox_style"></span>
								<p>Telangana American Telugu Association Section 501(c) (3) Non-Profit organization, All donations are deemed tax-deductible absent any limitations on deductible applicable to a particular taxpayer. No goods or services were provided in exchange for your contribution.</p>
							</div>
							<div class="form_btn">
								<button type="submit" class="custom_btn solid orange">Donate</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

	</main>

	<?php include('components/footer.php'); ?>
	<?php include('components/footer_links.php'); ?>
</body>
</html>