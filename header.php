<!DOCTYPE html>
<html lang="ru">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
    <title><?php wp_title("", true); ?></title>
</head>
<body>
    <header class="header" id="hero">
        <div class="header__slider">
            <?php if ( $slides = get_field('images_hero')): ?>
                <div class="header__slider__box">
                    <div class="header__slider__box__items header__slider__box__items--vertical">
                        <?php foreach ( $slides as $slide ): ?>
                            <div class="slider__img" style="background-image: url(<?php echo $slide; ?>);"></div>
                        <?php endforeach;?>
                    </div>
                    <div class="header__slider__box__items header__slider__box__items--horisontal">
                        <? for ($i=count($slides)-1; $i>=0; $i--) :?>
                            <div class="slider__img" style="background-image: url(<?php echo $slides[$i]; ?>);"></div>
                        <?endfor;?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="wrapper header__hv">
            <nav class="menu">
                <a href="#" class="menu__btn ">
                    <span class="menu__btn-element"></span>
                </a>
                <ul class="menu__list">
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(271)?>">Каталог</a>
                    </li>
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(8)?>">Наши магазины</a>
                    </li>
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(191)?>">Акции</a>
                    </li>
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(171)?>">Соотрудничество</a>
                    </li>
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(209)?>">Ремонт обуви</a>
                    </li>
                    <li class="menu__list__items menu__list__items--mobile">
                        <a class="social__link" href="<? the_field('ok-link', 275);?>" target="_blank">
                            <svg class="social__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 15 8.328125 C 16.296875 8.328125 17.351563 9.382813 17.351563 10.679688 C 17.351563 11.972656 16.296875 13.027344 15 13.027344 C 13.703125 13.027344 12.648438 11.972656 12.648438 10.679688 C 12.648438 9.382813 13.703125 8.328125 15 8.328125 Z M 15 16.355469 C 18.132813 16.355469 20.679688 13.808594 20.679688 10.679688 C 20.679688 7.546875 18.132813 5 15 5 C 11.867188 5 9.324219 7.546875 9.324219 10.679688 C 9.324219 13.808594 11.867188 16.355469 15 16.355469 Z M 17.296875 20.988281 C 18.453125 20.722656 19.566406 20.265625 20.59375 19.621094 C 21.371094 19.132813 21.605469 18.105469 21.117188 17.328125 C 20.625 16.546875 19.601563 16.3125 18.820313 16.804688 C 16.496094 18.265625 13.503906 18.265625 11.175781 16.804688 C 10.398438 16.3125 9.371094 16.546875 8.882813 17.328125 C 8.394531 18.105469 8.628906 19.132813 9.40625 19.621094 C 10.433594 20.265625 11.546875 20.722656 12.703125 20.988281 L 9.527344 24.160156 C 8.878906 24.808594 8.878906 25.863281 9.527344 26.511719 C 9.855469 26.835938 10.277344 27 10.703125 27 C 11.128906 27 11.554688 26.835938 11.882813 26.511719 L 15 23.394531 L 18.121094 26.511719 C 18.769531 27.164063 19.820313 27.164063 20.472656 26.511719 C 21.121094 25.863281 21.121094 24.808594 20.472656 24.160156 C 20.472656 24.160156 17.296875 20.988281 17.296875 20.988281 Z"></path>
                            </svg>
                        </a>
                        <a class="social__link" href="<? the_field('insta-link', 275);?>" target="_blank">
                            <svg class="social__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z"></path>
                            </svg>
                        </a>
                        <a class="social__link" href="<? the_field('vk-link', 275);?>" target="_blank">
                            <svg class="social__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <path d="M45.763,35.202c-1.797-3.234-6.426-7.12-8.337-8.811c-0.523-0.463-0.579-1.264-0.103-1.776 c3.647-3.919,6.564-8.422,7.568-11.143C45.334,12.27,44.417,11,43.125,11l-3.753,0c-1.237,0-1.961,0.444-2.306,1.151 c-3.031,6.211-5.631,8.899-7.451,10.47c-1.019,0.88-2.608,0.151-2.608-1.188c0-2.58,0-5.915,0-8.28 c0-1.147-0.938-2.075-2.095-2.075L18.056,11c-0.863,0-1.356,0.977-0.838,1.662l1.132,1.625c0.426,0.563,0.656,1.248,0.656,1.951 L19,23.556c0,1.273-1.543,1.895-2.459,1.003c-3.099-3.018-5.788-9.181-6.756-12.128C9.505,11.578,8.706,11.002,7.8,11l-3.697-0.009 c-1.387,0-2.401,1.315-2.024,2.639c3.378,11.857,10.309,23.137,22.661,24.36c1.217,0.12,2.267-0.86,2.267-2.073l0-3.846 c0-1.103,0.865-2.051,1.977-2.079c0.039-0.001,0.078-0.001,0.117-0.001c3.267,0,6.926,4.755,8.206,6.979 c0.368,0.64,1.056,1.03,1.8,1.03l4.973,0C45.531,38,46.462,36.461,45.763,35.202z"></path>
                            </svg>
                        </a>
                        <a class="social__link" href="<? the_field('tik-tok-link', 275);?>" target="_blank">
                            <svg class="social__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="menu__list__items menu__list__items--mobile">
                        <a href="#" class="header__box__items__link">EN</a>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73px" height="10px">
                            <image  x="0px" y="0px" width="73px" height="10px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEkAAAAKCAQAAABStruVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBhgRNSHlmMNAAAAByElEQVQ4y62Uu2tUQRSHv12TDSISH2wC4ipxDWjQQtCIIlhFK4kQEnxVAS2sJAhiYyPiP6CNTZQgvgiBDWJjERAUQVAJEmMRFSMaEZSNopvHfjaXa/a6d+8Wnmlm5pzvMDO/MyclAKzjOF1sZDUzPKdAgTnqsyx9HGALWYpM8pBhpuokYRsnOEQeecMoQ0wCIGa9aslKe+dJ05Iwsl7xd4Rc9JYdiSSu967lCDloq2CPX61uY7bVTNrjTAxZ8oINNdljfgujF1wM5188jPdULTtity022OZpXwUBRftjUq70epjmgb3mbLTVgw76K9h9bHsM2+zNIGbea+600Yx7vBEc7A6u8q3j7qqA0p6yGGCjbo2kTHvU94H3hZ0R7waHA98Pz7miCjsd+J9EBN7hS6dsRszbVOUum3wU3uW23a4Rl7nZAcfD/Utmqr5Dv7NBzGcv2+lyMWOH550IxbpYRdom81JL77RnQxlUf7qwZDXh7hpsu2MV1fW9opRfuy+eTfoXeYec/6d8PzkQ8z5/R8q+sCaX2kfP1GZTJnePHEfoYjstzPGBpxQoUKqr76TYTy97ybGWWaZ5xgj3kzpePUf6H5amXG/oH7o05feNko6xAAAAAElFTkSuQmCC" />
                        </svg>
                        <a href="#" class="header__box__items__link">RU</a>
                    </li>
                </ul>
            </nav>
            <div class="header__box">
                <div class="header__box__items">
                    <a class="social__link" href="<? the_field('ok-link', 275);?>" target="_blank">
                        <svg class="social__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path d="M 15 8.328125 C 16.296875 8.328125 17.351563 9.382813 17.351563 10.679688 C 17.351563 11.972656 16.296875 13.027344 15 13.027344 C 13.703125 13.027344 12.648438 11.972656 12.648438 10.679688 C 12.648438 9.382813 13.703125 8.328125 15 8.328125 Z M 15 16.355469 C 18.132813 16.355469 20.679688 13.808594 20.679688 10.679688 C 20.679688 7.546875 18.132813 5 15 5 C 11.867188 5 9.324219 7.546875 9.324219 10.679688 C 9.324219 13.808594 11.867188 16.355469 15 16.355469 Z M 17.296875 20.988281 C 18.453125 20.722656 19.566406 20.265625 20.59375 19.621094 C 21.371094 19.132813 21.605469 18.105469 21.117188 17.328125 C 20.625 16.546875 19.601563 16.3125 18.820313 16.804688 C 16.496094 18.265625 13.503906 18.265625 11.175781 16.804688 C 10.398438 16.3125 9.371094 16.546875 8.882813 17.328125 C 8.394531 18.105469 8.628906 19.132813 9.40625 19.621094 C 10.433594 20.265625 11.546875 20.722656 12.703125 20.988281 L 9.527344 24.160156 C 8.878906 24.808594 8.878906 25.863281 9.527344 26.511719 C 9.855469 26.835938 10.277344 27 10.703125 27 C 11.128906 27 11.554688 26.835938 11.882813 26.511719 L 15 23.394531 L 18.121094 26.511719 C 18.769531 27.164063 19.820313 27.164063 20.472656 26.511719 C 21.121094 25.863281 21.121094 24.808594 20.472656 24.160156 C 20.472656 24.160156 17.296875 20.988281 17.296875 20.988281 Z"></path>
                        </svg>
                    </a>
                    <a class="social__link" href="<? the_field('insta-link', 275);?>" target="_blank">
                        <svg class="social__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z"></path>
                        </svg>
                    </a>
                    <a class="social__link" href="<? the_field('vk-link', 275);?>" target="_blank">
                        <svg class="social__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path d="M45.763,35.202c-1.797-3.234-6.426-7.12-8.337-8.811c-0.523-0.463-0.579-1.264-0.103-1.776 c3.647-3.919,6.564-8.422,7.568-11.143C45.334,12.27,44.417,11,43.125,11l-3.753,0c-1.237,0-1.961,0.444-2.306,1.151 c-3.031,6.211-5.631,8.899-7.451,10.47c-1.019,0.88-2.608,0.151-2.608-1.188c0-2.58,0-5.915,0-8.28 c0-1.147-0.938-2.075-2.095-2.075L18.056,11c-0.863,0-1.356,0.977-0.838,1.662l1.132,1.625c0.426,0.563,0.656,1.248,0.656,1.951 L19,23.556c0,1.273-1.543,1.895-2.459,1.003c-3.099-3.018-5.788-9.181-6.756-12.128C9.505,11.578,8.706,11.002,7.8,11l-3.697-0.009 c-1.387,0-2.401,1.315-2.024,2.639c3.378,11.857,10.309,23.137,22.661,24.36c1.217,0.12,2.267-0.86,2.267-2.073l0-3.846 c0-1.103,0.865-2.051,1.977-2.079c0.039-0.001,0.078-0.001,0.117-0.001c3.267,0,6.926,4.755,8.206,6.979 c0.368,0.64,1.056,1.03,1.8,1.03l4.973,0C45.531,38,46.462,36.461,45.763,35.202z"></path>
                        </svg>
                    </a>
                    <a class="social__link" href="<? the_field('tik-tok-link', 275);?>" target="_blank">
                        <svg class="social__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"></path>
                        </svg>
                    </a>
                </div>
                <div class="header__box__items">
                    <a class="header__link" href="<?php echo site_url(); ?>">
                        <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Главная">
                    </a>
                </div>
                <div class="header__box__items">
                    <a href="#" class="header__box__items__link">EN</a>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73px" height="10px">
                        <image  x="0px" y="0px" width="73px" height="10px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEkAAAAKCAQAAABStruVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBhgRNSHlmMNAAAAByElEQVQ4y62Uu2tUQRSHv12TDSISH2wC4ipxDWjQQtCIIlhFK4kQEnxVAS2sJAhiYyPiP6CNTZQgvgiBDWJjERAUQVAJEmMRFSMaEZSNopvHfjaXa/a6d+8Wnmlm5pzvMDO/MyclAKzjOF1sZDUzPKdAgTnqsyx9HGALWYpM8pBhpuokYRsnOEQeecMoQ0wCIGa9aslKe+dJ05Iwsl7xd4Rc9JYdiSSu967lCDloq2CPX61uY7bVTNrjTAxZ8oINNdljfgujF1wM5188jPdULTtity022OZpXwUBRftjUq70epjmgb3mbLTVgw76K9h9bHsM2+zNIGbea+600Yx7vBEc7A6u8q3j7qqA0p6yGGCjbo2kTHvU94H3hZ0R7waHA98Pz7miCjsd+J9EBN7hS6dsRszbVOUum3wU3uW23a4Rl7nZAcfD/Utmqr5Dv7NBzGcv2+lyMWOH550IxbpYRdom81JL77RnQxlUf7qwZDXh7hpsu2MV1fW9opRfuy+eTfoXeYec/6d8PzkQ8z5/R8q+sCaX2kfP1GZTJnePHEfoYjstzPGBpxQoUKqr76TYTy97ybGWWaZ5xgj3kzpePUf6H5amXG/oH7o05feNko6xAAAAAElFTkSuQmCC" />
                    </svg>
                    <a href="#" class="header__box__items__link">RU</a>
                </div>
            </div>
            <div class="header__content">
                <h1><? the_field('title_hero');?></h1>
            </div>
        </div>
    </header>
