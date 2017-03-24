</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<?php the_field( 'info' , 'options');?>
			</div>
			<div class="col-xs-10 col-sm-5">
				<?php 
					$socialt = get_field('socialt' , 'options');
					if ($socialt) :
				 ?>
				<ul>
					<?php foreach ($socialt as $item) : ?>
						<li>
							<a href="<?php echo $item['link']; ?>">
								<i class="fa fa-<?php echo $item['service']; ?>"></i>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>