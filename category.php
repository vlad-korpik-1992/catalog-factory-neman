<?php get_header('single');?>
<section class="media">
        <div class="wrapper">
            <h2 class="section-head"><?php single_cat_title(); ?></h2>
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
                    if ( is_single() ) {
                        $cats =  get_the_category();
                        $cat = $cats[0];
                    } else {
                        $cat = get_category( get_query_var('cat') );
                    }	
                    $cat_slug = $cat->slug;						
                    $args = array(  
                                    'category_name' => $cat_slug,
                                    'post_type' => 'post',
                                    'post_status'       => 'publish',
                                    'paged'             => $paged,
                                    'posts_per_page'    => 9
                                );
                    $temp = $wp_query;
                    $wp_query= null;
                    $wp_query = new WP_Query($args);
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
                        $categories = get_the_category($posts['ID']);?>
                        <div class="box__half box__half--df">
                            <a class="media__cover media--before" href="<?php echo get_permalink($posts['ID']); ?>" style="background-image: url(<?php the_post_thumbnail_url(  )?>);">
                                <?foreach( $categories as $category ) :?>
                                    <p class="media__cover__category"><? echo $category->name; ?></p>
                                <?endforeach;?>
                                <h3 class="media__cover__title"><? the_title(); ?></h3>
                                <p class="media__cover__date"><? echo $month_list[date(get_the_date('n'))];?>  <?echo get_the_date('j');?>,  <?echo get_the_date('Y');?></p>
                            </a>
                        </div>
                    <? endwhile;
                    the_posts_pagination( array('mid_size' => 3) );								
                    $wp_query = null;								
                    $wp_query = $temp;								
                    wp_reset_query();?>
            </div>
        </div>
    </section>
<?php get_footer();?>