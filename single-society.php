<?php get_header('single');
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
);?>
    <section class="single">
        <div class="wrapper">
            <div class="box box--reverse">
                <div class="box__half single__img">
                    <img src="<?php the_post_thumbnail_url(  )?>" alt="<? echo the_title(); ?>">
                </div>
                <div class="box__half">
                    <h1 class="single__title single__title--pt"><? echo the_title(); ?></h1>
                    <p class="single__date"><? echo $month_list[date(get_the_date('n'))];?>  <?echo get_the_date('j');?>,  <?echo get_the_date('Y');?></p>
                </div>
            </div>
            <div class="box single__top">
                <div class="single__items">
                    <p class="single__items__italic"><?php echo the_field('content_society');?></p>
                </div>
                <div class="single__items single__items__content">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </section>
    <?
    $args = array (
                'post_type' => 'society',
				'numberpost' => 3,
				'post__not_in' => array (get_the_ID()),
				'orderby'  => 'rand',
				'post_status' => 'publish'
    );
	$result = wp_get_recent_posts($args);?>
    <section class="blog blog--bg">
        <div class="wrapper">
            <h2 class="section-head">Мы и общество</h2>
            <div class="box">
                <?foreach ($result as $post) :?>
                    <div class="box__three">
                        <a class="blog__cover" href="<?php echo get_permalink($post['ID']); ?>">
                            <p class="media__cover__category"><? echo $month_list[date('n',strtotime($post['post_date']))];?>,  <?echo date('j',strtotime($post['post_date']));?>  <?echo date('Y',strtotime($post['post_date']));?></p>
                            <h3 class="blog__cover__title"><? echo $post['post_title']?></h3>
                            <div class="blog__cover__footer">
                                <p>Узнать больше</p>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="20px">
                                    <image  x="0px" y="0px" width="32px" height="20px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAUCAQAAABGmPfEAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBhgRFC75uMsyAAAAlUlEQVQ4y2P4z0AsZNjCcIRBCF2UiYF48IDBmmEPoxCaKAkuYGZYwvCf4RyqK0gwALsRJBmAzQgSDcA0gmQD0I0gwwBUI8gyANkIRoYVDBYkpAUEYGaQYWBgOExKQsIGflHmhRMM/BRqpyQaTzDwU5KQoNrJTcpw7eRlJiTtJBmATTtpBkzB1E5aiSTLcIDB/f9HVEEAsV7gJwHk8uMAAAAASUVORK5CYII=" />
                                </svg>
                            </div>
                        </a>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </section>
<?php get_footer();?>