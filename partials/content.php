<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-10">
			<section class="blog">
				<article>
					<?php if (has_post_thumbnail() ) {
						the_post_thumbnail();
						}
					?>
				<h2>
					<a href="<?php the_permalink();?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<div class="cat">
					<?php the_category(', '); ?>
				</div>
				<?php the_content(); ?>
				</article>
			</section>
		</div>
	</div>
</div>