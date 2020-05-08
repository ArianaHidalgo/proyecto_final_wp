<?php get_header(); ?>
<div class="container">
        <h1 class="text-center ">Blog</h1>

        <?php $arg= array( 
            'post_type' => 'post',
            'posts_per_page' => 10,
            'paged'  => $paged

        );
        $get_arg = new WP_Query( $arg); 

            while ($get_arg->have_posts() ) {
                $get_arg->the_post();
            
        ?>
        <div class="caja">
            <h4><?php the_title();?></h4>
            <?php the_post_thumbnail('square',array( 'class' => 'rounded-circle w-80 h-auto ml-190' )); ?>
            <p> <?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-info btn-sm my-3 ">Ver Mas</a>  
        </div>
        <?php } wp_reset_postdata();?> <!-- cierre loop category -->
    </div>

<?php get_footer(); ?>