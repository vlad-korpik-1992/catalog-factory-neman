<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory-neman
 */

get_header('single');?>
    <section class="post">
        <div class="wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
            <div class="post__box">
                <? the_content(); ?>
            </div>
        </div>
    </section>
<?php get_footer();?>
