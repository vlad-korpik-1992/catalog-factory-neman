<?php
/**
  * Template Name: Каталог
*/
?>
<?php get_header('single');?>
    <section class="category category--bottom">
        <div class="wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
            <?php
                $categories = get_categories( [
                    'taxonomy'     => 'product_cat',
                    'parent' => 0,
                    'hide_empty' => 0,
                ]);
            ?>
            <div class="category__box">
                <?php
                    $items = 0;
                    foreach ($categories as $category):
                        $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true ); 
                        $image = wp_get_attachment_url( $thumbnail_id );?>
                        <div class="category__box__items <?if($items === 1):?>category__box__items--width<?endif;?>">
                            <a class="category__box__items__link" href="/product-category/<?echo $category->slug;?>">
                                <div class="category__box__items__cover" style="background-image:url(<? echo $image; ?>)"></div>
                                <div class="category__box__items__title">
                                    <h2><? echo $category->cat_name; ?></h2>
                                </div>
                            </a>
                        </div>
                    <?php $items++; endforeach;
                    wp_reset_postdata();?>
            </div>
        </div>
    </section>
<?php get_footer();?>
