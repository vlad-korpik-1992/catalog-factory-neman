<?php
/**
  * Template Name: О компании
*/
?>
<?php get_header('single');?>
<section class="about">
        <div class="wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
            <?if( have_rows('istoriya_fabriki') ):
              while ( have_rows('istoriya_fabriki') ) : the_row();?>
                <div class="box">
                    <div class="box__three">
                        <div class="about__data"><? the_sub_field('year-about'); ?></div>
                    </div>
                    <div class="box__three">
                        <div class="about__title"><? the_sub_field('title-about'); ?></div>
                    </div>
                    <div class="box__three"></div>
                </div>
                <div class="box box--center box--bottom">
                    <div class="box__three">
                      <img src="<?php bloginfo('template_url'); ?>/assets/img/o-company.png" alt="">
                    </div>
                    <div class="box__three about__content">
                      <?php echo wpautop(the_sub_field('content-about'));?>
                    </div>
                    <div class="box__three box__three--border about__medium">
                      <?php echo wpautop(the_sub_field('desc-about'));?>
                    </div>
                </div>
              <?endwhile;
            endif;?>
            <div class="about__box">
                <?php echo wpautop(the_content());?>
            </div>
        </div>
    </section>
    <section class="fullpage">
        <main class="fullpage__box">
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">1530</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">Анализ рыночных цен, на первый взгляд, трансформирует потребите</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">130</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">Анализ рыночных цен, на первый взгляд, трансформирует потребите</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">1039</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">Анализ рыночных цен, на первый взгляд, трансформирует потребите</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">200</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">Анализ рыночных цен, на первый взгляд, трансформирует потребите</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">1000</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">Анализ рыночных цен, на первый взгляд, трансформирует потребите</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">8643</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">Анализ рыночных цен, на первый взгляд, трансформирует потребите</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">4562</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">Анализ рыночных цен, на первый взгляд, трансформирует потребите</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">7895</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">Анализ рыночных цен, на первый взгляд, трансформирует потребите</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">13</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">Анализ рыночных цен, на первый взгляд, трансформирует потребите</p>
            </div>
            <div class="fullpage__box__items">
                <div class="fullpage__box__num">78</div>
                <div class="fullpage__box__border"></div>
                <p class="fullpage__box__title">Анализ рыночных цен, на первый взгляд, трансформирует потребите</p>
            </div>
        </main>
    </section>
    <section class="analysis">
        <div class="wrapper">
            <div class="analysis__box">
                <div class="analysis__box__items">
                    <div class="analysis__box__cover" style="background-image: url(<?the_field('photo-analytics-about');?>);"></div>
                    <p><?php echo wpautop(the_field('analytics-content-about'));?></p>
                </div>
                <div class="analysis__box__items analysis__box__items--top">
                    <div class="analysis__box__cover" style="background-image: url(<?the_field('photo-analytics-about-2');?>);"></div>
                    <p><?php echo wpautop(the_field('analytics-content-about-2'));?></p>
                </div>
            </div>
            <div class="analysis__box analysis__box--top">
                <div class="analysis__box__items">
                    <div class="analysis__box__cover" style="background-image: url(<?the_field('photo-analytics-about-3');?>);"></div>
                    <p><?php echo wpautop(the_field('analytics-content-about-3'));?></p>
                </div>
                <div class="analysis__box__items analysis__box__items--top">
                    <div class="analysis__box__cover" style="background-image: url(<?the_field('photo-analytics-about-4');?>);"></div>
                    <p><?php echo wpautop(the_field('analytics-content-about-4'));?></p>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>