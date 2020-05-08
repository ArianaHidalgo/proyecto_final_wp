<?php get_header() ?>
	 
<?php get_template_part('_includes/main', 'section') ?>

	<?php the_post() ?>
<div class="my-5 container">
	<h2 class="text-center mb-5"><?php the_title() ?></h2>
	<?php the_content(); ?>
</div>
	
	<?php if ( is_active_sidebar( 'contact-widget' ) ) { ?>
		<?php dynamic_sidebar( 'contact-widget' ); ?>
	<?php }; ?>

<?php get_footer() ?>