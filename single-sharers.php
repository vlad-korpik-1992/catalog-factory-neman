<?php get_header('single');?>
    <section class="post">
        <div class="wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
            <div class="post__box">
                <? the_content(); ?>
            </div>
        </div>
    </section>
<?php get_footer();?>