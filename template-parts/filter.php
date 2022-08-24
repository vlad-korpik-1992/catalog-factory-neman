<?$product_data = wc_get_product( get_the_ID() );
if(get_query_var( 'min_price' ) <= $product_data->get_price() && get_query_var( 'max_price' ) >= $product_data->get_price()):
    $arrayColor = explode(" ", get_query_var( 'color_product' ));
    $arrayColorProduct = explode(" ", get_field('color_product')); 
    $arraySizes = explode(" ", get_query_var('sizes_product'));
    $arraySizesProduct = explode(" ", get_field('shoe_sizes_product'));
    $diff = array_intersect($arrayColorProduct, $arrayColor);
    $onSizec = array_intersect($arraySizesProduct, $arraySizes); 
    if($arrayColor[0] != '' || $arraySizes[0] != ''):
        if($diff != Array() || $onSizec != Array()):?>
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
        endif;
    else:?>
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
    endif;
endif;?>