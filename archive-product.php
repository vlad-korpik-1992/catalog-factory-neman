<?php get_header('single');?>
    <section class="catalog">
        <div class="wrapper">
            <h1 class="section-head"><?php single_term_title(); ?></h1>
            <?php
                $term = get_term(get_queried_object()->term_id, get_queried_object()->taxonomy);
                $termParent = ($term->parent == 0) ? $term : get_term($term->parent, get_queried_object()->taxonomy);
                $termchildren = get_term_children($termParent->term_id, $termParent->taxonomy);?>
                <div class="buttons"><?
                    foreach ($termchildren as $child) {
                        $term = get_term_by( 'id', $child, get_queried_object()->taxonomy );
                        echo '<a class="buttons__items" href="' . get_term_link( $term->term_id, $term->taxonomy ) . '">' . $term->name . '</a>';
                    }?>
                </div>
            <div class="filter">
                <form class="filter__form" id="filterform" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php">
                    <input type="hidden" name="action" value="myfilter">
                    <input type="hidden" name="productCat" value="<?php echo get_queried_object()->slug;?>">
                    <div class="box">
                        <div class="box__three box__three--filter">
                            <div class="box__three__scroll">
                                <? if($termParent->slug == 'kids' || $termParent->slug == 'shildrens-collection'):
                                        $value=90;
                                        $maxValue=200;
                                        $stepValue=10;
                                        else:
                                            $value=35;
                                            $maxValue=45;
                                            $stepValue=1;
                                    endif;        
                                    $index = 1;
                                    for ($i = $value; $i<$maxValue; $i+=$stepValue):?>
                                        <div class="filter__items">
                                            <input class="filter__form__checkbox" type="checkbox" name="size[]" id="size<?echo $index;?>" value="<?echo $i;?>">
                                            <label for="size<?echo $index;?>"><?echo $i;?></label>
                                        </div>
                                        <?  $index++;
                                    endfor;
                                ?>
                            </div>
                        </div>
                        <div class="box__three box__three--filter">
                            <div class="price-input">
                                <div class="price-input__items">
                                    <input class="input-min price__number price__number--left" type="number" value="0">
                                </div>
                                <div class="price-input__items">
                                    <input class="price__number price__number--right" type="number" value="1000">
                                </div>
                            </div>
                            <div class="filter__slider">
                                <div class="filter__progress"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" name="price_min" id="min" min="0" max="1000" value="0" step="10">
                                <input type="range" class="range-max" name="price_max" id="min" min="0" max="1000" value="1000" step="10">
                            </div>
                        </div>
                        <div class="box__three box__three--filter">
                            <div class="box__three__scroll">
                                <? $arrayColor = explode(' ', get_field('array_color_shoes', 271));
                                    $index = 1;
                                    if($arrayColor != Array()):
                                        $arrayColor = array_unique($arrayColor);
                                        $arrayColor = array_values($arrayColor);
                                    else:
                                        $arrayColor[0] = "#000";
                                    endif;
                                    foreach($arrayColor as $color):?>
                                        <div class="filter__items filter__items--pr">
                                            <input class="filter__form__color" type="checkbox" name="color[]" id="color<?echo $index;?>" value="<? echo $color;?>">
                                            <label for="color<?echo $index;?>" style="background-color: <? echo $color;?>;"></label>
                                        </div><? $index++;
                                    endforeach;
                                ?>
                            </div>
                            <button class="filter__form__btn" id="filterbtn" type="submit">Подобрать товар</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="similar">
        <div class="wrapper">
            <?$args = array(
                'post_type' => 'product',
                'product_cat' => get_queried_object()->slug,
                'paged'             => $paged,
                'posts_per_page'    => 1000
            );
            $temp = $wp_query;
            $wp_query= null;
            $query = new WP_Query($args);
            if ( $query->have_posts()) :?>
                <div class="box similar__box--top archive-product">
                <?while ( $query->have_posts() ) : $query->the_post();
                    $product_data = wc_get_product( get_the_ID() );?>
                    <div class="box__three similar__box__three--bottom">
                        <a class="similar__link" href="<?php echo get_permalink($posts['ID']); ?>">
                            <div class="similar__sizes">
                                <? $sizesProducts = explode(" ", get_field('shoe_sizes_product')); 
                                    foreach($sizesProducts as $size):?>
                                        <div class="cart__sizes__items"><?echo $size;?></div>
                                    <?endforeach;
                                ?>
                            </div>
                            <div class="similar__cover" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' )?>);"></div>
                        </a>
                        <div class="similar__footer">
                            <div class="similar__footer__art">№ <?php echo $product_data->get_sku(); ?></div>
                            <div class="similar__footer__price"><?php echo $product_data->get_price(); ?> <span>бел. руб</span></div>
                        </div>
                    </div><?
                endwhile; wp_reset_postdata();?>
                </div><? else : ?>
                <p class="message"><?php esc_html_e( 'Товары данной категории отсутствуют' ); ?></p>
            <?php endif; ?>
            <div class="box similar__box--top response"></div>
        </div>
    </section>
<?php get_footer();?>