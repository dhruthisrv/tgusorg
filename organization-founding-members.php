<?php $page_title = 'Founding Members'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Founding Members</title>
	<?php include('components/header_links.php'); ?>
</head>
<body>
	<?php include('components/header.php'); ?>

	<main>

		<?php include('components/page_banner.php'); ?>

		<section id="members" class="section">
			<div class="container-fluid">
				<ul class="organization_members">
					<li>
						<div class="member_card">
							<div class="member_img" style="background-image: url('<?php echo $baseUrl; ?>assets/imgs/members/president.png');"></div>
							<div class="member_info">
								<p class="name">Name</p>
								<p class="position">Position</p>
								<p class="place">Place</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>

	</main>

	<?php include('components/footer.php'); ?>
	<?php include('components/footer_links.php'); ?>
</body>
</html>