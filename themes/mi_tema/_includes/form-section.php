<?php the_post() ?>
<div class="my-5 container">
	<h2 class="text-center mb-5" style="color:#2EC6BB;">Resevas</h2>
	<?php the_content(); ?>
</div>
	
	<?php if ( is_active_sidebar( 'contact-widget' ) ) { ?>
		<?php dynamic_sidebar( 'contact-widget' ); ?>
	<?php }; ?>