<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<article class="mb-5 container">
    <div class="text-center my-3">
		<p><i class="fas fa-calendar-alt"></i>
		<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
	</p>
		<h2><?php the_title() ?></h2>
		<?php the_post_thumbnail('detail', array('class' => 'w-100 h-auto my-4')); ?>
        <h4><?php the_category(' '); ?></h4>
        <p><?php the_tags ('<span class="text-warning">#</span>',' <span class="text-warning">#</span>', '' ); ?></p>
    </div>
    <div>
        <?php the_content() ?>
	</div>
	<p class= "text-center"><a href="?page_id=57" class="btn btn-info btn-sm my-5">Volver al Blog</a></p>
</article>
	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_footer() ?>