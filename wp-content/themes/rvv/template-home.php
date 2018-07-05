<?php /* Template Name: Hoofdpagina */ get_header(); ?>
	
	<div class="wrapper">
		<div class="intro">
			<?php
			if( have_rows('intros') ):
				while ( have_rows('intros') ): the_row();
					$icon = get_sub_field('icon');
					$icon_url = $icon['sizes']['icon'];
			?>
			<div class="intro-item">
				<img class="intro-item__icon" width="140" height="80" src="<?php echo $icon_url; ?>" alt="<?php the_sub_field('titel'); ?>">
				<h2 class="intro-item__title"><?php the_sub_field('titel'); ?></h2>
				<?php
				$link_naar = get_sub_field('link_naar');
				$intro_url = '#';
				if( $link_naar === 'pagina' ){
					$intro_url = get_sub_field('pagina_link');
				}else if( $link_naar === 'anders' ){
					$intro_url = get_sub_field('url');
				}
				?>
				
				<a class="intro-item__button button button--ghost button--white" href="<?php echo $intro_url; ?>"><?php the_sub_field('knop_tekst'); ?></a>
			</div>
			<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
	
	<div class="wrapper">
		<div class="services">
			<h2 class="services__title"><?php the_field('kennisgebieden_titel'); ?></h2>
			<div class="services__list">
				<div class="grid m-gutter">
					<?php
					if( have_rows('kennisgebieden') ):
						while ( have_rows('kennisgebieden') ): the_row();
					?>
					<div class="grid__col grid__col--1-of-3 grid__col--m-1-of-2">
						<div class="service">
							<h3 class="service__title"><?php the_sub_field('titel'); ?></h3>
							<p class="service__paragraph"><?php the_sub_field('tekst'); ?></p>
							<a class="service__button button button--ghost button--purple" href="<?php the_sub_field('knop_link'); ?>"><?php the_sub_field('knop_tekst'); ?></a>
						</div>
					</div>
					<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="team">
		<div class="wrapper">
			<h2 class="team__title"><?php the_field('team_titel'); ?></h2>
			<p class="team__paragraph"><?php the_field('team_tekst'); ?></p>
			<div class="team__list">
				<div class="team__list__row">
				<?php
				$teamleden_index = 0;
				$teamleden_count = count( get_field('teamleden') );
				if( have_rows('teamleden') ):
					while ( have_rows('teamleden') ): the_row();  $teamleden_index++;
						$avatar = get_sub_field('avatar');
						$avatar_url = $avatar['sizes']['avatar'];
						if( $teamleden_index % 3 === 1 && $teamleden_index !== 1 ):
				?>
				</div>
				<div class="team__list__row">
				<?php
						endif;
				?>
					<div class="team-member">
						<div class="team-member__avatar">
							<div class="team-member__avatar__mask">
								<img width="105" height="105" src="<?php echo $avatar_url; ?>">
							</div>
						</div>
						<div class="team-member__info">
							<h3 class="team-member__info__name"><?php the_sub_field('naam'); ?></h3>
							<div class="team-member__info__job-description"><?php the_sub_field('functie'); ?></div>
						</div>
					</div>
				<?php
						if( $teamleden_index === $teamleden_count ):
							if( $teamleden_index % 3 === 0 ):
				?>
				</div>
				<div class="team__list__row">
				<?php
							endif;
						endif;
					endwhile;
				endif;
				?>
				</div>
			</div>
			<a class="team__button button button--pink" href="<?php the_field('team_knop_link'); ?>"><?php the_field('team_knop_tekst'); ?></a>
		</div>
	</div>
	
<?php get_footer(); ?>
