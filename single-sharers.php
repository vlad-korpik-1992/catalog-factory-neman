<?php get_header('single');?>
    <section class="post">
        <div class="wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
            <div class="post__box">
                <? the_content(); ?>
            </div>
            <div class="vacancies__border vacancies__border--mtb">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="62px" height="64px">
                    <image  x="0px" y="0px" width="62px" height="64px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD4AAABACAQAAADo4Ax+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwgMNCIcDe23AAADj0lEQVRYw+3Zf2hVZRzH8dd+XLepMSWiKGSUFBEMy2UqWTT78Udo/0n/BaOEtNGPP0oKHNFG9U9BSBERAyMjQYugkhG4tcokMy01avSTslwpLXO67u7u0x+7rbl77t3OuZdLop8HLud8z/k+7/t8nx/nnO9DcVW73yEZIVEZtMWFEqsrIfa/8oNLC1VeVRTd6KhaX9liNMEfX2gt+FGr7+O7rxAEtySM2srpWl9d1H02GE4IH9d7aNIbha+OXVlcdepEk/ctrDycDp1YoHcqvhLwgvjKwOnQlY+vFJyNUXhYpM/fRRaKUQ/k7rzGMW/ljhvsE6T1WxyJG59qN0yyPJk/8a42Mu06tT13b5vgeC5eC4zlrqYtmRF8Cr4Wm9QZ8ZJfCoYs4/Xc0atqHZAFP1mt2UXuVW+TZXleadDs5CTbds1WadJrmSPUyAieKaE3nxZk1eXZ5xkuEsutVEupwW8lwAdRpT7PPmStUwW9blVVWwJ0er2mR7N8xp3uMV9d/oXHtGLIDpuN4TIdlkvr0WUIF9joZil9HjytN6N1TF+EteXfg3pBsGHiwhEjvpMWdGO+XwV7DQg+NcssBwU/+8bYxAR7SBA0xojIBkFQHwX/DPPskbVEl+BxVHtTsMZ6wSuqMXfCIzG80Ao35EVVbtSCl5HVjcWW4jlZnIgBK6DCy2sWs6XIvcWMIiWFTOnY4vAGbdjtANaQ+/3CPrSBmnLg8/v8uJ0GBT2qXOGEUW/YKfjWHOc5LNhvr7SVOY8y9vk2v2tyyCNWCQa0+tDtrrXNTYb9pdXbLnelHfaX2u78ed4+5XyP1tPOB6wuR8Cp5PM8Ep6WwcUl1HEJskVW8YKqldVvpXXmOJoIfb67sCv3AI2tq4o++mZSTloUizhptH9psXcMJQz6n97V4vOE3kV0myBYXvZ6p1nbK6Jz8HPwswce/9W51lINMX1O+SQqqxMf/kIuzRNP3e7ON8YPe7KOivSK3/J1Nkd8lxVX2sflgY/6IFHbZxqOSukMgz+cIA2cmfRqXhL8+gSfCzVWRJnjD7j79EvF9MnYWh74Yc/G9imgM2zAlVHxw36HRxP0+VMTqcOS4OsjMm7Tq7088Cf8EXuyjXk+yhwfvsuuBC2P1Nk72s/B/4fw8dzqnLJT52JUZibbmV/bkjTvUKDW9Rrtcd10N3aWvJEbXbIz2SSt0u5g4i3sQkmUj8YTiP8AH5Pz4VbDm+IAAAAASUVORK5CYII=" />
                </svg>
                <a class="vacancies__link" href="<?php the_field('file_sharers')?>" download><?php the_field('title_file_sharers')?></a>
                <img class="cart__check" src="<?php bloginfo('template_url'); ?>/assets/img/check.png" alt="">
            </div>
        </div>
    </section>
<?php get_footer();?>