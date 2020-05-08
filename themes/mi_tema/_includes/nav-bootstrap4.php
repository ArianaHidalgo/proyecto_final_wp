<nav class="navbar navbar-expand-lg navbar-light bg-gray" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<a class="navbar-brand" href="<?php bloginfo('url') ?>"><img src="<?php echo get_theme_file_uri() ?>/assets/images/logo-azir.svg" alt="logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

		<div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
		<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
			<?php wp_nav_menu( array(
				'theme_location'	=> 'header-menu',
				'depth'				=> 2,
				'container'			=> false,
				'menu_class'		=> 'navbar-nav mr-auto',
				'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
				'walker'			=> new WP_Bootstrap_Navwalker(),
			) ); ?>
		<?php } ?>
		<?php if ( is_active_sidebar( 'menu-widget' ) ) { ?>
			<?php dynamic_sidebar( 'menu-widget' ); ?>
		<?php }; ?>
		</div>
	</div>
</nav>
