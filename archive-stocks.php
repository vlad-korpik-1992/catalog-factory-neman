<?php
/**
  * Template Name: Акции
*/
?>
<?php get_header('single');?>
    <section class="stock">
        <div class="wrapper">
            <h1 class="section-head"><?php wp_title("", true); ?></h1>
            <?php
                if ( get_query_var('paged') ) { 
                    $paged = get_query_var('paged'); 
                } 
                else if ( get_query_var('page') ) {
                    $paged = get_query_var('page'); 
                } else {
                    $paged = 1; 
                }								
                $args = array(
                                'post_type' => 'stocks',
                                'post_status'       => 'publish',
                                'paged'             => $paged,
                                'posts_per_page'    => 16
                            );
                $temp = $wp_query;
                $wp_query= null;
                $wp_query = new WP_Query($args);
                while ($wp_query -> have_posts()) : $wp_query -> the_post();?>
                    <a class="stock__box" href="<?php echo get_permalink($posts['ID']); ?>">
                        <div class="stock__box__items">
                            <div class="stock__box__date"><?php the_field('data_stock', $posts['ID']);?></div>
                            <div class="stock__box__title"><?php echo the_title();?></div>
                        </div>
                        <div class="stock__box__circle">
                            <img class="stock__box__circle__img" src="<?php the_field('img_stock', $posts['ID']);?>" alt="<?php echo $posts['post_title'];?>">
                        </div>
                    </a>
                <?php								
                endwhile;								
                the_posts_pagination( array('mid_size' => 3) );								
                $wp_query = null;								
                $wp_query = $temp;								
                wp_reset_query();							
            ?>
        </div>
    </section>
<?php get_footer();?>