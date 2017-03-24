<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<section class="standard a-guide">
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-xs-3">
				<?php if ( get_field('img') ) : ?>
				<img src="<?php the_field('img'); ?>" class="image" />
				<?php else : ?>
				<div class="placeholder"></div>
				<?php endif; ?>
					<a href="<?php echo get_permalink( get_field('movie') ); ?>">
						<h2><?php echo get_the_title( get_field('movie') ); ?></h2>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>