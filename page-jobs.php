<?php
/**
  * Template Name: Вакансии
*/
?>
<?php get_header('single');?>
<section class="employees">
    <div class="wrapper">
        <h1 class="section-head"><?php single_post_title(); ?></h1>
    </div>
</section>
<section class="our-employees">
    <div class="wrapper">
        <div class="box box--center">
            <div class="our-employees__items">
                <h2 class="empoyees-head"><? the_field('sub_title_jobs'); ?></h2>
            </div>
            <div class="our-employees__col">
                <img class="our-employees__col__img" src="<?php bloginfo('template_url'); ?>/assets/img/jobs-prev.jpg" alt="">
            </div>
        </div>
    </div>
</section>
    <section class="chart">
        <div class="wrapper chart__wrapper">
            <div class="box box--center">
                <div class="chart__items">
                    <img class="chart__items__img" src="<?php bloginfo('template_url'); ?>/assets/img/employees-1.png" alt="">
                    <img class="chart__items__img" src="<?php bloginfo('template_url'); ?>/assets/img/employees-2.png" alt="">
                    <img class="chart__items__img" src="<?php bloginfo('template_url'); ?>/assets/img/employees-3.png" alt="">
                </div>
                <div class="chart__col">
                    <?php echo wpautop(the_field('content_one_jobs'));?>
                </div>
            </div>
            <div class="box">
                <div class="chart__col chart__col--top">
                    <?php echo wpautop(the_field('content_two_jobs'));?>
                </div>
            </div>
            <div class="cart__border">
                <?php echo wpautop(the_content());?>
                <img class="cart__check" src="<?php bloginfo('template_url'); ?>/assets/img/check.png" alt="">
            </div>
        </div>
    </section>
    <section class="vacancies">
        <div class="wrapper vacancies__wrapper">
            <div class="box">
                <?$vacancies = get_field('vacancy_jobs');
                    $amount = 0;
                    foreach($vacancies as $vacancy) :
                        if($amount !=6):?>
                            <div class="box__three box__three--pb box__three--hover">
                                <div class="vacancies__cover">
                                    <h2><?php echo $vacancy['title_vacancy_jobs'];?></h2>
                                    <?php echo wpautop($vacancy['desc_vacancy_jobs']);?>
                                    <div class="vacancies__cover__price"><span>от </span><?php echo $vacancy['pay_vacancy_jobs'];?></div>
                                </div>
                                <div class="vacancies__bg">
                                    <?php echo wpautop($vacancy['content_vacancy_jobs']);?>
                                    <a class="btn-email" href="mailto:<?php echo $vacancy['email_vacancy_jobs'];?>"><?php echo $vacancy['email_vacancy_jobs'];?></a>
                                    <?php $phone = str_replace([' ', '(', ')', '-'], '', $vacancy['phone_vacancy_jobs']);?>
                                    <a class="vacancies__bg__link" href="tel:<? echo $phone;?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                            <image  x="0px" y="0px" width="24px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABDlBMVEX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX///+XY5gdAAAAWHRSTlMAGE+BtOYEffrqtoIvz4AfatAwlQUBHDTavyruyEzj1xKrDyR8DP1nCuKX+WACvfQr348GwYjxTrEX936D+0HVA7rrE/BVHlypmQtl9rVrdtk1InT+xy4IWJfstAAAAAFiS0dEWZqy9BgAAAAHdElNRQfmBwcROCQVRif7AAABL0lEQVQoz3WS2VrCMBCFTzeatrRlKYiCFFtUpAoouOECKG6I+5b3fxLbpLReyLmZfPMnM5OTAFyCKMmKIkuigL/KqIRqumHoGiVqJs1nTWLZfGlbxMwu8jmSL6S7CnmSi/eTooNSOSFOkbAzGTPvYKVCV5O2jmlGfdSQr1Vr63W3kVQjajgnsYAN14NfbSbVLCJApDY2t7aB1k47ATYVIWlAKdjFXqfbS0fTJMh6GPcP0A8G/RToMhQjjIdHHo6Dk5QYCgenwzMw0ms3GzFgpXB+cRmRQXekuQIvFTUHxpMrPyKdll8f8ObRuKGuK9Mb4NYB7miZjcsuGMq7pw+zKNZG/ILMEqbH+fzp+eV1+sYt4SYyvX9Mhp9f3wsTue2xfmap7csfavnTLv8M/32fX1uQH2jEwcErAAAAAElFTkSuQmCC" />
                                        </svg>
                                        <p><?php echo $vacancy['phone_vacancy_jobs'];?></p>
                                    </a>
                                    <img class="vacancies__bg__check" src="<?php bloginfo('template_url'); ?>/assets/img/check-vakanciy.png" alt="">
                                </div>
                            </div>
                        <?endif;
                        if($amount == 6):?>
                            <div class="box__quartes box__three--pb">
                                <div class="vacancies__training">
                                    <?php echo wpautop(the_field('content_after_jobs'));?>
                                </div>
                                <img class="vacancies__training__check" src="<?php bloginfo('template_url'); ?>/assets/img/check-vakanciy.png" alt="">
                            </div>
                            <div class="box__three box__three--pb box__three--hover">
                                <div class="vacancies__cover">
                                    <h2><?php echo $vacancy['title_vacancy_jobs'];?></h2>
                                    <?php echo wpautop($vacancy['desc_vacancy_jobs']);?>
                                    <div class="vacancies__cover__price"><span>от </span><?php echo $vacancy['pay_vacancy_jobs'];?></div>
                                </div>
                                <div class="vacancies__bg">
                                    <?php echo wpautop($vacancy['content_vacancy_jobs']);?>
                                    <a class="btn-email" href="mailto:<?php echo $vacancy['email_vacancy_jobs'];?>"><?php echo $vacancy['email_vacancy_jobs'];?></a>
                                    <?php $phone = str_replace([' ', '(', ')', '-'], '', $vacancy['phone_vacancy_jobs']);?>
                                    <a class="vacancies__bg__link" href="tel:<? echo $phone;?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                            <image  x="0px" y="0px" width="24px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABDlBMVEX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX///+XY5gdAAAAWHRSTlMAGE+BtOYEffrqtoIvz4AfatAwlQUBHDTavyruyEzj1xKrDyR8DP1nCuKX+WACvfQr348GwYjxTrEX936D+0HVA7rrE/BVHlypmQtl9rVrdtk1InT+xy4IWJfstAAAAAFiS0dEWZqy9BgAAAAHdElNRQfmBwcROCQVRif7AAABL0lEQVQoz3WS2VrCMBCFTzeatrRlKYiCFFtUpAoouOECKG6I+5b3fxLbpLReyLmZfPMnM5OTAFyCKMmKIkuigL/KqIRqumHoGiVqJs1nTWLZfGlbxMwu8jmSL6S7CnmSi/eTooNSOSFOkbAzGTPvYKVCV5O2jmlGfdSQr1Vr63W3kVQjajgnsYAN14NfbSbVLCJApDY2t7aB1k47ATYVIWlAKdjFXqfbS0fTJMh6GPcP0A8G/RToMhQjjIdHHo6Dk5QYCgenwzMw0ms3GzFgpXB+cRmRQXekuQIvFTUHxpMrPyKdll8f8ObRuKGuK9Mb4NYB7miZjcsuGMq7pw+zKNZG/ILMEqbH+fzp+eV1+sYt4SYyvX9Mhp9f3wsTue2xfmap7csfavnTLv8M/32fX1uQH2jEwcErAAAAAElFTkSuQmCC" />
                                        </svg>
                                        <p><?php echo $vacancy['phone_vacancy_jobs'];?></p>
                                    </a>
                                    <img class="vacancies__bg__check" src="<?php bloginfo('template_url'); ?>/assets/img/check-vakanciy.png" alt="">
                                </div>
                            </div>
                        <? endif;
                    $amount++;?>
                    <?endforeach?>
            </div>
            <div class="vacancies__border">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="62px" height="64px">
                    <image  x="0px" y="0px" width="62px" height="64px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD4AAABACAQAAADo4Ax+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwgMNCIcDe23AAADj0lEQVRYw+3Zf2hVZRzH8dd+XLepMSWiKGSUFBEMy2UqWTT78Udo/0n/BaOEtNGPP0oKHNFG9U9BSBERAyMjQYugkhG4tcokMy01avSTslwpLXO67u7u0x+7rbl77t3OuZdLop8HLud8z/k+7/t8nx/nnO9DcVW73yEZIVEZtMWFEqsrIfa/8oNLC1VeVRTd6KhaX9liNMEfX2gt+FGr7+O7rxAEtySM2srpWl9d1H02GE4IH9d7aNIbha+OXVlcdepEk/ctrDycDp1YoHcqvhLwgvjKwOnQlY+vFJyNUXhYpM/fRRaKUQ/k7rzGMW/ljhvsE6T1WxyJG59qN0yyPJk/8a42Mu06tT13b5vgeC5eC4zlrqYtmRF8Cr4Wm9QZ8ZJfCoYs4/Xc0atqHZAFP1mt2UXuVW+TZXleadDs5CTbds1WadJrmSPUyAieKaE3nxZk1eXZ5xkuEsutVEupwW8lwAdRpT7PPmStUwW9blVVWwJ0er2mR7N8xp3uMV9d/oXHtGLIDpuN4TIdlkvr0WUIF9joZil9HjytN6N1TF+EteXfg3pBsGHiwhEjvpMWdGO+XwV7DQg+NcssBwU/+8bYxAR7SBA0xojIBkFQHwX/DPPskbVEl+BxVHtTsMZ6wSuqMXfCIzG80Ao35EVVbtSCl5HVjcWW4jlZnIgBK6DCy2sWs6XIvcWMIiWFTOnY4vAGbdjtANaQ+/3CPrSBmnLg8/v8uJ0GBT2qXOGEUW/YKfjWHOc5LNhvr7SVOY8y9vk2v2tyyCNWCQa0+tDtrrXNTYb9pdXbLnelHfaX2u78ed4+5XyP1tPOB6wuR8Cp5PM8Ep6WwcUl1HEJskVW8YKqldVvpXXmOJoIfb67sCv3AI2tq4o++mZSTloUizhptH9psXcMJQz6n97V4vOE3kV0myBYXvZ6p1nbK6Jz8HPwswce/9W51lINMX1O+SQqqxMf/kIuzRNP3e7ON8YPe7KOivSK3/J1Nkd8lxVX2sflgY/6IFHbZxqOSukMgz+cIA2cmfRqXhL8+gSfCzVWRJnjD7j79EvF9MnYWh74Yc/G9imgM2zAlVHxw36HRxP0+VMTqcOS4OsjMm7Tq7088Cf8EXuyjXk+yhwfvsuuBC2P1Nk72s/B/4fw8dzqnLJT52JUZibbmV/bkjTvUKDW9Rrtcd10N3aWvJEbXbIz2SSt0u5g4i3sQkmUj8YTiP8AH5Pz4VbDm+IAAAAASUVORK5CYII=" />
                </svg>
                <a class="vacancies__link" href="<?php the_field('file_jobs')?>" download><?php the_field('title_file_jobs')?></a>
                <img class="cart__check" src="<?php bloginfo('template_url'); ?>/assets/img/check.png" alt="">
            </div>
        </div>
    </section>
<?php get_footer();?>