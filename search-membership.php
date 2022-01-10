<?php $page_title = 'Search Membership'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Membership</title>
	<?php include('components/header_links.php'); ?>

	<style>
		.search {
			position: relative;
			width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: center;
			justify-content: space-between;
			align-items: center;
			background: #b0360025;
			padding: 10px 15px 15px;
			border-radius: 10px;
		}
		.search ul {
			position: relative;
			width: 100%;
			list-style: none;
			padding: 0;
			margin: 0;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: center;
			justify-content: flex-start;
			align-items: center;
		}

		.search ul li {
			position: relative;
			display: block;
			width: auto;
			flex-grow: 1;
			flex-basis: 0;
			margin-right: 5px;
		}

		.search ul li>div {
			margin-bottom: 0;
		}

		.search ul li>.input_div input {
			border-color: transparent;
		}

		.search ul li label {
			position: relative;
			display: block;
			width: 100%;
			line-height: 1;
			font-size: 13px;
			margin-bottom: 3px;
			margin-left: 3px;
		}
		.search_btn {
			position: relative;
			display: block;
			width: auto;
			margin-top: 13px;
		}
		
		@media (max-width: 1024px) {}

		@media (max-width: 800px) {
			.search {
				flex-direction: column;
			}
			.search ul {
				flex-wrap: wrap;
			}
			.search ul li {
				flex-grow: unset;
				flex-basis: unset;
				width: calc(50% - (5px * 2));
				margin: 5px;
			}
		}

		@media (max-width: 600px) {
			.search ul li {
				width: 100%;
			}
		}
	</style>
</head>
<body>
	<?php include('components/header.php'); ?>

	<main>

		<?php include('components/page_banner.php'); ?>

		<section id="search" class="section">
			<div class="container-fluid">
				<div class="section_title">
					<h3>Let's Search Member's</h3>
				</div>
				<div class="section_content">
					<div class="search">
						<ul>
							<li>
								<div class="input_div">
									<label>First Name</label>
									<input type="text" name="fname" required>
								</div>
							</li>
							<li>
								<div class="input_div">
									<label>Last Name</label>
									<input type="text" name="lname" required>
								</div>
							</li>
							<li>
								<div class="input_div">
									<label>Email</label>
									<input type="text" name="email" required>
								</div>
							</li>
							<li>
								<div class="input_div">
									<label>Phone Number</label>
									<input type="text" name="phone" required>
								</div>
							</li>
						</ul>
						<div class="search_btn">
							<button class="custom_btn orange">Search</button>
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