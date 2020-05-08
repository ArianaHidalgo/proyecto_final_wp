<?php get_header() ?>
<?php get_template_part('_includes/main', 'section') ?>
<div class="container text-center my-5">
	<h3 class="text-center my-5">Error 404:</h3>
	<h4 class="text-center my-5">Página no encontrada</h4>
	<p><a href="<?php echo get_home_url(); ?>" class="btn btn-warning btn-lg mt-5">Vuelve a la pagina de inicio</a></p>
</div>
<?php get_footer() ?>