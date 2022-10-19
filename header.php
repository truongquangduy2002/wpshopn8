<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta charset="<?php bloginfo(‘charset’) ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <title>Website bán hàng đơn giản</title> -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/main.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wallpaper">
		<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<p>Chào mừng đến với shop bán hàng!</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="top-menu">
								<ul>
									<?php wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'container' => 'false',
											'menu_id' => 'primary',
											'menu_class' => 'primary'
										)
									); ?>
									<!-- <li><a href="#">Giỏ hàng</a></li>
									<li><a href="#">Cửa hàng</a></li>
									<li><a href="#">Tài khoản</a></li>
									<li><a href="#">Liên hệ</a></li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-0 order-0">
							<div class="logo">
								<a href="<?php bloginfo( 'url' ) ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt=""></a>
								<h1>Website bán hàng</h1>
							</div>
						</div>
						<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-md-1 order-2">
							<div class="form-seach-product">
								<form action="/" method="GET" role="form">
									<select name="" id="input" class="form-control" required="required">
										<option value="">Chọn danh mục</option>
										<option value="1">Điện thoại</option>
										<option value="2">Máy tính bản</option>
										<option value="3">Lap top</option>
										<option value="4">Phụ kiện</option>
									</select>
									<div class="input-seach">
										<input type="text" name="s" id="" class="form-control">
										<button type="submit" class="btn-search-pro"><i class="fa fa-search"></i></button>
									</div>
									<div class="clear"></div>
								</form>
							</div>
						</div>
						<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-2 order-1" style="text-align: right">
							<a href="<?php bloginfo( 'url' ) ?>/gio-hang" class="icon-cart">
								<div class="icon">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
									<span>3</span>
								</div>
								<div class="info-cart">
									<p>Giỏ hàng</p>
									<span>2.500.000đ</span>
								</div>
								<span class="clear"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="main-menu-header">
				<div class="container">
					<div id="nav-menu">

						<?php wp_nav_menu(
							array(
								'theme_location' => 'header',
								'container' => 'false',
								'menu_id' => 'header',
								'menu_class' => 'header'
							)
						); ?>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>
		<div id="content">
			<div class="container">
			<?php get_template_part('slider'); ?>
			</div>