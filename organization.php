<?php $page_title = 'Organization'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Organization</title>
	<?php include('components/header_links.php'); ?>
	<style>
		.custom_btn {
			z-index: 1;
			white-space: nowrap;
		}
		.clogo {
			position: relative;
			display: block;
			width: 100%;
			margin-bottom: 150px;
		}
		.clogo img {
			position: relative;
			display: block;
			width: auto;
			height: 135px;
			margin: auto;
		}
		.section .container-fluid {
			overflow-x: auto;
		}
		ul.organization {
			position: relative;
			display: block;
			width: 100%;
			list-style: none;
			padding: 0;
			margin: 0;
			min-width: 985px;
		}
		ul.organization>li {
			position: relative;
			width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: center;
			justify-content: space-around;
			align-items: center;
		}
		ul.organization>li+li {
			margin-top: 150px;
		}
		ul.organization>li>div {
			position: relative;
			width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			align-content: center;
			justify-content: space-around;
			align-items: center;
		}
		ul.organization>li:first-child:after {
			content: '';
			background-color: #999;
			width: 3px;
			height: 150px;
			position: absolute;
			left: calc(50% - (3px/2));
			z-index: 0;
			bottom: -150px;
		}
		ul.organization>li:before {
			content: '';
			border-top: 3px solid;
			border-left: 3px solid;
			border-right: 3px solid;
			border-color: #999;
			margin: auto;
			height: 75px;
			position: absolute;
			top: -75px;
			z-index: 0;
		}
		ul.organization>li:nth-child(2)::before {
			width: 65%;
		}
		ul.organization>li:nth-child(3)::before, ul.organization>li:nth-child(4)::before {
			width: 50%;
		}
		ul.organization>li:nth-child(5)::before {
			display: none;
		}
		ul.organization>li:nth-child(5)>div:first-child:before {
			content: '';
			border-top: 3px solid;
			border-left: 3px solid;
			border-right: 3px solid;
			border-color: #999;
			margin: auto;
			height: 75px;
			position: absolute;
			top: -75px;
			width: 60%;
			z-index: 0;
		}
		ul.organization>li:nth-child(2)>div:nth-child(1)+div:before {
			content: '';
			background-color: #999;
			width: 3px;
			height: 274px;
			position: absolute;
			left: calc(50% - (3px/2));
			top: 47px;
			z-index: 0;
		}
		ul.organization>li:nth-child(4)>div:before {
			content: '';
			background-color: #999;
			width: 3px;
			position: absolute;
			left: calc(50% - (3px/2));
			top: 47px;
			z-index: 0;
		}
		ul.organization>li:nth-child(4)>div:nth-child(1):before {
			height: 75px;
		}
		ul.organization>li:nth-child(4)>div:nth-child(2):before {
			height: 150px;
		}
		ul.organization>li:last-child {
			margin-top: 75px;
		}
		ul.organization>li:last-child:before {
			display: none;
		}
		ul.organization>li:last-child>div {
			justify-content: flex-start;
			padding-left: 50px;
		}
		ul.organization>li:nth-child(5)>div:first-child:after {
			content: '';
			background-color: #999;
			width: 3px;
			position: absolute;
			left: 20%;
			top: 47px;
			height: 75px;
			z-index: 0;
		}
	</style>
</head>

<body>
	<?php include('components/header.php'); ?>

	<main>

		<?php include('components/page_banner.php'); ?>

		<section id="organization_structure" class="section">
			<div class="container-fluid">
				<ul class="organization">
					<li>
						<img src="<?php echo $baseUrl; ?>assets/imgs/logos/logo.png" alt="Logo">
					</li>
					<li>
						<div>
							<a href="<?php echo $baseUrl; ?>organization-advisory-council" class="custom_btn">Advisory Council</a>
						</div>
						<div>
							<a href="<?php echo $baseUrl; ?>organization-president" class="custom_btn">President</a>
						</div>
						<div>
							<a href="<?php echo $baseUrl; ?>organization-founding-members" class="custom_btn">Founding Members</a>
						</div>
					</li>
					<li>
						<div>
							<a href="<?php echo $baseUrl; ?>organization-executive-committe" class="custom_btn">Executive Committe</a>
						</div>
						<div>
							<a href="<?php echo $baseUrl; ?>organization-board-of-directors" class="custom_btn">Board of Directors</a>
						</div>
					</li>
					<li>
						<div>
							<a href="<?php echo $baseUrl; ?>organization-executive-vice-president" class="custom_btn">Executive Vice-President</a>
						</div>
						<div>
							<a href="<?php echo $baseUrl; ?>organization-executive-director" class="custom_btn">Executve Director</a>
						</div>
					</li>
					<li>
						<div>
							<a href="<?php echo $baseUrl; ?>organization-regional-vice-president" class="custom_btn">Regional Vice-President</a>
							<a href="<?php echo $baseUrl; ?>organization-international-vice-president" class="custom_btn">International Vice-President</a>
						</div>
						<div>
							<a href="<?php echo $baseUrl; ?>organization-standing-committe" class="custom_btn">Standing Committe</a>
						</div>
					</li>
					<li>
						<div>
							<a href="<?php echo $baseUrl; ?>organization-regional-coordinator" class="custom_btn">Regional Co-ordinator</a>
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