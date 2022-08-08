<?php
/**
  * Template Name: Мы и общество
*/
?>
<?php get_header('single');?>
<section class="media">
        <div class="wrapper">
            <h2 class="section-head"><?php wp_title("", true); ?></h2>
            <div class="box">
                <?php
                    $month_list = array(
                        1  => 'Января',
                        2  => 'Февраля',
                        3  => 'Марта',
                        4  => 'Апреля',
                        5  => 'Мая', 
                        6  => 'Июня',
                        7  => 'Июля',
                        8  => 'Августа',
                        9  => 'Сентября',
                        10 => 'Октября',
                        11 => 'Ноября',
                        12 => 'Декабря'
                    );
                    if ( get_query_var('paged') ) { 
                        $paged = get_query_var('paged'); 
                    } 
                    else if ( get_query_var('page') ) {
                        $paged = get_query_var('page'); 
                    } else {
                        $paged = 1; 
                    }								
                    $args = array(
                                    'post_type' => 'society',
                                    'post_status'       => 'publish',
                                    'paged'             => $paged,
                                    'posts_per_page'    => 16
                                );
                    $temp = $wp_query;
                    $wp_query= null;
                    $wp_query = new WP_Query($args);
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();?>
                        <div class="box__half box__half--df">
                            <a class="media__cover media--before" href="<?php echo get_permalink($posts['ID']); ?>" style="background-image: url(<?php the_post_thumbnail_url(  )?>);">
                                <h3 class="media__cover__title"><? the_title(); ?></h3>
                                <p class="media__cover__date"><? echo $month_list[date(get_the_date('n'))];?>  <?echo get_the_date('j');?>,  <?echo get_the_date('Y');?></p>
                            </a>
                        </div>
                    <? endwhile;?>       
            </div>
            <?the_posts_pagination( array('mid_size' => 3) );								
            $wp_query = null;								
            $wp_query = $temp;								
            wp_reset_query();?>
        </div>
    </section>
<?php get_footer();?>