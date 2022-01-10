<?php $page_title = 'Events'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<?php include('components/header_links.php'); ?>

	<style>
		ul.events_list {
			position: relative;
			width: 100%;
			list-style: none;
			padding: 0;
			margin-bottom: 0;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			align-content: flex-start;
			justify-content: flex-start;
			align-items: flex-start;
		}
		ul.events_list li {
			position: relative;
			display: block;
			width: calc(100% / 4);
			height: auto;
			padding: 15px;
		}
		.event_card {
			position: relative;
			display: table;
			width: 100%;
			height: 100%;
			border-radius: 10px;
			overflow: hidden;
			background-color: #fff;
		}
		.event_card .event_img {
			position: relative;
			display: block;
			width: 100%;
			height: 175px;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}
		.event_card .event_info {
			position: relative;
			display: block;
			width: 100%;
			height: calc(100% - 175px);
			border: 1px solid #eee;
			border-top: none;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
			padding: 15px;
		}
		.event_card .event_info .event_title {
			position: relative;
			display: block;
			width: 100%;
			line-height: 1.5;
			font-size: 17px;
			color: #000;
			font-weight: 500;
			margin-bottom: 10px;
		}
		.event_card .event_info .event_desc {
			position: relative;
			display: block;
			width: 100%;
			line-height: 1.7;
			margin-bottom: 30px;
		}
		.event_card .event_info .custom_link {
			position: absolute;
			right: 15px;
			bottom: 15px;
		}
		@media (max-width: 1024px) {
			ul.events_list li {
				width: calc(100% / 3);
			}
		}
		@media (max-width: 800px) {
			ul.events_list li {
				width: calc(100% / 2);
			}
		}
		@media (max-width: 800px) {
			ul.events_list li {
				width: 100%;
			}
		}
	</style>
</head>
<body>
	<?php include('components/header.php'); ?>

	<main>

		<?php include('components/page_banner.php'); ?>

		<section id="events" class="section">
			<div class="container-fluid">
				<div class="section_title">
					<h3>Latest Events</h3>
					<a href="" class="custom_link">View all</a>
				</div>
				<div class="flex row">
					<ul class="events_list equal_heights">
						<li>
							<div class="event_card">
								<div class="event_img" style="background-image: url('<?php echo $baseUrl; ?>assets/imgs/events/1.png');"></div>
								<div class="event_info">
									<h4 class="event_title">Ugadi Celebrations</h4>
									<p class="event_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
									<a href="" class="custom_link">Read More</a>
								</div>
							</div>
						</li>
						<li>
							<div class="event_card">
								<div class="event_img" style="background-image: url('<?php echo $baseUrl; ?>assets/imgs/events/2.png');"></div>
								<div class="event_info">
									<h4 class="event_title">How To Excel Your Memory</h4>
									<p class="event_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
									<a href="" class="custom_link">Read More</a>
								</div>
							</div>
						</li>
						<li>
							<div class="event_card">
								<div class="event_img" style="background-image: url('<?php echo $baseUrl; ?>assets/imgs/events/3.png');"></div>
								<div class="event_info">
									<h4 class="event_title">COVID-19 PANDEMIC Current Situations</h4>
									<p class="event_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
									<a href="" class="custom_link">Read More</a>
								</div>
							</div>
						</li>
						<li>
							<div class="event_card">
								<div class="event_img" style="background-image: url('<?php echo $baseUrl; ?>assets/imgs/events/1.png');"></div>
								<div class="event_info">
									<h4 class="event_title">Ugadi Celebrations</h4>
									<p class="event_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
									<a href="" class="custom_link">Read More</a>
								</div>
							</div>
						</li>
						<li>
							<div class="event_card">
								<div class="event_img" style="background-image: url('<?php echo $baseUrl; ?>assets/imgs/events/2.png');"></div>
								<div class="event_info">
									<h4 class="event_title">How To Excel Your Memory</h4>
									<p class="event_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
									<a href="" class="custom_link">Read More</a>
								</div>
							</div>
						</li>
						<li>
							<div class="event_card">
								<div class="event_img" style="background-image: url('<?php echo $baseUrl; ?>assets/imgs/events/3.png');"></div>
								<div class="event_info">
									<h4 class="event_title">COVID-19 PANDEMIC Current Situations</h4>
									<p class="event_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
									<a href="" class="custom_link">Read More</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>

	</main>

	<?php include('components/footer.php'); ?>
	<?php include('components/footer_links.php'); ?>
</body>
</html>