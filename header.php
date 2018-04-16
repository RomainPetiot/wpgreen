<!doctype html>

  <html <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>

		<!-- Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
		<div class="" id="menuMobile">
			<div class="align-right">
				<i aria-hidden="true" id="times-menu" onclick="menuMobile()">&times;</i>
			</div>
			<?php  wpgreen_top_nav(); ?>
		</div>
		<div id="burger-menu" class="">&nbsp;</div>
		<header id="header" class="wrapper" role="banner">
			<div class="header-logo">
				<a href="<?php echo home_url();?>">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					if ( has_custom_logo() ) :
						echo wp_get_attachment_image( $custom_logo_id , 'wpgreen-logo' );
					else:
						echo get_bloginfo( 'name' );
					endif;
					?>
				</a>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php  wpgreen_top_nav(); ?>
			</nav>
		</header> <!-- end .header -->
		<div id="content" class="wrapper">
