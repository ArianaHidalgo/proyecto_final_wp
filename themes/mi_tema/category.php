<?php get_header() ?>
<?php if (have_posts()) { ?>
	<h2 class="text-center mb-5"><?php single_term_title(); ?></h2>
	<?php while ( have_posts() ){ the_post(); ?>
	<div class="caja text-center my-5 py-5">
            <h4><?php the_title();?></h4>
            <?php the_post_thumbnail('square',array( 'class' => 'rounded-circle w-80 h-auto ml-190' )); ?>
			<p> <?php the_excerpt(); ?></p>
			<p><?php the_tags ('<span class="text-warning">#</span>',' <span class="text-warning">#</span>', '' ); ?></p>
            <p class= "text-center"><a href="<?php the_permalink(); ?>" class="btn btn-info btn-sm my-3 ">Ver Mas</a></p>  
        </div>

	<?php }; ?>
	<?php } else { ?>
		<h2 class="text-center mb-5">No Hay Elementos</h2>
	<?php } wp_reset_query(); ?>

<?php get_footer() ?>