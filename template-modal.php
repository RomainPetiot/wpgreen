<?php
/*
Template Name: Modal
*/
get_header();
?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<main id="main" role="main">
			<div id="home-main" class="wrapper">
				<div id="home-title">
					<h1><?php the_title();?></h1>
				</div>
				<div id="home-content">
					<?php the_content();?>
					<p class="text-center">
						<button id="BtnOpenModal" class="button" onclick="openModal('title modal', 'content Modal')">Open Modal</button>
					</p>
				</div>
			</div>
		</main>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
