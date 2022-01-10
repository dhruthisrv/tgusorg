<?php $page_title = 'Contact Us'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<?php include('components/header_links.php'); ?>

	<style>
		.section_content {
			margin-top: 35px;
		}
		form ul {
			position: relative;
			display: block;
			width: 100%;
			list-style: none;
			padding: 0;
			margin: 0;
		}
		form ul li {
			position: relative;
			width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: center;
			justify-content: space-between;
			align-items: flex-start;
		}
		form ul li>div {
			width: 49%;
		}
		form ul li:last-child>div {
			width: 100%;
		}
		.contact_info {
			position: relative;
			display: block;
			width: 100%;
			padding: 25px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0.125rem 0.5rem -0.25rem #1f1b2d1f, 0 0.25rem 1rem #1f1b2d1f;
		}
		.contact_info h3 {
			position: relative;
			display: block;
			width: 100%;
			color: #000;
			font-size: 20px;
			line-height: 1;
			padding-bottom: 20px;
			border-bottom: 1px solid #ccc;
			margin-bottom: 20px;
		}
		.contact_info .cinfo {
			position: relative;
			display: table;
			width: 100%;
			min-height: 40px;
		}
		.contact_info .cinfo+.cinfo {
			margin-top: 15px;
		}
		.contact_info .cinfo .icon {
			position: absolute;
			display: block;
			width: 40px;
			height: 40px;
			text-align: center;
			border-radius: 10px;
			background: #fd56311a;
			left: 0;
			top: 0;
		}

		.contact_info .cinfo .icon i {
			position: relative;
			display: block;
			width: 100%;
			line-height: 40px;
			font-size: 15px;
			color: #000;
		}

		.contact_info .cinfo p {
			position: relative;
			display: table-cell;
			vertical-align: middle;
			width: 100%;
			font-size: 15px;
			color: #333;
			line-height: 1.5;
			margin: 0;
			padding-left: 50px;
		}
		.contact_info .cinfo:hover .icon {
			background-color: #b03600;
		}
		.contact_info .cinfo:hover .icon i {
			color: #fff;
		}
		.contact_info .cinfo:hover p {
			color: #000;
		}

		@media (max-width: 800px) {
			.section_content.flex {
				flex-direction: column;
			}
			.contact_info {
				margin-top: 50px;
			}
		}

		@media (max-width: 600px) {
			form ul li {
				flex-direction: column;
			}
			form ul li>div {
				width: 100%;
			}
		}
	</style>
</head>
<body>
	<?php include('components/header.php'); ?>

	<main>
		
		<?php include('components/page_banner.php'); ?>

		<section id="contact" class="section">
			<div class="container-fluid">
				<div class="section_title">
					<h3>Get in Touch</h3>
				</div>
				<p class="sub_title">Please submit your enquiry by filling on this page, we will get back to you as soon as possible</p>
				<div class="section_content flex">
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 remove_desk_padding_left">
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
										<textarea name="message" rows="5"></textarea>
										<label>Description</label>
									</div>
								</li>
							</ul>
							<div class="form_btn">
								<button type="submit" class="custom_btn solid orange">Submit</button>
							</div>
						</form>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 remove_desk_padding_right">
						<div class="contact_info">
							<h3>Contact Information</h3>
							<a class="cinfo" href="">
								<div class="icon">
									<i class="fa fa-map"></i>
								</div>
								<p>5 Independence Way, Suite 300, Princeton, New Jersey, 08540, US</p>
							</a>
							<a class="cinfo" href="">
								<div class="icon">
									<i class="fa fa-envelope"></i>
								</div>
								<p>info@telanganaus.org</p>
							</a>
							<a class="cinfo" href="">
								<div class="icon">
									<i class="fa fa-phone"></i>
								</div>
								<p>+1-866-882-7382</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

	<?php include('components/footer.php'); ?>
	<?php include('components/footer_links.php'); ?>
</body>
</html>