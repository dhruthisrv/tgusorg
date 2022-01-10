<?php $page_title = 'Videos'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Videos</title>
	<?php include('components/header_links.php'); ?>
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/lity.min.css" defer>

	<style>
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
		.year_filter {
			position: relative;
			width: auto;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: center;
			justify-content: flex-end;
			align-items: center;
			margin-right: 3px;
		}
		.year_filter label {
			position: relative;
			display: block;
			width: auto;
			margin-right: 5px;
			font-size: 18px;
			color: #333;
			font-weight: 400;
			margin-bottom: 0;
			white-space: nowrap;
			line-height: 1;
		}
		.year_filter select {
			position: relative;
			display: block;
			width: auto;
			height: 35px;
			padding: 0 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			line-height: 1;
		}
		.filter_tags {
			position: relative;
			display: block;
			width: 100%;
			margin-bottom: 25px;
		}
		.filter_tags ul {
			position: relative;
			width: 100%;
			list-style: none;
			padding: 0;
			margin: 0;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			align-content: flex-start;
			justify-content: center;
			align-items: flex-start;
		}
		.filter_tags ul li {
			position: relative;
			display: block;
			width: auto;
		}
		.filter_tags ul li+li {
			margin-left: 10px;
		}
		.filter_tags ul li input {
			position: absolute;
			display: block;
			width: 100%;
			height: 100%;
			left: 0;
			top: 0;
			z-index: 1;
			cursor: pointer;
			opacity: 0;
		}
		.filter_tags ul li input+p {
			position: relative;
			display: block;
			width: 100%;
			line-height: 1;
			white-space: nowrap;
			margin: 0;
			color: #b03600;
			font-size: 15px;
			padding: 7.5px 15px;
			border: 1px solid #b03600;
			border-radius: 5px;
		}
		.filter_tags ul li input:checked+p {
			background-color: #b03600;
			color: #fff;
		}
	</style>
</head>
<body>
	<?php include('components/header.php'); ?>

	<main>

		<?php include('components/page_banner.php'); ?>

		<section id="videos" class="section">
			<div class="container-fluid">
				<div class="section_title">
					<h3>Video Gallery</h3>
					<div class="year_filter">
						<label>Select Year</label>
						<select name="year">
							<?php 
								$present_year = date('Y');
								for($i=0;$i<=22;$i++){
									$year = $present_year-$i;
							?>
							<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="section_content">
					<div class="filter_tags">
						<ul>
							<li>
								<input type="radio" name="gallery_filter" value="all" checked="true">
								<p>Show All</p>
							</li>
							<li>
								<input type="radio" name="gallery_filter" value="test1">
								<p>Test1</p>
							</li>
							<li>
								<input type="radio" name="gallery_filter" value="test2">
								<p>Test2</p>
							</li>
						</ul>
					</div>
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

<script src="<?php echo $baseUrl; ?>assets/js/lity.min.js" defer></script>