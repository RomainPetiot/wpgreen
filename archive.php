<?php
get_header();
?>
	<div id="archive">
		<header class="wrapper" id="header-page">
			<h1 class="page-title"><?php echo single_cat_title( '', false );?></h1>
		</header>
		<div id="archive-actualite" class="wrapper">
			<?php if (have_posts()) :?>
				<div id="listing-article">
					<?php while ( have_posts() ) : the_post();?>
						<?php get_template_part( 'template-parts/loop', 'archive' );?>
					<?php endwhile;?>
					<div id="pagination">
						<?php wpgreen_page_navi();?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
