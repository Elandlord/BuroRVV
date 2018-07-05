<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<div class="page">
		<div class="wrapper">
			
			<div class="breadcrumbs">
				<?php
				if( function_exists('yoast_breadcrumb') ){
					yoast_breadcrumb('','');
				}
				?>
			</div>
			
			<h1 class="page_title"><?php the_title(); ?></h1>
			
			<?php if( have_rows('smartwidgets') ): ?>
			<div class="grid l-gutter">
				<div class="grid__col grid__col--2-of-3">
			<?php endif; ?>
					<div class="page__main-content">
						<?php
							if( has_post_thumbnail() ):
								$caption = get_post(get_post_thumbnail_id())->post_excerpt;
						?>
						<div class="page__main-content__thumbnail">
							<?php the_post_thumbnail(); ?>
							<?php if( $caption !== '' ): ?>
							<div class="page__main-content__thumbnail__caption">
								<?php echo $caption; ?>
							</div>
							<?php endif; ?>
						</div>
						<?php 
							endif;
							the_content();
						?> 
					</div>
				<?php if( have_rows('smartwidgets') ): ?>
				</div>
				<div class="grid__col grid__col--1-of-3">
					<div class="page__side-content">
						<?php while ( have_rows('smartwidgets') ): the_row(); ?>
						<div class="smartwidget">
							<h2 class="smartwidget__title"><?php the_sub_field('titel'); ?></h2>
							<p class="smartwidget__paragraph"><?php the_sub_field('tekst'); ?></p>
							<?php
							$link_naar = get_sub_field('link_naar');
							$intro_url = '#';
							if( $link_naar === 'pagina' ){
								$intro_url = get_sub_field('pagina_link');
							}else if( $link_naar === 'anders' ){
								$intro_url = get_sub_field('url');
							}
							?>
							<a class="smartwidget__button button button--ghost button--white" href="<?php echo $intro_url; ?>"><?php the_sub_field('knop_tekst'); ?></a>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
	
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
