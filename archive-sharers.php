<?php
/**
  * Template Name: Акционерам
*/
?>
<?php get_header('single');?>
    <section class="sharer">
        <div class="wrapper">
            <h1 class="section-head"><?php wp_title("", true); ?></h1>
            <div class="box">
                <div class="box__half box--pb box__half--df">
                    <div class="sharer__link">
                        <h2 class="sharer__title">ОАО «Гродненская обувная фабрика  «Неман» </h2>
                        <p class="sharer__content">230024, г.Гродно, ул.Советских Пограничников, 95 <br/> р/с BY78BLBB30120500055230001001 в Дирекции ОАО «Белинвестбанк» по Гродненской области, <br/> БИК BLBBBY2X, УНП 500055230, ОКПО 05542817</p>
                    </div>
                </div>
                <?php  $args = array (
                                'post_type' => 'sharers',
                                'numberposts' => 1,
                                'order' => 'DESC',
                                'orderby'   => 'meta_value',
                                'suppress_filters' => true,
                            );
                $result = wp_get_recent_posts($args);
                foreach($result as $post):?>
                    <div class="box__half box--pb box__half--df">
                        <a class="sharer__link" href="<?php echo get_permalink($post['ID']); ?>">
                            <h2 class="sharer__title"><?php echo $post['post_title'];?></h2>
                            <p class="sharer__content"><?php the_field('desc-sharer', $post['ID']);?></p>
                            <svg class="sharer__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="28px">
                                <image  x="0px" y="0px" width="28px" height="28px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwgNJDc60HE6AAAA0klEQVQ4y+3UMU4CURAG4A/u4BrwSGo4AddwD2BMvJSKIh2xEAn3cGm2GovNogL72FfY+U/3Jt+bZIoBJma24qCetHne67zC/RFyCgYToXZjrE/OvLdwJpS9EIWVsG5gJYwypm2MGhgik8mBP1kGLH6x3rDwIayd717mXk7DZpObwwWmYSdLwwRLwSRLwbe9lXxnYZ6CC8ujjBADgYG8BMNMsss//Bu4peehanOBz6ElpllwiiXXQq3sOXWsVAuXcNd5kLvqtv3nyqOqF6k8NNO+ANORs8Coe0CnAAAAAElFTkSuQmCC" />
                            </svg>
                        </a>
                    </div>
                <?endforeach;
                wp_reset_postdata();?>
            </div>
            <div class="box box--center">
                <div class="box__half">
                    <img class="sharer__img" src="<?php bloginfo('template_url'); ?>/assets/img/sharer-img.jpg" alt="">
                </div>
                <div class="box__half">
                    <?php  $args = array (
                                    'post_type' => 'sharers',
                                    'offset' => 1,
                                    'order' => 'DESC',
                                    'orderby'   => 'meta_value',
                                    'suppress_filters' => true,
                                );
                    $result = wp_get_recent_posts($args);
                    foreach($result as $post):?>
                        <a class="sharer__link sharer__link--pb" href="<?php echo get_permalink($post['ID']); ?>">
                            <h2 class="sharer__title"><?php echo $post['post_title'];?></h2>
                            <p class="sharer__content"><?php the_field('desc-sharer', $post['ID']);?></p>
                            <svg class="sharer__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="28px">
                                <image  x="0px" y="0px" width="28px" height="28px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwgNJDc60HE6AAAA0klEQVQ4y+3UMU4CURAG4A/u4BrwSGo4AddwD2BMvJSKIh2xEAn3cGm2GovNogL72FfY+U/3Jt+bZIoBJma24qCetHne67zC/RFyCgYToXZjrE/OvLdwJpS9EIWVsG5gJYwypm2MGhgik8mBP1kGLH6x3rDwIayd717mXk7DZpObwwWmYSdLwwRLwSRLwbe9lXxnYZ6CC8ujjBADgYG8BMNMsss//Bu4peehanOBz6ElpllwiiXXQq3sOXWsVAuXcNd5kLvqtv3nyqOqF6k8NNO+ANORs8Coe0CnAAAAAElFTkSuQmCC" />
                            </svg>
                        </a>
                    <?endforeach;
                    wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>