<?php
/**
  * Template Name: Электронные обращения
*/
?>
<?php get_header('single');?>
    <section class="email">
        <div class="wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
            <div class="contacts__border contacts__border--color contacts__border--mt">
                <svg class="contacts__border__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="45px">
                    <image  x="0px" y="0px" width="48px" height="45px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAtCAQAAABCQyBJAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwgRCTMIq7XYAAABkUlEQVRYw+2Wv0sCYRyHnzujWiwFiyIiqKgtaAvaA6nNwNYaWvwDXHIIWiK32oqChrZ0qrmphgZpUCiDhn4Q1ZAUcon2bbgu86QDufcGyc873XH3PPd+7/2lYSZImDE6URODK455rd6IUUAUtwIxC59QDrfaCmhMkEHng3WOeFFUohCzxOmgwiRsIQhLitDVLCIIm3CGUKRNucDHO8KpThfwQFm5oMI9ENCVg21pCf6BwD7+B9im1wXviWXunARRwi4/eYGkkyBNhD4X+EcOnUt0w7TLHtjS/KOo+QX1+8CgwzwwyCGNKrII1z9XM5Qdd9lkA+RLhJy9REP4HF8adluiPSr0/Pl0iQO3gjK7jSKc0/zDtCVwIvcDBe8EEfzARf1SodPtGh5kjjVA2LEvFePcKjy+b0CtIEReGdwggVY7kztIMwqck3FZohJ5UtbpwuqBxj6CkCWg9m9bglUE4ZkRtXhLEOUTociUarwpeMNAqDCvHm8KzBb3Al8VKN4H7IIT2r0SpLwYmr/j/16WPMoXAzYcfKK3JFkAAAAASUVORK5CYII=" />
                </svg>
                <div class="contacts__border__items email__content">
                    <? echo wpautop( the_content() );?>    
                </div>
                <img class="cart__check cart__check--bottom" src="<?php bloginfo('template_url'); ?>/assets/img/check-vakanciy.png" alt="">
            </div>
            <div class="email__box">
                <div class="email__box__head">
                    <button class="email__box__head__btn email__box__head__btn--individuals email__box__head__btn--active" id="email1">Электронные обращения граждан</button>
                    <button class="email__box__head__btn email__box__head__btn--legal" id="email2">Электронные обращения юридических лиц</button>
                </div>
                <form enctype="multipart/form-data" action="#" class="email__box__body email__box__body--active" id="1email1">
                    <div class="email__box__items">
                        <div class="email__box__italic">* — поля обязательные для заполнения</div>
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Кому*:</div>
                        <input class="email__box__input" type="text" name="firstname-individuals" id="firstname-individuals">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Фамилия, собственное имя, отчество (если таковое имеется)*:</div>
                        <input class="email__box__input" type="text" name="lastname-individuals" id="lastname-individuals">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Номер телефона:</div>
                        <input class="email__box__input" type="phone" name="phone-individuals" id="phone-individuals">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Адрес места жительства (место пребывания)*:</div>
                        <input class="email__box__input" type="text" name="address-individuals" id="address-individuals">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">E-mail (адрес электронной почты заявителя)*:</div>
                        <input class="email__box__input" type="email" name="email-individuals" id="email-individuals">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Суть обращения (максимум 2000 символов)*:</div>
                        <textarea class="email__box__input email__box__input--textarea" name="messages-individuals" id="messages-individuals" cols="30" rows="10"></textarea>
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Прикрепляемый файл:</div>
                        <div class="email__box__row">
                            <div class="email__box__row__items">
                                <input class="email__box__file" type="file" name="file-individuals[]" id="file-individuals" multiple>
                                <label class="email__box__file__btn" for="file-individuals">
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
                                <input type="checkbox" name="personaldata-individuals" id="personaldata-individuals">
                                <label class="email__box__checkbox" for="persoldata-individuals">Согласие на обработку персональных данных</label>
                            </div>
                            <div class="email__box__footer__items">
                                <button class="email__box__submit" id="emailIndividuals" type="submit">
                                    <svg width="24px" height="24px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><path id="telegram-1" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z" fill="white" stroke="white"/></svg>
                                    <p>Отправить</p>
                                </button>
                            </div>        
                        </div>
                    </div>
                    <div class="form-error error" id="form-status-individuals"></div>
                </form>
                <form enctype="multipart/form-data" action="#" class="email__box__body" id="1email2">
                    <div class="email__box__items">
                        <div class="email__box__italic">* — поля обязательные для заполнения</div>
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Кому*:</div>
                        <input class="email__box__input" type="text" name="firstname-entities" id="firstname-entities">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Полное наименование юридического лица*:</div>
                        <input class="email__box__input" type="text" name="entity" id="entity">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Номер телефона:</div>
                        <input class="email__box__input" type="phone" name="phone-entities" id="phone-entities">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Адрес юридического лица*:</div>
                        <input class="email__box__input" type="text" name="address-entities" id="address-entities">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Фамилия, собственное имя, отчество (если таковое имеется) либо инициалы руководителя или лица, уполномоченного в установленном порядке подписывать обращения*:</div>
                        <input class="email__box__input" type="text" name="surname-entities" id="surname-entities">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">E-mail (адрес электронной почты заявителя)*:</div>
                        <input class="email__box__input" type="email" name="email-entities" id="email-entities">
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Суть обращения (максимум 2000 символов)*:</div>
                        <textarea class="email__box__input email__box__input--textarea" name="messages-entities" id="messages-entities" cols="30" rows="10"></textarea>
                    </div>
                    <div class="email__box__items">
                        <div class="email__box__title">Прикрепляемый файл:</div>
                        <div class="email__box__row">
                            <div class="email__box__row__items">
                                <input class="email__box__file" type="file" name="file-entities[]" id="file-entities" multiple>
                                <label class="email__box__file__btn" for="file-entities">
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
                                <input type="checkbox" name="personaldata-entities" id="personaldata-entities">
                                <label class="email__box__checkbox" for="personaldata-entities">Согласие на обработку персональных данных</label>
                            </div>
                            <div class="email__box__footer__items">
                                <button class="email__box__submit" id="emailEntities" type="submit">
                                    <svg width="24px" height="24px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><path id="telegram-1" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z" fill="white" stroke="white"/></svg>
                                    <p>Отправить</p>
                                </button>
                            </div>        
                        </div>
                    </div>
                    <div class="form-error error" id="form-status-entities"></div>
                </form>
            </div>
        </div>
    </section>
<?php get_footer();?>