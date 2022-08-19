<?php
/**
  * Template Name: Главная
*/
?>
<? get_header();?>
    <section class="category">
        <div class="wrapper">
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
    <section class="fullpage" id="fullpage">
        <main class="fullpage__box">
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">1945</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">год основания</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">75</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">лет опыта</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">300+</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">взрослых моделей</p>
            </div>
			<div class="fullpage__box__items">
                <div class="fullpage__box__num">95+</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">сотрудников</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">200+</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">детских моделей</p>
            </div>
        </main>
    </section>
    <section class="about">
        <div class="wrapper">
            <div class="box box--center">
                <div class="box__half">
                    <img class="about__img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' )?>" alt="<?php single_post_title(); ?>">
                </div>
                <div class="box__half">
                    <?php echo wpautop(the_content());?>
                </div>
            </div>
            <div class="about__history">
                <div class="about__history__items">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px">
                        <image  x="0px" y="0px" width="64px" height="64px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAQAAAAAYLlVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBhcQJwJmqriAAAAFyElEQVRo3sXZe5DVZR3H8dfCcnG5CAoEBikMKE7SBUsUL5hJ+kfh0AwWZjOGYTkJhKPA1B+YBso4OTatY5FhjDXhYNqUxYCXADGIIAcWIaldGVguCu4ucdlddvd8+4Mfx/Xs5Vw4S5/zz57n+T7P+/c8+/093+/zPRRfpZ5SY4tbu2DunHSPSD6/NvD/8QA7hEV+KSXs8flzjb9WaDAIN9srNLjn3D7AGuF3yd+DrBbCo0rOFX6KcMrl6e/dPJ54Q/dzgR9sr/DTjNbZWoRlXb8LpV4Xqgxo03OXFqG8q/HLhXrj2+2dISXc23X4vl4Wmkzr0OIJodEVXYMf7x2hwdRObHrZKmwovieMsFSTcMgXs1iOdUr4SrHA3Yw10yrNQvizoTmMeUZYVxhumCdVOqVGlX/aolJD+sTfZHKOs4ySknJJ/vhJatK4Dz9NNnvMuLxm2igs94gbzjTk4hIjbDPQLovtwkADlDiqWpWGvJeyyA9A+LZluQ56WqgoSmC90AYhZaNwyk25DjsofL0I+EvtFk6aprs/CTUuy2XYKKFF/7PGX+t94bDrQF9vCVUGZx94u9DkN+7Q9yzw39IobHdxumWEA8KK7EMfT3v9ygLhJR4Vwl8y9vGrQl324euEpcrt8P2C8GVeEMLPMjKCz6oW1mYb3t0xYUKBa2eYzUKzWRnttzkuVBqVbYJxQqNeBeKvsEc41ub8n6NZ+Jsh2aeYIfyjQPwt6oTqjAyhVLkQnndeLpM8LVS61yfyxs/WLPw9I0gN8IqQsjDXsLwleQNaXJ8H/MwqV2ascpSdQr3puU7UW6Ow1FuO+UzO+P5WCWFxxipPH0XvmZj7SiYIxzpNqAeY6jEvelulIw56w69UCI3uyrC8Q73wtpF57KQ7hV16tNs3xCxvJulI20B940dsSzwkJaxxfj54PqlF2GFSRvs1VmhKYO9Ybo4prnal+elHeKiVdW+/FcLPleaHh7lCSHku7c3jk+tW+JcHjW5lO16tsN2PhJRvJK2DvSk0m5s/HB4QjkoJdea51QopodlLJme42DiHhe0GO/3yNrgOl6ts9yjKWRuF+W5Qkd7clBfaieMjHUrjGatJOGymWmFfHm9Qhi6WEkajh/tstc/KduNCPxXCrgQ/2r5WDrnFRYXieVjYlNWqmz8INcaAMaqFShO8ZI9yfQrHl9ovzMhq94jQlKTmoxP8iMKxH2qaUKssi9V0KZGE2wvsLh6+p93CT7JYXeWk8Itkx14VDhQQuNrVA0KNQZ3aXKRaWK8nKBfqXV0c/Ah1wuxObfrYKux2AfiOEL5ZHHxPm4SKDqLAafWzTqhNzoSbnBKWFAfPU8J/W5Wa2mqAjcLJ5HYzxgfCH3UrDn6eEG7vxOJCW4V6tyQPs0vYpl9x8D9MKnsda7jtwomkFtzTGuFQqyvHWajEYpHlfznRQeED14DeXhYa8slyOtZ5nhfCok5sZmoQ/p34R5lXhMZOa0M5a5D1QrP5HVr085wQVidX9T5eExrcVgz8mSvElzu0+JzdQsqSJEccapNw3M3FwH/JUWGvT3fQ38uPNQnvp3+EGG+vcDSvZL1DfUG9sNmwDvonJunI6nRkn+6E8K5PFQPfT7WwqoOo9zHPJgnZ3UkKVmapENbmUlzIRfcL1e1WQMosUCuE3/t40jbODiHlyU6P6by0QXi4TWsv33NACDvTVcAeFmoUjphSLDjUigxX6u/BBH7QfemVXmWbEF41vJh4GoUr098u84Q6IRwxP+0XQy3TItSZWfxic5UwFX3d6TUpIbxrdjqZ7GOBoxmeUFQ9K7xhhRNJ1v+6r6WvUGXu954QKrLWwgvWxHQGv88Sl6bbh1joUNL+3UJudblqsnBcuetbpRMTPKNeCPvNKrhClKMmCSfSbjjcPDuTHalwt95dC4cSa4X9brTA5sQJG73Y5vLZhRrkPx+5y83Jkox3gUb6qxPWm5tfAaUY+h8kj2uhcl1IYQAAAABJRU5ErkJggg==" />
                    </svg>
                    <p class="about__history__title"><? the_field('title_about_home_one') ?></p>
                    <p class="about__history__content"><? the_field('content_about_home_one') ?></p>
                </div>
                <div class="about__history__items">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px">
                        <image  x="0px" y="0px" width="64px" height="64px"  xlink:href="data:img/png;base64,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" />
                    </svg>
                    <p class="about__history__title"><? the_field('title_about_home_second') ?></p>
                    <p class="about__history__content"><? the_field('content_about_home_second') ?></p>
                </div>
                <div class="about__history__items">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="64px">
                        <image  x="0px" y="0px" width="48px" height="64px"  xlink:href="data:img/png;base64,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" />
                    </svg>
                    <p class="about__history__title"><? the_field('title_about_home_third') ?></p>
                    <p class="about__history__content"><? the_field('content_about_home_third') ?></p>
                </div>
                <div class="about__history__items">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60px" height="64px">
                        <image  x="0px" y="0px" width="60px" height="64px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAABACAQAAADsFdxDAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBhcQNhomHwPGAAAEE0lEQVRYw+WYT2hcVRTGfycZZiY0aQJjCMhYulATabDFWukioZUWDEJLN3ZjQAqCrWYx0IIjrhTULgv+y94ig0i1hYqoEFNctBiNQTRGAp2WCBqRpFXTDBnmuMjLy333/Y1mXoTe2cz93jfne+c7575356I068PnFrDIofVJC00aUuCwBXUytD7JNEuYHAAPUHfmL/OsgzVZOA80dNZ1YN7BUslY5FN3fr/rQhrCPOHDmi6cB25RduePczy9jBd0dG0qcNyscdOWEzmgZsyX8VjdPOG8JVxLSzjnZGkKb4nVqWVsW51ajbfM6v9Vc6UmbNd4y6zOiqSTsW01ZNMRtq02qpyu1UaV07Y6hYwtq7VBPR1h22prQaVntfUISa+rUxPOB2a8UaslLw8nYInskdbQjN0Xo9wr7QmERWSYGabkqRjeINeY5NVQ4RqQkz65yC+cj//rdZAJ52s5gvUgHzlfKw5yA2XQw7mKco0VFKUambH0yUXG2EuNXyNY98ib/MAxlJsGbGUsbWwDHiNDNbLG0i1v8z1HUd6nl/HQ2r/ILCNkGGcf7xqXjHUsLfIMP9MPTHOEUwDBxuV5iVsoyjj7FIWK32qEp6miKD9xVFEoG1bfQelVFA4xiaL8xikyCkOo8zsr3DA3UZQZjrmoT5gDfI2izPM8GQczhRsoO9nFZRTlDq/T4VwJEuYg36AovzOyFs4vTC8fu+G2GyxXmCyK8gF1lAbvcZ/BsoXp45IT7iyd1g25wnTzFiv+cJZwwQXH2GuxTGG6eccJd54dAVWvoJTJU3ZqP8YjAawySgVhmBtm7UOEaXNb6UseDVmnFZTPnHDTHAlhlVG+dYo1zwtmsXzCDDqtFHh3HmGjMyOEV4v1hln7YOFJb2eGkEdRlnhtrTNDWCfDi+UXrqI8GUVUFIqcphjLaqdkt1K08FAceTM/q8LGUYRkOEyX9Uyc0mnfY3KAogXN6Vc+1kPstqBFvtD6+tTNmJGA21uyq8pAYBoDFquDpQDWSGDGFIE/mDOQ3bRR4E/PfReBZWYMpJe8z4MCbcCU53cFk2Wf+nyoJw27NOTVNaN7DNZ3PlOd4WGN8px5zRbOShfxo9XDag2jeVhZ7zVb+AQnEgj3s5CARRTL3AhcsfZIAD96ag4wERBugQkLmcO3GqhxJTBj/US6zL/OANzWhhfQWelhm8X6W1csVl362W6xltXY7nqs1mVrJxw4dIXFBKxGNKt5G/qYcfcJJz42liIl2mNIf3FO5xKF28B5dYnTiXhnNlu4HbhqbOxzlIBzxto/wP5YT/6FMMC4ukf90kUJeEUXXeQs+5OHuvu6eouXU4/sjGV2AJ0Gb/VJvMN49XUCHQki9QAI14mnbv6otnAB/e9xNjiUC/8A9ptWB43PLUUAAAAASUVORK5CYII=" />
                    </svg>
                    <p class="about__history__title"><? the_field('title_about_home_fourth') ?></p>
                    <p class="about__history__content"><? the_field('content_about_home_fourth') ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="addresses">
        <div class="wrapper">
            <div class="box">
                <div class="box__half">
                    <a class="addresses__link addresses__link--bg" href="<?php echo get_page_link(209)?>" style="background-image: url(<? the_field('img_ourstore'); ?>);">
                        <p class="addresses__link__title"><? the_field('title_img_ourstore'); ?></p>
                    </a>
                </div>
                <div class="box__half">
                    <div class="addresses__box">
                        <div class="addresses__box__items">
                            <a class="addresses__circle" href="<?php echo get_page_link(8)?>">
                                <div class="addresses__circle__inner">
                                    <h2 class="addresses__circle__title">Наши <br/> фирменные <br/> магазины</h2>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="64px" height="42px">
                                        <image  x="0px" y="0px" width="64px" height="42px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAqCAQAAACpD5VpAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBhcREBQDu8fSAAABHklEQVRYw8WYMQ6CQBBF/1qpx7DXwsISE0Wx8UBWXkkPoL0WFiZWJt4CLL8NMazAshYzMzQUE97LwLIz6wiRcIh8cE8En+CJB9KoXEpcR5Lkm1l3rkwFbgCAPg7IbCow5Iksq7AO58oI/KEgJRCtICfgK6wsBKIUZAUiFKQFOhXkBaoKBVMLgaCCjkBAQUvAV1haCLQoaAo0KugK+AoLC4GaguMYO4xEuoK2GGBS3hXYOF4wU8X7cZXpiP4I81dg+RHmXFguw9xiGdbwVr/iL95mM6rgLbZjD6/fkPzgtVuyGl63KW3Aa7bljXi9waQFrzWateJ1htMAXmM8D+KlBKLxUgL7WLzUGdG0bDe2OHfmilQg4Yt3zmNynfVB5QdtzuwkQPbOcQAAAABJRU5ErkJggg==" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <?if( have_rows('ourstores_home') ): $item=0;?>
                            <div class="addresses__box__items addresses__box__items--col">
                                <?while ( have_rows('ourstores_home') ) : the_row();
                                    if($item < 2):?>
                                        <div class="addresses__box__items__col">
                                            <p class="addresse__city"><? the_sub_field('city_ourstores_home'); ?></p>
                                            <p><? the_sub_field('address_ourstores_home'); ?></p>
                                            <p class="addresses__link"><? the_sub_field('phone_1_ourstores_home'); ?></p>
                                            <p class="addresses__link"><? the_sub_field('phone_2_ourstores_home'); ?></p>
                                            <p class="addresses__mail"><? the_sub_field('email_ourstores_home'); ?></p>
                                        </div>
                                    <?endif; $item++;
                                endwhile;?>
                            </div>
                        <?endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="media">
        <div class="wrapper">
            <h2 class="section-head">Медиа и новости</h2>
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
            ?>
            <div class="box">
                    <?  $args = array(
                            'post_type' => 'post',
                            'post_status'       => 'publish',
                            'paged'             => $paged,
                            'order'             => 'DESC',
                            'posts_per_page'    => 4
                        );
                    $temp = $wp_query;
                    $wp_query= null;
                    $wp_query = new WP_Query($args);
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
                        $categories = get_the_category($posts['ID']);?>
                        <div class="box__half box__half--df">
                            <a class="media__cover media--before" href="<?php echo get_permalink($posts['ID']); ?>" style="background-image: url(<?php the_post_thumbnail_url(  )?>);">
                                <?foreach( $categories as $category ) :?>
                                    <p class="media__cover__category"><? echo $category->name; ?></p>
                                <?endforeach;?>
                                <h3 class="media__cover__title"><? the_title(); ?></h3>
                                <p class="media__cover__date"><? echo $month_list[date(get_the_date('n'))];?>  <?echo get_the_date('j');?>,  <?echo get_the_date('Y');?></p>
                            </a>
                        </div>
                    <? endwhile;wp_reset_query();?>
            </div>
        </div>
    </section>
    <section class="social">
        <div class="wrapper">
            <h2 class="section-head"><? the_field('social_title_home'); ?></h2>
            <div class="box social__bg">
                <div class="box__half">
                    <a href="<?php echo get_page_link(218)?>" class="social__cover" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/social.jpg);"></a>
                </div>
                <div class="box__half">
                    <a class="social__title" href="<?php echo get_page_link(218)?>"><? the_field('social_content_home'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="wrapper">
            <h2 class="section-head">Мы и общество</h2>
            <?$args = array (
                        'post_type' => 'society',
                        'posts_per_page'    => 1,
                        'orderby'  => 'DESC',
                        'post_status' => 'publish'
            );
            $result = wp_get_recent_posts($args);
            foreach ($result as $post) :?>
                <div class="box blog__bg">
                    <div class="box__half">
                        <a class="blog__link" href="<?php echo get_permalink($post['ID']); ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post['ID'] ) ); ?>);"></a>
                    </div>
                    <div class="box__half">
                        <a class="blog__info" href="<?php echo get_permalink($post['ID']); ?>">
                            <h3 class="media__cover__title"><? echo $post['post_title']?></h3>
                            <p class="media__cover__date"><? echo $month_list[date('n',strtotime($post['post_date']))];?>,  <?echo date('j',strtotime($post['post_date']));?>  <?echo date('Y',strtotime($post['post_date']));?></p>
                        </a>
                    </div>
                </div>
            <? endforeach; wp_reset_postdata();?>
            <div class="box box__top">
                <?$args = array (
                            'post_type' => 'society',
                            'posts_per_page'    => 3,
                            'offset' => 1,
                            'orderby'  => 'DESC',
                            'post_status' => 'publish'
                );
                $result = wp_get_recent_posts($args);
                foreach ($result as $post) :?>
                    <div class="box__three">
                        <a class="blog__cover" href="<?php echo get_permalink($post['ID']); ?>">
                            <p class="media__cover__category"><? echo $month_list[date('n',strtotime($post['post_date']))]; ?>,  <?echo date('j',strtotime($post['post_date']));?>  <?echo date('Y',strtotime($post['post_date']));?></p>
                            <h3 class="blog__cover__title"><? echo $post['post_title'] ?></h3>
                            <div class="blog__cover__footer">
                                <p>Узнать больше</p>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="20px">
                                    <image  x="0px" y="0px" width="32px" height="20px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAUCAQAAABGmPfEAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBhgRFC75uMsyAAAAlUlEQVQ4y2P4z0AsZNjCcIRBCF2UiYF48IDBmmEPoxCaKAkuYGZYwvCf4RyqK0gwALsRJBmAzQgSDcA0gmQD0I0gwwBUI8gyANkIRoYVDBYkpAUEYGaQYWBgOExKQsIGflHmhRMM/BRqpyQaTzDwU5KQoNrJTcpw7eRlJiTtJBmATTtpBkzB1E5aiSTLcIDB/f9HVEEAsV7gJwHk8uMAAAAASUVORK5CYII=" />
                                </svg>
                            </div>
                        </a>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </section>
<? get_footer();?>