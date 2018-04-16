<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<main id="main" role="main">
			<div id="home-main" class="wrapper">
				<div id="home-title">
					<h1><?php the_title();?></h1>
				</div>
				<div id="home-content">
					<?php the_content();?>
				</div>
			</div>
		</main>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
