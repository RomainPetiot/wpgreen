		<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
			<div id="sidebar" class="sidebar" role="complementary">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</div>
		<?php endif; ?>
		</div><!-- end #content -->
		<div id="footer">
			<footer role="contentinfo" class="wrapper" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
				<nav id="nav-footer" role="navigation" aria-label="<?php esc_attr_e( 'Navigation secondaire', 'wpgreen' ); ?>"
				itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
					<?php wpgreen_footer_links('footer-links');?>
				</nav>
				<ul class="soc">
					<?php if(!empty(get_theme_mod( 'wpgreen_share_facebook' ))): ?>
						<li><a class="soc-facebook" href="<?php echo get_theme_mod( 'wpgreen_share_facebook' );?>" target="_blank"></a></li>
					<?php endif;?>
					<?php if(!empty(get_theme_mod( 'wpgreen_share_twitter' ))): ?>
						<li><a class="soc-twitter" href="<?php echo get_theme_mod( 'wpgreen_share_twitter' );?>" target="_blank"></a></li>
					<?php endif;?>
					<?php if(!empty(get_theme_mod( 'wpgreen_share_linkedin' ))): ?>
						<li><a class="soc-linkedin" href="<?php echo get_theme_mod( 'wpgreen_share_linkedin' );?>" target="_blank"></a></li>
					<?php endif;?>
				</ul>
			</footer> <!-- end .footer -->
		</div>

		<!-- MODAL -->
		<div class="modal" id="modal">
			<div class="modal-header">
				<h2 id="modal-title"></h2>
			</div>
			<div id="modal-content">
			</div>
			<div class="modal-footer">
				<p>
					<button class="button" onclick="closeModal()">
						&times; <?php _e('Fermer','wpgreen');?>
					</button>
				</p>
			</div>
		</div>
		<div class="overlay" id="overlay"></div>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
