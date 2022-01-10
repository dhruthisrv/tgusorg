<?php $page_title = 'Gallery'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<?php include('components/header_links.php'); ?>
	<link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/lightgallery.css" defer>

	<style>
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

		<section id="gallery" class="section">
			<div class="container-fluid">
				<div class="section_title">
					<h3>Image Gallery</h3>
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

	</main>

	<?php include('components/footer.php'); ?>
	<?php include('components/footer_links.php'); ?>
</body>
</html>

<script src="<?php echo $baseUrl; ?>assets/js/lightgallery.js"></script>
<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        speed: 500
    });
</script>