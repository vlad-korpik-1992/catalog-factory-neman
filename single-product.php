<?php get_header('single');?>
    <section class="cart">
        <div class="wrapper cart__wrapper">
            <?php while ( have_posts() ) : 
                the_post(); global $product;?>
                <h1 class="section-head section-head--cart"><? the_title(); ?></h1>
                <div class="cart__code">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px">
                        <image  x="0px" y="0px" width="16px" height="16px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwUNEAG8Ks+JAAAA3klEQVQoz3XQIU9CURgG4OdeGPM6m80AxRnM4Cxu0swWHcVNqs3kDPor9A+gjmBnU2bQ4JzT7IYYKHRhFoIBuNyL17ed87xn37cTmM+mLctg5EkrSGHehZpH3yBnx26amzpWwQK4dR4m+EpZVceKDwMnGAnCmBvKtvWwb6judAxhzBVVPfBq3ZmX5OwbXcXENhsOLKHlmPAPT7NmqEJNXymDS7ouCUV+DDL4wbMjKGh7m/zdjL9cy02PkTvviUrRp6Z88kXkPq5kMCxOKv/wuNLW1deYzZ5PwaE9YfryF5W1NYXdJ3dLAAAAAElFTkSuQmCC" />
                    </svg>
                    <span>№ <?php echo $product->get_sku(); ?></span>
                </div>
                <div class="cart__box">
                    <div class="cart__box__items">
                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' )?>" alt="<? the_title(); ?>">
                        <?php $gallery = $product->get_gallery_attachment_ids();
                        foreach( $gallery as $image ) :?>
                            <img src="<?echo wp_get_attachment_url( $image );?>" alt="<? the_title(); ?>">
                        <?php endforeach;?>
                    </div>
                    <div class="cart__box__items">
                        <div class="cart__box__items__sidebar">
                            <p class="cart__price"><?php echo $product->get_price(); ?><span>бел. руб</span></p>
                            <div class="cart__sizes">
                                <? $sizesProducts = explode(" ", get_field('shoe_sizes_product')); 
                                    foreach($sizesProducts as $size):?>
                                        <div class="cart__sizes__items"><?echo $size;?></div>
                                    <?endforeach;
                                ?>
                            </div>
                            <div class="cart__color">
                                <? $colorProducts = explode(" ", get_field('color_product')); 
                                    foreach($colorProducts as $color):?>
                                        <div class="cart__color__items" style="background-color: <?echo $color;?>;"></div>
                                    <?endforeach;
                                ?>
                            </div>
                            <div class="cart__info cart--bottom">
                                <p>Выберите размер: <a class="cart__info__link" href="#">таблица размеров</a></p>
                                <a class="cart__info__link" href="#">Подробнее о размерах обуви</a>
                                <a class="cart__info__circle" href="#">?</a>
                            </div>
                            <div class="cart__info cart--bottom">
                                <a class="cart__info__link" href="#">Характеристики модели</a>
                                <a class="cart__info__circle" href="#">></a>
                                <div class="cart__info__feature">
                                    <?php if(get_field('gender_product') != ''):?>
                                        <p><span>Половозрастной признак:</span><? echo the_field('gender_product'); ?></p>
                                    <?php endif;?>
                                    <?php if(get_field('upper_material_product') != ''):?>
                                        <p><span>Материал верха:</span><? echo the_field('upper_material_product'); ?></p>
                                    <?php endif;?>
                                    <?php if(get_field('lining_material_product') != ''):?>
                                        <p><span>Материал подкладки:</span><? echo the_field('lining_material_product'); ?></p>
                                    <?php endif;?>
                                    <?php if(get_field('foot_product') != ''):?>
                                        <p><span>Подошва:</span><? echo the_field('foot_product'); ?></p>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="cart--bottom">
                                <button class="cart__btn">
                                    <svg class="cart__btn__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="30px">
                                        <image  x="0px" y="0px" width="24px" height="30px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAeCAQAAACcJxZuAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwUOBB9qzZvmAAABeElEQVQ4y+2UP0tcURBHj4+F3ew+hRC3cRFsNIV9siEEUmhtFzCgn8A/nRY2fpBgYQolZYo0FrEw6NpooaYQ2T5auU8RUY5FNsvet/vkfYD8prl3Zs4dZgYukrKiSx6YmHjgosV0PJ1e89huHVl7Dih6rJ44Y9WqM56oR2GVEFhSG5Y695INdSEbaKjTgWda3c8GWmoceGL1uttTAKDAJFUgBuqkNcgUcMkpD4A44Zl5dOq4DAh7vKfJBc9rlNfs8QGHfLRluWeBaSvZ8tGhiGEiLrkF4AVxz8tlygDccUXEq4gYSNrBHZq8DNIrnPOrfU6AOATuGWY+AGYZ4T4b+AKsMdFJH2O97c0AtvhBlX3WeMdbVjikxk82ugGcVzc7syj7LZj9dwc7sa/qXCGoALd84iOfmWSA32yz09VPAsRpAGCX3b6ra/dQAW7IoxugEvWpkKU+U/oPZAGV3EDrL3AFvMkF1IE/uJzrA/inRYxctZkruemK0RMzrbYKHHlrYwAAAABJRU5ErkJggg==" />
                                    </svg>
                                    <p>Узнать о наличии данной <br/> модели в вашем городе</p>
                                </button>
                            </div>
                            <div class="cart__note cart--bottom">
                                <p>Цены в фирменных магазинах и магазинах партнеров могут отличаться от цен, заявленных на сайте. Пожалуйста уточняйте цены в магазинах</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </section>
    <section class="similar">
        <div class="wrapper">
            <?
                $terms = get_the_terms( $post->ID, 'product_cat' );
                $args = array(
                    'post_type' => 'product',
                    'post__not_in' => array( $post->ID ),
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'term_id',
                            'terms' =>  $terms[0]->term_id
                        )
                    ),
                );
                $query = new WP_Query( $args );
            ?>
            <h2 class="section-head">Похожие модели</h2>
            <? if ( $query->have_posts() ) : ?>
                <div class="box similar__box--top">
                    <?while ( $query->have_posts() ) : $query->the_post();?>
                        <div class="box__three">
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
                                <div class="similar__footer__art">№<?php echo $product->get_sku(); ?></div>
                                <div class="similar__footer__price"><?php echo $product->get_price(); ?> <span>бел. руб</span></div>
                            </div>
                        </div>
                    <?php endwhile;  wp_reset_postdata(); ?>
                </div>
                <?else : ?>
                    <p class="message"><?php esc_html_e( 'Товары данной категории отсутствуют' ); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <?  $productsID = explode(",", do_shortcode( '[recently_viewed_products]'));
        $args = array(
            'post__in' => $productsID,
            'post_type' => 'product',
            'orderby'  => 'rand',
            'posts_per_page' => 3,
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
    ?>
            <section class="similar">
                <div class="wrapper">
                    <h2 class="section-head">Вы смотрели</h2>
                    <div class="box similar__box--top">
                        <?while ( $query->have_posts() ) : $query->the_post();?>
                            <div class="box__three">
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
                                    <div class="similar__footer__art">№<?php echo $product->get_sku(); ?></div>
                                    <div class="similar__footer__price"><?php echo $product->get_price(); ?> <span>бел. руб</span></div>
                                </div>
                            </div>
                        <?php endwhile;  wp_reset_postdata();?>
                    </div>
                </div>
            </section>
        <?endif;?>
    <section id="popup" class="popup popup--check">
        <a href="#" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <div class="popup__header">
                    <button class="popup__header_close">
                        <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"></path>
                        </svg>
                    </button>
                    <div class="popup__title">Узнать наличие</div>
                </div>
                <div class="popup__text">
                    <form class="ajax__form" id="ajax__form">
                        <input type="hidden" id="productsku" name="productsku" value="№ <?php echo $product->get_sku(); ?>">
                        <div class="form__group">
                            <input type="text" class="form__group_text" required="required" id="modalname" name="modalname" value="" placeholder="Ваше имя*">
                        </div>
                        <div class="form__group">
                            <input type="text" class="form__group_text" required="required" id="modalphone" name="modalphone" value="" placeholder="Номер телефона*">
                        </div>
                        <div class="form__group">
                            <textarea class="form__group_textarea" name="letter" id="messages" type="text" cols="80" rows="10" placeholder="Укажите свой город"></textarea>
                        </div>
                        <div class="letter__form__error letter__form__error_mt error" id="status__error"></div>
                        <div class="form__group">
                            <button id="check-send" class="form__btn" type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>