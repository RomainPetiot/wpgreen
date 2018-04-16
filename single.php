<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<main id="main" role="main">
		<article>
			<header id="header-page">
				<h1 class="page-title"><?php the_title();?></h1>
			</header>

			<div id="excerpt">
				<?php the_excerpt();?>
			</div>

			<div id="thumbnail">
				<?php the_post_thumbnail( 'wpgreen-full'); ?>
			</div>

			<section class="entry-content" itemprop="articleBody">
				<b><?php
					_e('publié le ', 'wpgreen');
					echo get_the_date();
					_e(' par ', 'wpgreen');
					the_author();?>
				</b>
				<hr>
				<?php the_content(); ?>
			</section>
			<footer class="article-footer">
				<!-- share -->
				<ul class="soc">
				    <li><a class="soc-twitter" href="http://www.twitter.com/share?url=<?php the_permalink();?>" target="_blank"></a></li>
				    <li><a class="soc-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank"></a></li>
				    <!--<li><a class="soc-googleplus" href="#"></a></li>
				    <li><a class="soc-pinterest" href="#"></a></li>-->
				    <li><a class="soc-linkedin" href="https://www.linkedin.com/cws/share?url=<?php the_permalink();?>" target="_blank"></a></li>
				</ul>
			</footer>
		</article>
	</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
