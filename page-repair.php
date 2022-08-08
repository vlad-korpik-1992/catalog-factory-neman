<?php
/**
  * Template Name: Индивидуальный пошив и ремонт
*/
?>
<?php get_header('single');?>
    <section class="repair">
        <div class="wrapper">
            <h1 class="section-head repair__head"><?php single_post_title(); ?></h1>
            <div class="box">
                <div class="repair__items"></div>
                <div class="repair__items repair__content">
                    <?the_content();?>
                    <p class="repair__content__small"><? the_field('content_repair'); ?></p>
                </div>
            </div>
            <div class="repair__box">
                <div class="repair__box__items">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/repair-1.jpg" alt="">
                </div>
                <div class="repair__box__items">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/repair-2.jpg" alt="">
                </div>      
            </div>
        </div>
    </section>
    <section class="email">
        <div class="wrapper">
            <div class="email__box email__box--top">
                <div class="email__box__head">
                    <button class="email__box__head__btn email__box__head__btn--individuals email__box__head__btn--active">Заказ на индивидуальный пошив</button>
                </div>
                <form enctype="multipart/form-data" action="" id="form-repair" class="email__box__body email__box__body--active">
                    <div class="email__box__items">
                        <div class="email__box__italic">* — поля обязательные для заполнения</div>
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Как к вам можно обрашаться?*:</div>
                        <input class="email__box__input" type="text" name="firstname" id="firstname" required>
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Контактный номер телеофна:</div>
                        <input class="email__box__input" type="phone" name="phone" id="phone" required>
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Ваши пожелания по изготовлению, или ремонту обуви*:</div>
                        <textarea class="email__box__input email__box__input--textarea" name="messages" id="messages" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Прикрепляемый файл:</div>
                        <div class="email__box__row">
                            <div class="email__box__row__items">
                                <input class="email__box__file" type="file" name="file[]" id="file" multiple>
                                <label class="email__box__file__btn" for="file">
                                    <div class="field__file-fake">Выбрать файл</div>
                                </label>
                            </div>
                            <div class="email__box__row__items">
                                <div class="email__box__title email__box__title--w email__box__title--pb">Вы можете приложить дополнительные документы или материалы в электронной форме, полно раскрывающие суть Вашего обращения</div>
                                <div class="email__box__title email__box__title--w">Размер файла вложения не может превышать 1Mb. Для вложения допустимы следующие форматы файлов: jpeg, png, gif, tif, doc, docx, xls, xlsx, pdf, txt, zip, rar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title"></div>
                        <div class="email__box__footer">
                            <div class="email__box__footer__items">
                                <input type="checkbox" name="personaldata" id="personaldata">
                                <label class="email__box__checkbox" for="persoldata">Согласие на обработку персональных данных</label>
                            </div>
                            <div class="email__box__footer__items">
                                <button class="email__box__submit" id="formRepair" type="submit">
                                    <svg width="24px" height="24px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><path id="telegram-1" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z" fill="white" stroke="white"/></svg>
                                    <p>Отправить</p>
                                </button>
                            </div>        
                        </div>
                    </div>
                    <div class="form-error error" id="form-status"></div>
                </form>
            </div>
        </div>
    </section>
<?php get_footer();?>