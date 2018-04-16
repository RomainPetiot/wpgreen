<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<main id="main" role="main">
		<article>
			<header class="wrapper" id="header-page">
				<h1 class="page-title"><?php the_title();?></h1>
			</header>

			<div class="wrapper" id="excerpt">
				<?php the_excerpt();?>
			</div>

			<div class="wrapper" id="thumbnail">
				<?php the_post_thumbnail( 'wpgreen-full'); ?>
			</div>

			<section class="entry-content wrapper" itemprop="articleBody">
				<b><?php
					__('publié le', 'wpgreen');
					echo get_the_date();
					__('par', 'wpgreen');
					the_author();?>
				</b>
				<hr>
				<?php the_content(); ?>
				<hr>
			</section>
			<footer class="article-footer wrapper">
				<!-- share -->
			</footer>
		</article>
	</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
