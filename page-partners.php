<?php
/**
  * Template Name: Соотрудничество
*/
?>
<?php get_header('single');?>
    <section class="partners">
        <div class="wrapper partners__wrapper">
            <h1 class="section-head partners__title"><?php single_post_title(); ?></h1>
            <div class="box box--justify-center">
                <?if( have_rows('questions') ):
                    while ( have_rows('questions') ) : the_row();?>
                        <div class="partners__box">
                            <div class="partners__items">
                                <div class="partners__items__title" id="partners<?php echo get_row_index(); ?>">
                                    <h2 id="partners<?php echo get_row_index(); ?>"><? the_sub_field('title_questions'); ?></h2>
                                    <div class="partners__items__circle" id="partners<?php echo get_row_index(); ?>">
                                        <svg class="partners__items__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"/></svg>
                                    </div>
                                </div>
                                <div class="partners__items__content" id="1partners<?php echo get_row_index(); ?>">
                                    <?php echo wpautop(the_sub_field('content_questions'));?>
                                </div>
                            </div>
                        </div>
                    <?endwhile;
                endif;?>
            </div>
            <div class="contacts__border contacts__border--color">
                <svg class="contacts__border__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="45px">
                    <image  x="0px" y="0px" width="48px" height="45px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAtCAQAAABCQyBJAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwgRCTMIq7XYAAABkUlEQVRYw+2Wv0sCYRyHnzujWiwFiyIiqKgtaAvaA6nNwNYaWvwDXHIIWiK32oqChrZ0qrmphgZpUCiDhn4Q1ZAUcon2bbgu86QDufcGyc873XH3PPd+7/2lYSZImDE6URODK455rd6IUUAUtwIxC59QDrfaCmhMkEHng3WOeFFUohCzxOmgwiRsIQhLitDVLCIIm3CGUKRNucDHO8KpThfwQFm5oMI9ENCVg21pCf6BwD7+B9im1wXviWXunARRwi4/eYGkkyBNhD4X+EcOnUt0w7TLHtjS/KOo+QX1+8CgwzwwyCGNKrII1z9XM5Qdd9lkA+RLhJy9REP4HF8adluiPSr0/Pl0iQO3gjK7jSKc0/zDtCVwIvcDBe8EEfzARf1SodPtGh5kjjVA2LEvFePcKjy+b0CtIEReGdwggVY7kztIMwqck3FZohJ5UtbpwuqBxj6CkCWg9m9bglUE4ZkRtXhLEOUTociUarwpeMNAqDCvHm8KzBb3Al8VKN4H7IIT2r0SpLwYmr/j/16WPMoXAzYcfKK3JFkAAAAASUVORK5CYII=" />
                </svg>
                <p class="contacts__border__content contacts__border__content--mw"><? echo the_field('content_partners')?></p>
                <img class="cart__check cart__check--bottom" src="<?php bloginfo('template_url'); ?>/assets/img/check-vakanciy.png" alt="">
            </div>
        </div>
    </section>
<?php get_footer();?>