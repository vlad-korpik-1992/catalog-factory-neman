<?php get_header('single');?>
    <section class="single">
        <div class="wrapper">
            <div class="box box--reverse">
                <div class="box__half single__img">
                    <img src="<?php the_post_thumbnail_url(  )?>" alt="<? echo the_title(); ?>">
                </div>
                <div class="box__half">
                    <h1 class="single__title single__title--pt"><? echo the_title(); ?></h1>
                    <p class="single__date"><?php the_field('data_stock');?></p>
                </div>
            </div>
            <div class="box single__top">
                <div class="single__items">
                    <p class="single__items__italic"><?php the_field('desc_stock');?></p>
                </div>
                <div class="single__items single__items__content">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </section>
    <?
    $args = array (
                'post_type' => 'stocks',
				'numberpost' => 1,
				'post__not_in' => array (get_the_ID()),
				'orderby'  => 'rand',
				'post_status' => 'publish'
    );
	$result = wp_get_recent_posts($args);?>
    <section class="stock">
        <div class="wrapper">
            <?foreach ($result as $stock) :?>
                <a class="stock__box stock__box--top" href="<?php echo get_permalink($stock['ID']); ?>">
                    <div class="stock__box__items">
                        <div class="stock__box__date"><?php the_field('data_stock', $stock['ID']);?></div>
                        <div class="stock__box__title"><? echo $stock['post_title']?></div>
                    </div>
                    <div class="stock__box__circle">
                        <img class="stock__box__circle__img" src="<?php the_field('img_stock', $stock['ID']);?>" alt="<? echo $stock['post_title']?>">
                    </div>
                </a>
            <?endforeach;?>
        </div>
    </section>
<?php get_footer();?>