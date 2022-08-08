<?php
/**
  * Template Name: Контакты
*/
?>
<?php get_header('single');?>
    <section class="contacts">
        <div class="wrapper contacts__wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
            <div class="box">
                <div class="box__three box__three--tablet">
                    <div class="contacts__items contacts__items--tablet">
                        <h5 class="contacts__title">Приёмная</h5>
                        <?if( have_rows('block_phone_reception_room') ):
                            while ( have_rows('block_phone_reception_room') ) : the_row();?>
                                <?php $phone = str_replace([' ', '(', ')', '-'], '', get_sub_field('phone_reception_room'));?>
                                <a class="contacts__tel" href="tel:<?php echo $phone;?>"><?php echo the_sub_field('phone_reception_room');?></a>
                            <? endwhile;
                        endif;?>
                        <?if( have_rows('block_email_reception_room') ):
                            while ( have_rows('block_email_reception_room') ) : the_row();
                                if( get_sub_field('email_reception_room') != '' ):?>
                                    <a class="contacts__mail" href="mailto:<?php echo the_sub_field('email_reception_room');?>">
                                        <div class="contacts__mail__circle">
                                            <svg class="contacts__mail__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 88.86">
                                                <path d="M7.05,0H115.83a7.07,7.07,0,0,1,7,7.05V81.81a7,7,0,0,1-1.22,4,2.78,2.78,0,0,1-.66,1,2.62,2.62,0,0,1-.66.46,7,7,0,0,1-4.51,1.65H7.05a7.07,7.07,0,0,1-7-7V7.05A7.07,7.07,0,0,1,7.05,0Zm-.3,78.84L43.53,40.62,6.75,9.54v69.3ZM49.07,45.39,9.77,83.45h103L75.22,45.39l-11,9.21h0a2.7,2.7,0,0,1-3.45,0L49.07,45.39Zm31.6-4.84,35.46,38.6V9.2L80.67,40.55ZM10.21,5.41,62.39,47.7,112.27,5.41Z"></path>
                                            </svg>
                                        </div>
                                        <p><?php echo the_sub_field('email_reception_room');?></p>
                                    </a>
                                <? endif;
                            endwhile;
                        endif;?>
                    </div>
                    <div class="contacts__items contacts__items--tablet">
                        <h5 class="contacts__title">Отдел продаж</h5>
                        <?if( have_rows('block_phone_sales') ):
                            while ( have_rows('block_phone_sales') ) : the_row();
                                $phone = str_replace([' ', '(', ')', '-'], '', get_sub_field('phone_sales'));?>
                                <a class="contacts__tel" href="tel:<?php echo $phone;?>"><?php echo the_sub_field('phone_sales');?></a>
                            <? endwhile;
                        endif;
                        if( have_rows('block_email_sales') ):
                            while ( have_rows('block_email_sales') ) : the_row();
                                if( get_sub_field('email_sales') != '' ):?>
                                    <a class="contacts__mail" href="mailto:<?php echo the_sub_field('email_sales');?>">
                                        <div class="contacts__mail__circle">
                                            <svg class="contacts__mail__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 88.86">
                                                <path d="M7.05,0H115.83a7.07,7.07,0,0,1,7,7.05V81.81a7,7,0,0,1-1.22,4,2.78,2.78,0,0,1-.66,1,2.62,2.62,0,0,1-.66.46,7,7,0,0,1-4.51,1.65H7.05a7.07,7.07,0,0,1-7-7V7.05A7.07,7.07,0,0,1,7.05,0Zm-.3,78.84L43.53,40.62,6.75,9.54v69.3ZM49.07,45.39,9.77,83.45h103L75.22,45.39l-11,9.21h0a2.7,2.7,0,0,1-3.45,0L49.07,45.39Zm31.6-4.84,35.46,38.6V9.2L80.67,40.55ZM10.21,5.41,62.39,47.7,112.27,5.41Z"></path>
                                            </svg>
                                        </div>
                                        <p><?php echo the_sub_field('email_sales');?></p>
                                    </a>
                                <? endif;
                            endwhile;
                        endif;?>
                    </div>
                    <div class="contacts__items contacts__items--tablet">
                        <h5 class="contacts__title">Отдел снабжение</h5>
                        <?if( have_rows('block_phone_purchase') ):
                            while ( have_rows('block_phone_purchase') ) : the_row();
                                $phone = str_replace([' ', '(', ')', '-'], '', get_sub_field('phone_purchase'));?>
                                <a class="contacts__tel" href="tel:<?php echo $phone;?>"><?php echo the_sub_field('phone_purchase');?></a>
                            <? endwhile;
                        endif;
                        if( have_rows('block_email_purchase') ):
                            while ( have_rows('block_email_purchase') ) : the_row();
                                if( get_sub_field('email_purchase') != '' ):?>
                                    <a class="contacts__mail" href="mailto:<?php echo the_sub_field('email_purchase');?>">
                                        <div class="contacts__mail__circle">
                                            <svg class="contacts__mail__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 88.86">
                                                <path d="M7.05,0H115.83a7.07,7.07,0,0,1,7,7.05V81.81a7,7,0,0,1-1.22,4,2.78,2.78,0,0,1-.66,1,2.62,2.62,0,0,1-.66.46,7,7,0,0,1-4.51,1.65H7.05a7.07,7.07,0,0,1-7-7V7.05A7.07,7.07,0,0,1,7.05,0Zm-.3,78.84L43.53,40.62,6.75,9.54v69.3ZM49.07,45.39,9.77,83.45h103L75.22,45.39l-11,9.21h0a2.7,2.7,0,0,1-3.45,0L49.07,45.39Zm31.6-4.84,35.46,38.6V9.2L80.67,40.55ZM10.21,5.41,62.39,47.7,112.27,5.41Z"></path>
                                            </svg>
                                        </div>
                                        <p><?php echo the_sub_field('email_purchase');?></p>
                                    </a>
                                <? endif;
                            endwhile;
                        endif;?>
                    </div>
                </div>
                <div class="box__quartes">
                    <div class="contacts__items contacts__items--pb">
                        <? echo the_field('maps'); ?>
                    </div>
                    <div class="contacts__items">
                        <h5 class="contacts__title">Отдел маркетинга и внешнеэкономической деятельности:</h5>
                        <?if( have_rows('block_phone_marketing') ):
                            while ( have_rows('block_phone_marketing') ) : the_row();
                                $phone = str_replace([' ', '(', ')', '-'], '', get_sub_field('phone_marketing'));?>
                                <a class="contacts__tel" href="tel:<?php echo $phone;?>"><?php echo the_sub_field('phone_marketing');?></a>
                            <? endwhile;
                        endif;
                        if( have_rows('block_email_marketing') ):
                            while ( have_rows('block_email_marketing') ) : the_row();
                                if( get_sub_field('email_marketing') != '' ):?>
                                    <a class="contacts__mail" href="mailto:<?php echo the_sub_field('email_marketing');?>">
                                        <div class="contacts__mail__circle">
                                            <svg class="contacts__mail__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 88.86">
                                                <path d="M7.05,0H115.83a7.07,7.07,0,0,1,7,7.05V81.81a7,7,0,0,1-1.22,4,2.78,2.78,0,0,1-.66,1,2.62,2.62,0,0,1-.66.46,7,7,0,0,1-4.51,1.65H7.05a7.07,7.07,0,0,1-7-7V7.05A7.07,7.07,0,0,1,7.05,0Zm-.3,78.84L43.53,40.62,6.75,9.54v69.3ZM49.07,45.39,9.77,83.45h103L75.22,45.39l-11,9.21h0a2.7,2.7,0,0,1-3.45,0L49.07,45.39Zm31.6-4.84,35.46,38.6V9.2L80.67,40.55ZM10.21,5.41,62.39,47.7,112.27,5.41Z"></path>
                                            </svg>
                                        </div>
                                        <p><?php echo the_sub_field('email_marketing');?></p>
                                    </a>
                                <? endif;
                            endwhile;
                        endif;?>
                    </div>
                    <div class="contacts__items">
                        <h5 class="contacts__title">Отдел кадров:</h5>
                        <?if( have_rows('block_phone_personnel') ):
                            while ( have_rows('block_phone_personnel') ) : the_row();
                                $phone = str_replace([' ', '(', ')', '-'], '', get_sub_field('phone_personnel'));?>
                                <a class="contacts__tel" href="tel:<?php echo $phone;?>"><?php echo the_sub_field('phone_personnel');?></a>
                            <? endwhile;
                        endif;
                        if( have_rows('block_email_personnel') ):
                            while ( have_rows('block_email_personnel') ) : the_row();
                                if( get_sub_field('email_personnel') != '' ):?>
                                    <a class="contacts__mail" href="mailto:<?php echo the_sub_field('email_personnel');?>">
                                        <div class="contacts__mail__circle">
                                            <svg class="contacts__mail__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 88.86">
                                                <path d="M7.05,0H115.83a7.07,7.07,0,0,1,7,7.05V81.81a7,7,0,0,1-1.22,4,2.78,2.78,0,0,1-.66,1,2.62,2.62,0,0,1-.66.46,7,7,0,0,1-4.51,1.65H7.05a7.07,7.07,0,0,1-7-7V7.05A7.07,7.07,0,0,1,7.05,0Zm-.3,78.84L43.53,40.62,6.75,9.54v69.3ZM49.07,45.39,9.77,83.45h103L75.22,45.39l-11,9.21h0a2.7,2.7,0,0,1-3.45,0L49.07,45.39Zm31.6-4.84,35.46,38.6V9.2L80.67,40.55ZM10.21,5.41,62.39,47.7,112.27,5.41Z"></path>
                                            </svg>
                                        </div>
                                        <p><?php echo the_sub_field('email_personnel');?></p>
                                    </a>
                                <? endif;
                            endwhile;
                        endif;?>
                    </div>
                </div>
            </div>
            <div class="contacts__border">
                <svg class="contacts__border__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="45px">
                    <image  x="0px" y="0px" width="48px" height="45px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAtCAQAAABCQyBJAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwgRCTMIq7XYAAABkUlEQVRYw+2Wv0sCYRyHnzujWiwFiyIiqKgtaAvaA6nNwNYaWvwDXHIIWiK32oqChrZ0qrmphgZpUCiDhn4Q1ZAUcon2bbgu86QDufcGyc873XH3PPd+7/2lYSZImDE6URODK455rd6IUUAUtwIxC59QDrfaCmhMkEHng3WOeFFUohCzxOmgwiRsIQhLitDVLCIIm3CGUKRNucDHO8KpThfwQFm5oMI9ENCVg21pCf6BwD7+B9im1wXviWXunARRwi4/eYGkkyBNhD4X+EcOnUt0w7TLHtjS/KOo+QX1+8CgwzwwyCGNKrII1z9XM5Qdd9lkA+RLhJy9REP4HF8adluiPSr0/Pl0iQO3gjK7jSKc0/zDtCVwIvcDBe8EEfzARf1SodPtGh5kjjVA2LEvFePcKjy+b0CtIEReGdwggVY7kztIMwqck3FZohJ5UtbpwuqBxj6CkCWg9m9bglUE4ZkRtXhLEOUTociUarwpeMNAqDCvHm8KzBb3Al8VKN4H7IIT2r0SpLwYmr/j/16WPMoXAzYcfKK3JFkAAAAASUVORK5CYII=" />
                </svg>
                <p class="contacts__border__content"><? echo the_field('info_contacts');?></p>
                <img class="cart__check cart__check--bottom" src="<?php bloginfo('template_url'); ?>/assets/img/check-vakanciy.png" alt="">
            </div>
        </div>
    </section>
<?php get_footer();?>