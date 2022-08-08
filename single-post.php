<?php get_header('single');?>
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
        $categories = get_the_category($posts['ID']);
    ?>
    <section class="single">
        <div class="wrapper">
            <div class="box box--reverse">
                <div class="box__half single__img">
                    <img src="<?php the_post_thumbnail_url(  )?>" alt="<? echo the_title(); ?>">
                </div>
                <div class="box__half">
                    <?foreach( $categories as $category ) :
                        $categorySlug = $category->slug;?>
                        <a class="single__category" href="<?site_url();?>/category/<? echo $category->slug; ?>"><? echo $category->name; ?></a>
                    <?endforeach;?>
                    <h1 class="single__title"><? echo the_title(); ?></h1>
                    <p class="single__date"><? echo $month_list[date(get_the_date('n'))];?>  <?echo get_the_date('j');?>,  <?echo get_the_date('Y');?></p>
                </div>
            </div>
            <div class="box single__top">
                <div class="single__items">
                    <p class="single__items__italic"><?php the_field('desc_media');?></p>
                </div>
                <div class="single__items single__items__content">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </section>
    <?$args = array (
                'category_name' => $categorySlug,
                'post_type' => 'post',
				'numberpost' => 2,
				'post__not_in' => array (get_the_ID()),
				'orderby'  => 'rand',
				'post_status' => 'publish'
    );
	$result = wp_get_recent_posts($args);?>
    <section class="media">
        <div class="wrapper">
            <h2 class="section-head">Медиа и новости</h2>
            <div class="box">
                <?foreach ($result as $post) :?>
                    <div class="box__half">
                        <a class="media__cover media--before" href="<?php echo get_permalink($post['ID']); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post['ID'] ) ); ?>);">
                            <?foreach( $categories as $category ) :?>
                                <p class="media__cover__category"><? echo $category->name;?></p>
                            <?endforeach;?>
                            <h3 class="media__cover__title"><? echo $post['post_title']?></h3>
                            <p class="media__cover__date"><? echo $month_list[date('n',strtotime($post['post_date']))];?>,  <?echo date('j',strtotime($post['post_date']));?>  <?echo date('Y',strtotime($post['post_date']));?></p>
                        </a>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </section>
<?php get_footer();?>