<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-12 text-center">
					<a href="<?php bloginfo('url'); ?>" class="logo" >
	                    <?php
							if ( get_field('logo' , 'options') ){
								echo '<img src="'.get_field("logo","options").'">';
							} 
							else {
								bloginfo('name');
							}
						?>
	                </a>
			</div>
			<div class="col-md-6 col-md-offset-2 hidden-xs hidden-sm bigmenu">
				<?php wp_nav_menu(); ?>
			</div>
			<div class="col-xs-4 text-right visible-xs visible-sm">
				<div class="mobile-menu-wrap">
					<i class="fa fa-bars menu-icon"></i>
				</div>
			</div>
		</div>
	</div>
</header>


<nav id="nav">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php get_search_form();?>
				<?php wp_nav_menu(); ?>
			</div>
		</div>
	</div>
</nav>


<main>