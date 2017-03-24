<?php get_header(); ?>

<?php if( have_posts() ) :?>
	<?php while ( have_posts()) : the_post(); ?>
		<section class="standard s-guide">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
					<?php if ( get_field('img') ) : ?>
					<img src="<?php the_field('img'); ?>" />
					<?php else : ?>
					<div class="placeholder"></div>
					<?php endif; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<h1><?php the_title(); ?></h1>
						<p>
							<strong class="">Arbetat som guide </strong><?php the_field('work'); ?>
						</p>
						<p>
							<strong class="">Behärskar språken </strong><?php the_field('language'); ?>
						</p>
						<p>
							<strong class="">Favoritaktiviteten är</strong> <?php the_field('favorit'); ?>
						</p>
						<p>
							<strong class="">Tips från guiden</strong><br />
							<?php the_field('tips'); ?>
						</p>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>