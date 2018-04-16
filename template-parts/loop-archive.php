<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<header class="article-header">
		<h2>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
	</header> <!-- end article header -->
	<div class="image">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('400'); ?></a>
		<hr>
	</div>
	<section class="entry-content" itemprop="articleBody">
		<?php the_excerpt(); ?>
		<p>
			<a href="<?php the_permalink() ?>" class="button more" title="en savoir plus">
				more
			</a>
		</p>
	</section>
</article> <!-- end article -->
