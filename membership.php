<?php $page_title = 'Membership'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Membership</title>
	<?php include('components/header_links.php'); ?>

	<style>
		.membership_plans {
			position: relative;
			display: block;
			width: 100%;
			overflow-y: hidden;
			overflow-x: auto;
			margin-top: 30px;
			padding-bottom: 15px;
			margin-bottom: 30px;
		}

		.membership_plans::-webkit-scrollbar {
			height: 5px;
		}

		.membership_plans ul {
			position: relative;
			width: auto;
			list-style: none;
			padding: 0;
			margin: 0;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: center;
			justify-content: flex-start;
			align-items: flex-start;
		}

		.membership_plans ul li {
			position: relative;
			display: block;
			width: 100%;
			flex-grow: 1;
			flex-basis: 0;
		}

		.membership_plans ul li+li {
			margin-left: 25px;
		}

		.membership_plans ul li input[type=radio] {
			position: absolute;
			display: block;
			width: 100%;
			height: 100%;
			cursor: pointer;
			z-index: 1;
			opacity: 0;
		}

		.plan_card {
			position: relative;
			display: block;
			width: 100%;
			background-color: #fff;
			border: 1px solid #eee;
			border-radius: 10px;
			padding: 15px;
			box-shadow: inset 0px 0px 10px 5px #eee;
		}

		.membership_plans ul li input[type=radio]:hover+.plan_card {
			box-shadow: none;
		}

		.membership_plans ul li input[type=radio]:checked+.plan_card {
			box-shadow: inset 0px 0px 75px 15px #e69a0515;
			border-color: #e69a05;
		}

		.plan_card .plane_name {
			position: relative;
			display: block;
			width: 100%;
			white-space: nowrap;
			line-height: 1;
			font-size: 18px;
			font-weight: 500;
			color: #000;
			margin-bottom: 5px;
		}

		.membership_plans ul li input[type=radio]:checked+.plan_card .plane_name {
			color: #b03600;
		}

		.plan_card .plan_price {
			position: relative;
			width: 100%;
			margin: 0;
			line-height: 1;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: center;
			justify-content: flex-start;
			align-items: flex-start;
		}

		.plan_card .plan_price span {
			position: relative;
			display: block;
			width: auto;
			font-size: 15px;
		}

		.plan_card .plan_price span+span {
			margin-left: 15px;
		}

		.plan_card .plan_price span.normal {
			text-decoration: line-through;
		}

		.plan_card .plan_price span.offer {
			color: #000;
			font-weight: 500;
		}

		.membership_form {
			position: relative;
			display: block;
			width: 100%;
		}

		.membership_form ul {
			position: relative;
			display: block;
			width: 100%;
			list-style: none;
			padding: 0 10%;
			margin-bottom: 25px;
		}

		.membership_form ul li {
			position: relative;
			width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;		
			align-content: center;
			justify-content: space-between;
			align-items: flex-start;
		}

		.membership_form ul li>div {
			flex-grow: 1;
			flex-basis: 0;
			max-width: 49%;
		}

		.fsec_title {
			position: relative;
			display: block;
			width: 100%;
			color: #000;
			font-weight: 600;
			font-size: 20px;
			line-height: 1.5;
			margin: 25px 0;
			padding: 0 10%;
		}

		.selected_plan_details {
			position: relative;
			width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: center;
			justify-content: flex-start;
			align-items: flex-start;
			margin-top: 30px;
			margin-bottom: 25px;
		}

		.selected_plan_details>div {
			position: relative;
			display: block;
			width: auto;
			flex-grow: 1;
			flex-basis: 0;
		}

		.selected_plan_details>div+div {
			margin-left: 30px;
		}

		.selected_plan_details>div label {
			position: relative;
			display: block;
			width: 100%;
			line-height: 1;
			white-space: nowrap;
			margin-bottom: 5px;
			font-size: 15px;
			color: #000;
			font-weight: 500;
		}

		.selected_plan_details>div p {
			position: relative;
			display: block;
			width: 100%;
			line-height: 25px;
			white-space: nowrap;
			margin: 0;
			font-size: 18px;
			color: #b03600;
			font-weight: 500;
		}

		.selected_plan_details>div input {
			position: relative;
			display: block;
			width: auto;
			line-height: 25px;
			background-color: #fff;
			border: 1px solid #eee;
			border-radius: 5px;
			padding: 0 10px;
			font-size: 18px;
			color: #b03600;
			font-weight: 500;
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

		@media (max-width: 1024px) {
			.membership_form ul, .fsec_title {
				padding: 0 5%;
			}
		}

		@media (max-width: 800px) {
			.membership_form ul, .fsec_title {
				padding: 0;
			}
			.selected_plan_details {
				flex-wrap: wrap;
			}
			.selected_plan_details>div {
				width: 50%;
				flex-grow: unset;
				flex-basis: unset;
				margin-bottom: 25px;
			}
			.selected_plan_details>div+div {
				margin-left: 0;
			}
		}

		@media (max-width: 600px) {
			.membership_form ul li {
				flex-direction: column;
			}
			.membership_form ul li>div {
				max-width: unset;
				flex-grow: unset;
				flex-basis: unset;
				width: 100%;
			}
		}
	</style>
</head>

<body>
	<?php include('components/header.php'); ?>

	<main>

		<?php include('components/page_banner.php'); ?>

		<section id="membership" class="section">
			<div class="container-fluid">
				<div class="section_title">
					<h3>Let's Create Your Membership</h3>
				</div>
				<p style="font-style: italic;" class="sub_title">Start by choosing a membership category of your choice and completing the short form</p>
				<div class="section_content">
					<div class="membership_plans">
						<ul>
							<li>
								<input type="radio" name="membership_plan" value="Student">
								<div class="plan_card">
									<p class="plane_name">Student</p>
									<p class="plan_price">
										<span class="normal">$50</span>
										<span class="offer">$25</span>
									</p>
								</div>
							</li>
							<li>
								<input type="radio" name="membership_plan" value="LIfe">
								<div class="plan_card">
									<p class="plane_name">Life</p>
									<p class="plan_price">
										<span class="normal">$100</span>
										<span class="offer">$50</span>
									</p>
								</div>
							</li>
							<li>
								<input type="radio" name="membership_plan" value="Bronze">
								<div class="plan_card">
									<p class="plane_name">Bronze</p>
									<p class="plan_price">
										<span class="normal">$1000</span>
										<span class="offer">$500</span>
									</p>
								</div>
							</li>
							<li>
								<input type="radio" name="membership_plan" value="Silver">
								<div class="plan_card">
									<p class="plane_name">Silver</p>
									<p class="plan_price">
										<span class="normal">$2500</span>
										<span class="offer">$1250</span>
									</p>
								</div>
							</li>
							<li>
								<input type="radio" name="membership_plan" value="Gold" checked="true">
								<div class="plan_card">
									<p class="plane_name">Gold</p>
									<p class="plan_price">
										<span class="normal">$5000</span>
										<span class="offer">$2500</span>
									</p>
								</div>
							</li>
							<li>
								<input type="radio" name="membership_plan" value="Platinum">
								<div class="plan_card">
									<p class="plane_name">Platinum</p>
									<p class="plan_price">
										<span class="normal">$10000</span>
										<span class="offer">$5000</span>
									</p>
								</div>
							</li>
							<li>
								<input type="radio" name="membership_plan" value="Diamond">
								<div class="plan_card">
									<p class="plane_name">Diamond</p>
									<p class="plan_price">
										<span class="normal">$25000</span>
										<span class="offer">$12500</span>
									</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="membership_form">
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
										<input type="text" name="country" required>
										<label>Country*</label>
									</div>
									<div class="input_div with_label">
										<input type="text" name="state" required>
										<label>State*</label>
									</div>
								</li>
								<li>
									<div class="input_div with_label">
										<input type="text" name="city" required>
										<label>City*</label>
									</div>
									<div class="input_div with_label">
										<input type="text" name="zip" required>
										<label>Zip*</label>
									</div>
								</li>
								<li>
									<div class="input_div with_label">
										<input type="text" name="refferred_by" required>
										<label>Reffered by*</label>
									</div>
								</li>
							</ul>
							<h3 class="fsec_title">Family Details</h3>
							<ul>
								<li>
									<div class="input_div with_label">
										<input type="text" name="spouse_fname" required>
										<label>Spouse First Name*</label>
									</div>
									<div class="input_div with_label">
										<input type="text" name="spouse_lname" required>
										<label>Spouse Last Name*</label>
									</div>
								</li>
								<li>
									<div class="input_div with_label">
										<input type="text" name="child_name">
										<label>Child Full Name</label>
									</div>
									<div class="input_div with_label">
										<input type="text" name="child_age">
										<label>Child Age</label>
									</div>
								</li>
							</ul>
							<div class="selected_plan_details">
								<div class="plan">
									<label>Subscription Plan:</label>
									<p class="selected_plan_name">Bronze</p>
								</div>
								<div class="amount">
									<label>Membership Amount:</label>
									<p class="selected_plan_price">$500</p>
								</div>
								<div class="activities">
									<label>Charitable Activities:</label>
									<p class="selected_plan_activities">
										<input type="number" name="charitable_services" value="25">
									</p>
								</div>
								<div class="totle_amount">
									<label>Membership Amount:</label>
									<p class="selected_plan_tprice">$500</p>
								</div>
							</div>
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
								<p>Agree to terms and conditions</p>
							</div>
							<div class="form_btn">
								<button type="submit" class="custom_btn solid orange">Save & Procees to Payment</button>
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