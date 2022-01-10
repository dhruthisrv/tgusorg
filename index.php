<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php include('components/header_links.php'); ?>
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/slick.css" defer>
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/slick-theme.css" defer>
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/simple-calendar.css" defer>
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/lightgallery.css" defer>
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/lity.min.css" defer>
	<style>
		.slider {
			position: relative;
			background-size: cover;
			background-position: top center;
			background-repeat: no-repeat;
		}
		#about .flex {
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: flex-start;
			justify-content: space-between;
			align-items: flex-start;
		}
		.about_card {
			position: relative;
			display: block;
			width: 100%;
			background-color: #f6e9e3;
			padding: 30px;
			border-radius: 10px;
		}
		.about_card .title {
			position: relative;
			display: block;
			width: 100%;
			color: #000;
			font-size: 23px;
			font-weight: 600;
			line-height: 1.5;
			margin-bottom: 15px;
		}
		.about_card img {
			position: relative;
			display: block;
			height: 175px;
			width: auto;
			max-width: 100%;
			max-height: 100%;
			margin-bottom: 25px;
		}
		.about_card .name {
			position: relative;
			display: block;
			width: 100%;
			color: #000;
			font-size: 17px;
			font-weight: 600;
			line-height: 1.5;
			margin-bottom: 10px;
		}
		.about_card .message {
			color: #000;
		}
		@media (max-width: 600px) {
			#about .flex {
				flex-direction: column;
			}
			#about .flex>div+div {
				margin-top: 30px;
			}
		}
		@media (min-width: 601px) and (max-width: 800px) {
			.about_card img {
				height: auto;
			}
		}
	</style>
</head>

<body>
	<?php include('components/header.php'); ?>

	<main>

		<section id="hero_slider" class="section remove_padding">
			<div class="hero_slider">
				<?php 
				$path = "./assets/imgs/hero-slider/";
				$hero_slider_folder_path = $baseUrl."assets/imgs/hero-slider/";
				if ($handle = opendir($path)) {
					while (false !== ($slider_img = readdir($handle))) {
						if ($slider_img != "." && $slider_img != "..") {
							$img_path = $hero_slider_folder_path.$slider_img;
				?>
				<div class="slider" style="background-image: url('<?php echo $img_path; ?>');"></div>
				<?php
						}
					}
					closedir($handle);
				}
				?>
			</div>
		</section>

		<section id="updates" class="section remove_padding_top remove_padding_bottom">
			<div class="container-fluid">
				<div class="flex">
					<p>Latest Updates</p>
					<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
						<a href="">Click Here To Donate and Support TTA COVID Activities</a>
					</marquee>
				</div>
			</div>
		</section>

		<section id="about" class="section">
			<div class="container-fluid">
				<div class="flex row">
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div class="section_title">
							<h3>About Us</h3>
						</div>
						<p>Telangana American Telugu Association is the first Telangana organization in North America and a non-profit socio-cultural , charitable organization built to promote, preserve and perpetuate the Telangana community in the US and Canada.Telangana American Telugu Association is the youngest organization in towns across North America.</p>
						<p>Reflecting the theme, the energy and the positive attitude similar to that of Telangana, the 29th state of India. The organization was formed by a few like-minded people whose leader is Dr. Pailla Malla Reddy a billionaire entrepreneur, a harmonious person but above all a good samaritan who doesn’t let go an opportunity who are in need. Launched in 2015 the organization is a Non-Profit entity.</p>
						<p>The mission of Telangana American Telugu Association is to promote and perpetuate the culture and social conditions of Telangana and people of Telugu descent in general. Being the first national organization for Telangana in North America, the organization will act as a beacon light to all Telangana organizations across the country for generations to come.</p>
						<a href="" class="custom_btn solid orange">Read More</a>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
						<div class="about_card">
							<h3 class="title">President’s Message</h3>
							<img src="<?php echo $baseUrl; ?>assets/imgs/president.png" alt="">
							<p class="name">Dr. Mohan Reddy Patalolla</p>
							<p class="message">
								Dear friends,
								<br>
								With great privilege and honor, I assume the role of President of the Telangana American Telugu Association for the next two years.
							</p>
							<a href="" class="custom_btn solid orange">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="services" class="section">
			<div class="container-fluid">
				<div class="section_title">
					<h3>TTA Foundation Services</h3>
					<a href="" class="custom_link">View all</a>
				</div>
				<div class="services">
					<div class="slider">
						<div class="service_card">
							<img class="icon" src="<?php echo $baseUrl; ?>assets/imgs/services/school.png" alt="">
							<h4 class="service_title">School</h4>
							<p class="service_desc">Schools are Re-built in Andhra Pradesh & Telangana.</p>
							<a href="" class="custom_link">Read More</a>
						</div>
					</div>
					<div class="slider">
						<div class="service_card">
							<img class="icon" src="<?php echo $baseUrl; ?>assets/imgs/services/scholarship.png" alt="">
							<h4 class="service_title">Scholarship</h4>
							<p class="service_desc">Schoarships provided for the needy students.</p>
							<a href="" class="custom_link">Read More</a>
						</div>
					</div>
					<div class="slider">
						<div class="service_card">
							<img class="icon" src="<?php echo $baseUrl; ?>assets/imgs/services/orphans.png" alt="">
							<h4 class="service_title">Orphans</h4>
							<p class="service_desc">Orphans are supported for their education & basic needs of orphans through Project Varadhi.</p>
							<a href="" class="custom_link">Read More</a>
						</div>
					</div>
					<div class="slider">
						<div class="service_card">
							<img class="icon" src="<?php echo $baseUrl; ?>assets/imgs/services/healthcampus.png" alt="">
							<h4 class="service_title">Health Campus</h4>
							<p class="service_desc">Health Campus These Camps will help to find some diseases in the initial stage itself.</p>
							<a href="" class="custom_link">Read More</a>
						</div>
					</div>
					<div class="slider">
						<div class="service_card">
							<img class="icon" src="<?php echo $baseUrl; ?>assets/imgs/services/school.png" alt="">
							<h4 class="service_title">School</h4>
							<p class="service_desc">Schools are Re-built in Andhra Pradesh & Telangana.</p>
							<a href="" class="custom_link">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="events" class="section">
			<div class="container-fluid">
				<div class="section_title">
					<h3>Latest Events</h3>
					<a href="" class="custom_link">View all</a>
				</div>
				<div class="flex row">
					<div class="col-lg-9 col-md-7 col-sm-8 col-xs-12">
						<ul class="events_list row equal_heights">
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
					<div class="col-lg-3 col-md-5 col-sm-4 col-xs-12">
						<div class="upcoming_events">
							<h3 class="title">Upcoming Events</h3>
							<div id="events_calender"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="photos" class="section">
			<div class="container-fluid">
			<div class="section_title">
					<h3>Latest Photos</h3>
					<a href="<?php echo $baseUrl; ?>gallery" class="custom_link">View all</a>
				</div>
				<div class="section_content">
					<div class="row" id="lightgallery">
						<?php 
						$path = "./assets/imgs/gallery/";
						$gallery_folder_path = $baseUrl."assets/imgs/gallery/";
						if ($handle = opendir($path)) {
							while (false !== ($slider_img = readdir($handle))) {
								if ($slider_img != "." && $slider_img != "..") {
									$img_path = $gallery_folder_path.$slider_img;
						?>
						<a href="<?php echo $img_path; ?>" data-lg-size="1600-2400" style="background-image: url('<?php echo $img_path; ?>');">
							<img alt=".." src="<?php echo $img_path; ?>" />
						</a>
						<?php
								}
							}
							closedir($handle);
						}
						?>
					</div>
				</div>
			</div>
		</section>

		<section id="videos" class="section">
			<div class="container-fluid">
				<div class="section_title">
						<h3>Latest Videos</h3>
						<a href="<?php echo $baseUrl; ?>videos" class="custom_link">View all</a>
					</div>
				</div>
				<div class="section_content">
					<ul class="video_gallery row equal_heights">
						<li>
							<div class="video_card">
								<a href="https://www.youtube.com/watch?v=zYR7MQSwB1I" class="gallery-item video-item rounded-2" data-lity>
									<img data-src="https://img.youtube.com/vi/zYR7MQSwB1I/0.jpg" alt="v4">
									<h5 class="video_title">Telangana American Telugu Association 2021-2022</h5>
								</a>
							</div>
						</li>
						<li>
							<div class="video_card">
								<a href="https://www.youtube.com/watch?v=zYR7MQSwB1I" class="gallery-item video-item rounded-2" data-lity>
									<img data-src="https://img.youtube.com/vi/zYR7MQSwB1I/0.jpg" alt="v3">
									<h5 class="video_title">Telangana American Telugu Association 2021-2022</h5>
								</a>
							</div>
						</li>
						<li>
							<div class="video_card">
								<a href="https://www.youtube.com/watch?v=zYR7MQSwB1I" class="gallery-item video-item rounded-2" data-lity>
									<img data-src="https://img.youtube.com/vi/zYR7MQSwB1I/0.jpg" alt="video2">
									<h5 class="video_title">Telangana American Telugu Association 2021-2022</h5>
								</a>
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

<style>
	.services .slider {
		margin: 0 15px;
		background-color: #fff;
	}
	.services .slick-track {
		display: flex;
	}
	.services .slider {
		height: inherit;
	}
	.services .slick-prev:before, .services .slick-next:before {
		color: #000;
	}
	.services .slick-prev {
		left: -15px;
	}
	.services .slick-next {
		right: -15px;
	}
	.service_card {
		position: relative;
		display: block;
		width: 100%;
		height: 100%;
		padding: 20px;
		border-radius: 10px;
		background-color: #eee;
		border: 1px solid;
	}
	.service_card .icon {
		position: relative;
		display: block;
		height: 75px;
		width: auto;
		margin-bottom: 15px;
	}
	.service_card .service_title {
		position: relative;
		display: block;
		width: 100%;
		line-height: 1.5;
		font-size: 20px;
		color: #000;
		font-weight: 600;
		margin-bottom: 5px;
	}
	.service_card .service_desc {
		position: relative;
		display: block;
		width: 100%;
		color: #000;
		line-height: 1.5;
		margin-bottom: 30px;
	}
	.service_card .custom_link {
		position: absolute;
		display: inline-block;
		width: auto;
		font-size: 16px;
		font-weight: 500;
		line-height: 25px;
		white-space: nowrap;
		right: 20px;
		bottom: 15px;
	}
	.services .slider:nth-child(1) .service_card {
		background-color: #f83e7f30;
		border-color: #f83e7f35;
	}
	.services .slider:nth-child(2) .service_card {
		background-color: #ff760230;
		border-color: #ff760235;
	}
	.services .slider:nth-child(3) .service_card {
		background-color: #fefa2730;
		border-color: #fefa2735;
	}
	.services .slider:nth-child(4) .service_card {
		background-color: #50991630;
		border-color: #50991635;
	}
	.services .slider:nth-child(5) .service_card {
		background-color: #00b2f030;
		border-color: #00b2f035;
	}
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
		width: calc(100% / 3);
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
			width: calc(100% / 2);
		}
	}
	@media (max-width: 800px) {
		ul.events_list {
			margin: 0;
		}
		ul.events_list li {
			width: 100%;
		}
	}
	.upcoming_events {
		position: sticky;
		display: block;
		width: 100%;
		top: 25px;
		margin: 15px 0;
		background-color: #fff;
		border-radius: 10px;
		border: 1px solid #eee;
		overflow: hidden;
	}
	.upcoming_events .title {
		position: relative;
		display: block;
		width: 100%;
		text-align: center;
		font-size: 20px;
		color: #000;
		margin-bottom: 10px;
		line-height: 1;
		white-space: nowrap;
		padding: 15px 15px 0;
		margin-bottom: 15px;
	}
	.calendar header .btn-prev {
		left: 15px;
	}
	.calendar header .btn-next {
		right: 15px;
	}
	.calendar header .month {
		font-size: 16px;
	}
	.calendar header .month .year {
		font-size: 12px;
		color: #000;
		font-weight: 400;
	}
	.calendar .day.has-event:after {
		background-color: #b03600;
	}
	.calendar .day.today {
		background: transparent;
		color: #d76900;
		font-weight: 600;
		font-size: 16px;
	}
	.calendar .event-container {
		padding: 15px;
		padding-top: 50px;
		background: #b03600;
	}
	.calendar .filler {
		background: #b03600;
	}
	.calendar .event-container .close {
		top: 15px;
		right: 15px;
		width: 20px;
		height: 20px;
		z-index: 1;
	}
	.calendar .event-container .event {
		background: #fff;
	}
	.calendar .day:hover {
		border-color: transparent;
		color: #b03600;
	}
	.calendar .day {
		cursor: pointer;
		width: auto;
		line-height: 2;
	}
	.calendar .day.has-event:after {
		top: calc(50% + .5em);
	}
	#lightgallery {
		position: relative;
		width: 100%;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		align-content: flex-start;
		justify-content: flex-start;
		align-items: flex-start;
		margin-left: -2.5px;
    	margin-right: -2.5px;
	}
	#lightgallery>a {
		position: relative;
		display: block;
		width: calc(25% - (2.5px * 2));
		height: 250px;
		margin: 2.5px;
		border-radius: 5px;
		overflow: hidden;
		background-size: cover;
		background-position: top center;
		background-repeat: no-repeat;
	}
	#lightgallery>a:after {
		content: "\f00e";
		font-family: 'FontAwesome';
		position: absolute;
		display: block;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0;
		background: #00000050;
		color: #b03600;
		font-size: 30px;
		text-align: center;
		line-height: 250px;
		display: none;
	}
	#lightgallery>a:hover:after {
		display: block;
	}
	#lightgallery>a img {
		position: relative;
		display: block;
		width: 100%;
		height: 100%;
		max-width: 100%;
		opacity: 0;
	}
	@media (max-width: 1024px) {
		#lightgallery>a {
			height: 175px;
		}
		#lightgallery>a:after {
			line-height: 175px;
		}
	}
	@media (max-width: 800px) {
		#lightgallery>a {
			height: 135px;
		}
		#lightgallery>a:after {
			line-height: 135px;
		}
	}
	@media (max-width: 600px) {
		#lightgallery>a {
			width: calc(50% - (2.5px * 2));
		}
	}
	ul.video_gallery {
		position: relative;
		width: 100%;
		list-style: none;
		padding: 0;
		margin: 0;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		align-content: flex-start;
		justify-content: flex-start;
		align-items: flex-start;
	}
	ul.video_gallery li {
		position: relative;
		display: block;
		width: calc((100% / 3) - (15px * 2));
		margin: 15px;
	}
	.video_card {
		position: relative;
		display: block;
		width: 100%;
		border-radius: 10px;
		overflow: hidden;
		border: 1px solid #eee;
	}
	.video_card a {
		position: relative;
		display: block;
		width: 100%;
		height: 100%;
		background-color: #fff;
	}
	.video_card a:after {
		content: "\f04b";
		font-family: 'Fontawesome';
		position: absolute;
		top: calc(45% - (50px / 2));
		left: calc(50% - (50px / 2));
		width: 50px;
		height: 50px;
		line-height: 50px;
		text-align: center;
		font-size: 35px;
		color: #fff;
		pointer-events: none;
	}
	.video_card a:hover:after {
		color: #e69a05;
	}
	.video_card a img {
		position: relative;
		display: block;
		width: 100%;
		height: 300px;
	}
	.video_card a .video_title {
		position: relative;
		display: block;
		width: 100%;
		line-height: 1.5;
		font-size: 17px;
		color: #000;
		font-weight: 500;
		padding: 10px 15px;
	}
	@media (max-width: 1024px) {
		.video_card a img {
			height: 200px;
		}
	}
	@media (max-width: 800px) {
		.video_card a img {
			height: 235px;
		}
	}
	@media (max-width: 600px) {
		ul.video_gallery li {
			width: calc(100% - (15px * 2));
		}
		.video_card a img {
			height: 215px;
		}
	}
</style>

<script src="<?php echo $baseUrl; ?>assets/js/slick.min.js" defer></script>
<script>
	$(document).ready(function(){
		var window_height = $(window).height();
		var header_height = $('header').height();
		var hero_slider_height = window_height-header_height-70;
		$('#hero_slider, .hero_slider, .hero_slider .slider').height(hero_slider_height);
		$('.hero_slider').slick({
			autoplay: true,
			autoplaySpeed: 5000,
			infinite: true,
			dots: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			adaptiveHeight: false,
			fade: false,
			cssEase: 'linear'
		});
		$('.hero_slider .slick-prev').addClass('fa fa-chevron-left');
		$('.hero_slider .slick-next').addClass('fa fa-chevron-right');
		
		var window_width = $(window).width();
		var sliders_count = 4;
		if(window_width <= 600){
			sliders_count = 1;
		}else if(window_width >600 && window_width <= 800){
			sliders_count = 2;
		}else if(window_width > 800 && window_width <= 1024){
			sliders_count = 3;
		}
		$('.services').slick({
			autoplay: true,
			autoplaySpeed: 3000,
			infinite: false,
			dots: true,
			slidesToShow: sliders_count,
			slidesToScroll: 1,
			adaptiveHeight: true,
			fade: false,
			cssEase: 'linear'
		});

		if(window_width <= 800) {
			$('.video_gallery').slick({
				autoplay: false,
				autoplaySpeed: 3000,
				infinite: false,
				dots: false,
				slidesToShow: sliders_count,
				slidesToScroll: 1,
				adaptiveHeight: true,
				fade: false,
				cssEase: 'linear'
			});
		}
	});
</script>

<script src="<?php echo $baseUrl; ?>assets/js/simple-calendar.js" defer></script>
<script>
	var $calendar;
	$(document).ready(function () {
		let container = $("#events_calender").simpleCalendar({
			fixedStartDay: 0, // begin weeks by sunday
			disableEmptyDetails: true,
			events: [
				// generate new event after tomorrow for one hour
				{
					startDate: new Date(new Date().setHours(new Date().getHours() + 24)).toDateString(),
					endDate: new Date(new Date().setHours(new Date().getHours() + 25)).toISOString(),
					summary: 'Visit of the Eiffel Tower'
				},
				// generate new event for yesterday at noon
				{
					startDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 12, 0)).toISOString(),
					endDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 11)).getTime(),
					summary: 'Restaurant'
				},
				// generate new event for the last two days
				{
					startDate: new Date(new Date().setHours(new Date().getHours() - 48)).toISOString(),
					endDate: new Date(new Date().setHours(new Date().getHours() - 24)).getTime(),
					summary: 'Visit of the Louvre'
				},
				{
					startDate: new Date(new Date().setHours(new Date(1).getHours() - 36)).toISOString(),
					endDate: new Date(new Date().setHours(new Date(2).getHours() - 12)).getTime(),
					summary: 'Bheem House'
				}
			],
		});
		$calendar = container.data('plugin_simpleCalendar')
	});
</script>

<script src="<?php echo $baseUrl; ?>assets/js/lightgallery.js"></script>
<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        speed: 500
    });
</script>

<script src="<?php echo $baseUrl; ?>assets/js/lity.min.js" defer></script>