	
			</main>
			<?php if( !is_404() ): ?>
			<div class="row">
				<div class="contact-footer">
					<div class="wrapper">
						<h2 class="contact-footer__title"><?php the_field('footer_contact_titel', 'globale_instellingen'); ?></h2>
						<p class="contact-footer__paragraph"><?php the_field('footer_contact_tekst', 'globale_instellingen'); ?></p>
						<a class="contact-footer__button button button--green" href="<?php the_field('footer_contact_knop_link', 'globale_instellingen'); ?>"><?php the_field('footer_contact_knop_tekst', 'globale_instellingen'); ?></a>
					</div>
				</div>
				
				<div class="footer">
					<div class="wrapper">
						<div class="footer__logo">
							<a href="<?php echo home_url(); ?>">
								<img width="187" height="28" src="<?php echo get_template_directory_uri(); ?>/img/buro-rvv-logo-dark.svg" alt="Buro RVV Logo" class="footer__logo__img">
							</a>
						</div>
						<div class="footer__menu">
							<?php studio45_footer_nav(); ?>
						</div>
						<div class="footer__contact-information">
							<ul>
								<li><img width="13" height="13" src="<?php echo get_template_directory_uri(); ?>/img/icons/telephone.svg" alt="Telefoonnummer"> <?php the_field('telefoonnummer', 'globale_instellingen'); ?></li>
								<li><img width="16" height="12" src="<?php echo get_template_directory_uri(); ?>/img/icons/mail.svg" alt="E-mailadres"> <?php the_field('e-mailadres', 'globale_instellingen'); ?></li>
							</ul>
						</div>
						<p class="footer__address">
							<?php the_field('adres', 'globale_instellingen'); ?>
						</p>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
