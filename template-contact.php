<?php
/*
Template Name: Contact
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
					<form id="form-contact" name="form-contact" action="<?php the_permalink();?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="action" value="formContact">
						<?php wp_nonce_field('nonceformContact', 'nonceformContact'); ?>
						<div class="content-form">

							<label for="name"><?php _e('Votre nom :', 'wpgreen');?></label>
							<input type="text" name="name" id="name" required="required" placeholder="nom*">

							<label for="firstname"><?php _e('Votre prénom :', 'wpgreen');?></label>
							<input type="text" name="firstname" id="firstname" required="required" placeholder="prénom*">

							<label for="email"><?php _e('Votre email :', 'wpgreen');?></label>
							<input type="email" name="email" id="email" required="required" placeholder="email*">

							<label for="phone"><?php _e('Votre numéro de téléphone :', 'wpgreen');?></label>
							<input type="tel" name="phone" id="phone" required="required" placeholder="téléphone*" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">

							<label for="file"><?php _e('Envoyer un fichier (image ou pdf) :', 'wpgreen');?></label>
							<input type="file" name="file" id="file" placeholder="votre fichier" accept="image/*, application/pdf">

							<label for="comment"><?php _e('Votre message :', 'wpgreen');?></label>
							<textarea name="comment" id="comment" placeholder="message" required="required"></textarea>

							<div class="container-button">
								<div class="g-recaptcha" data-callback="wpgreen_recaptchaCallback" data-sitekey="6Lce1FIUAAAAAIbVHN6BdkMEZgI9_nbh2G_d5s4K"></div>
								<button type="submit" class="button" disabled id="submitBtn">Envoyer</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</main>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
