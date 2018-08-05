<?php
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php wp_title( '|', true, 'right' ); ?>
		<?php bloginfo( 'name' ); ?>
	</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Work+Sans:300,400,500,700" rel="stylesheet">

	<!-- Fontawesome CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" href="<?php echo IMAGES . '/icons/favicon.ico'; ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class() ?>>
	<!-- START: Header -->
	<div class="header" style="background: url('<?php echo IMAGES; ?>/home-7.jpg') no-repeat fixed; background-size: cover;">
		<div class="bg-color">
			<nav class="navbar navbar-expand-lg fixed-top my-nav">
				<div class="container">
					<!-- Brand -->
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo IMAGES; ?>/logo-white.png" alt="" class="white-logo">
						<img src="<?php echo IMAGES; ?>/logo-black.png" alt="" class="black-logo">
					</a>

					<!-- Collapse -->
					<a href="#" class="navbar-toggler">
						<span class="icon-burger">
							<span class="ib-1"></span>
							<span class="ib-2"></span>
							<span class="ib-3"></span>
						</span>
					</a>

					<!-- Links -->
					<div class="collapse navbar-collapse" id="mynavbar">
						<ul class="navbar-nav ml-auto my-nav-ul">
							<li class="nav-item">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
							</li>
							<li class="nav-item">
								<a href="#blog">Blog</a>
							</li>
							<li class="nav-item">
								<a href="#contact">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="wrapper-header">
				<div class="container text-center">
					<h2 class="wh-h2">New Branding Agency</h2>
					<h1 class="wh-h1">
						We are about to change the way
						<br>
						<i>you publish on the web</i>
					</h1>
					<a href="">
						<button type="submit" class="btn btn-submit wh-button">Free Download</button>
					</a>
				</div>
			</div>

			<div class="angle-down">
				<a href="#blog">
					<i class="fa fa-angle-down"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- END: Header -->