<?php
/**
  * Template Name: Рукводство
*/
?>
<?php get_header('single');?>
    <section class="management">
        <div class="wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
            <div class="box">
                <?if( have_rows('management') ):
                    while ( have_rows('management') ) : the_row();?>
                        <div class="box__three box__three--pb">
                            <img class="management__img" src="<? the_sub_field('image_management'); ?>" alt="">
                            <h2 class="management__title"><? the_sub_field('title_management'); ?></h2>
                            <p class="management__subtitle"><? the_sub_field('desc_management'); ?></p>
                        </div>
                    <?endwhile;
                endif;?>
            </div>
        </div>
    </section>
<?php get_footer();?>