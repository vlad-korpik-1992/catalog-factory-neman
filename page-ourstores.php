<?php
/**
  * Template Name: Где купить
*/
?>
<?php get_header('single');?>
<section class="stores">
        <div class="wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
            <div class="stores__head">
                <form class="stores__form" action="#" method="post">
                    <input class="stores__input" type="text" name="city" placeholder="Поиск">
                    <button class="stores__btn" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                            <image  x="0px" y="0px" width="24px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwUQNR7NLyK4AAABXElEQVQ4y53Tz0pUYRzG8Y9aiyJrhBTCRQRtMpNa1EYNCsRWtgjadQu5UEivIApadwOtamlIMAtLcdEFDGHLCs5Iq8aRYGzm52Kqczwz5yQ97+p9fs/3/f+SasSSdXUNDR89d1WJhqxqilx7ZSwfHACnrbmLtm1b6iqm3DOMxJxaHjrhnRCqJjJuxTNt4btLeWBJCC8N9Sz0vpawdbRyXlOo9onDohAeZK3Hwi9XCg+jJmxkrWreyGlZaDn1pztoEpslwAecdC0FRrBbAnRrZ1LgJ86WAN3aQQp8xvUS4AbYSY0Xwg/nCoG3wqesMaEjPC2Iz+gIT46ab4S2hT7xC74I3/J7HJUILYu52572VQgrvSNNqQuhZtlNF016ZE3n9yNvut2LXLbd8xtCYtVeETLoofcO/oZ3rKhgthjp3ugt82aMZ7x/IP00rSHsu3N85D9m6SLJ8QFmJV4fAmpWhx6OAKDkAAAAAElFTkSuQmCC" />
                        </svg>
                    </button>
                </form>
                <div class="stores__head__btn">
                    <a class="stores__head__link stores__head__link--ourstore stores__head__link--active" href="#">Наши фирменные магазины</a>
                    <a class="stores__head__link stores__head__link--partners" href="#">Магазины наших партнеров</a>
                </div>
            </div>
            <?if( have_rows('our-stores') ):?>
                <div class="stores__body stores__body--ourstore stores__body--active"><?
                    while ( have_rows('our-stores') ) : the_row();?>
                    <div class="stores__body__content">
                        <div class="stores__body__link" id="stores<?php echo get_row_index(); ?>">
                            <div class="stores__body__title" id="stores<?php echo get_row_index(); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="24px">
                                    <image  x="0px" y="0px" width="18px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAYCAMAAADAi10DAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA51BMVEX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX///8Wnk56AAAATHRSTlMAOn+z5oANmYtXIjLgpRIJ2WiNrRWEtyXpPOdRYg/iS5d0qMtDm2vFU453eFTIAsOPBRDtLxq525S4PnUIXOsXkK4K3D+Vqgzf6BO0aDuCWAAAAAFiS0dETPdvEPMAAAAHdElNRQfmBwURGAOPwX65AAABDElEQVQY01WR55KCQBCE25NzQUUxi2JCUPRUzDnn8P7vczu1cpzzY6brm52u6lqAKvAVlKTgdwBehZgkK+GwIkssJEgkqsaEiqnRCM24lvh7j4QW5z2Z4i2dyWYzaS5SSSCX50ovsGKRFXS+y+dgqECpXKGrSrkEqAaqNe5gCieTu9aqqFuA3RCoYQNWHU0HaLUF+mkBThO2DHS6PSK9bgeQbRgu125/AAz6Lt+4BoajMTCZzubz2XQCjEdDoL2go+VqtaS5INu1tvEDbbQ1DX2788huqwuxP3josH+L40kRQjkdveWZolPks+96uVK/XnyC253Hcu63fwjW4/l8WPgoZprskyD0er1/B7/wZBm1IC1ayAAAAABJRU5ErkJggg==" />
                                </svg>
                                <p id="stores<?php echo get_row_index(); ?>"><? the_sub_field('store-address-our-stores'); ?></p>
                            </div>
                            <div class="stories__body__plus" id="stores<?php echo get_row_index(); ?>">+</div>
                        </div>
                        <div class="stores__body__info" id="1stores<?php echo get_row_index(); ?>">
                            <div class="box">
                                <div class="stores__body__items">
                                    <img src="<? the_sub_field('photo-our-stores'); ?>" alt="">
                                    <?php $phone = str_replace([' ', '(', ')', '-'], '', get_sub_field('phone-our-stores'));?>
                                    <a class="stores__body__tel" href="tel:<?php echo $phone;?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px">
                                            <image  x="0px" y="0px" width="32px" height="32px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAQAAADZc7J/AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwYLCCxt1tj5AAACtUlEQVRIx43UW4jUZRjH8c/uVqu2W5kWual0IvOiIrrMmwokiE50kogSCiIJIjrcCCVRlCQpRTcFqWxRFmx50UWBlUJq2sUO5FqYuG0nCzS3dnV1bX9dzMx/Z6aZMf43z/N7X77/5/iK9p/ZRuzypIUtzmvMLmc2uTDT5yKmbPe4GS0AejzlgCNe0dcEcrFnfCOi5IomAD22i8N+EL9Y1CLYS7wnxixvAJhlq9iiV6cXxK8ua1mRh4yLfrNqAR+JLVXJS+KnWoSFOmq8xUqiv/AtF6VpYoGoVN3tYsQa19SUtSQerAI+E3c1BPqy2Fax+ww4JqasdloRxbixcq04aFRnA6DTkLig8HssMyx2urCiPCwGdQf7xNkNgG4j4tyGgRoQO4soNokVwS6xpO7q6T4Um5r04GOxumIvEl8GG8SjdX/fLEqNUUWY42dT1XIq+cc87hZv1Vx6Uwya22IOHhBrKvZK8Ri9Rv09na8hmW7ZfwBnmTBSnguXi23Ci+L5mlmLT9ps57tSzMj79gpzjTtSzVmHr8Q9LQFnuLWwO/SWjVfFs4V8pUl/tN6HZtvYZ9yEqwpxpThQHZr/AahkvsfMQl4nhhp7YYEFLQDhA/FGTXbrxR6LC2W+rSK+MK854Bw/itsKv8t6Mea+CBcZFt/aK/aZ3wQQljjpqKU1yiMmxEbXGRZrdejydj2iPp9lJk24uUa51v6KubbY1DpEY0nudMIJd9QoMzxttyfqlr2MmNMEEG5x3KR727au0wbxTlNAuMkxJz2nuw2ixyF/6WgKCDc6LL5zfUtAn+N+axFBhPP1i9jovCans+0Wq9oAItzge3HIito3O/T6WgyUH7f2c95tlQnxp3WWlt8MVxsUm4u38ZTLcqnXjFac/Q5WEisKfEpApeb3e90OR/3u0/JwV79/ATOZWYOTBBEcAAAAAElFTkSuQmCC" />
                                        </svg>
                                        <p><? the_sub_field('phone-our-stores'); ?></p>
                                    </a>
                                </div>
                                <div class="stores__body__clock">
                                    <strong class="stores__body__clock__title">Время работы</strong>
                                    <ul class="clock__list">
                                        <li class="clock__list__items"><? the_sub_field('working-hours-monday-our-stores'); ?></li>
                                        <li class="clock__list__items"><? the_sub_field('working-hours-tuesday-our-stores'); ?></li>
                                        <li class="clock__list__items"><? the_sub_field('working-hours-wednesday-our-stores'); ?></li>
                                        <li class="clock__list__items"><? the_sub_field('working-hours-thursday-our-stores'); ?></li>
                                        <li class="clock__list__items"><? the_sub_field('working-hours-friday-our-stores'); ?></li>
                                        <li class="clock__list__items clock__list__items--color"><? the_sub_field('working-hours-saturday-our-stores'); ?></li>
                                        <li class="clock__list__items clock__list__items--color"><? the_sub_field('working-hours-sunday-our-stores'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><?
                    endwhile;?>
                </div><?
            endif;?>
            <?if( have_rows('our-stores-partners') ):?>
                <div class="stores__body stores__body--partners"><?
                    while ( have_rows('our-stores-partners') ) : the_row();?>
                    <div class="stores__body__content">
                        <div class="stores__body__link" id="stores2<?php echo get_row_index(); ?>">
                            <div class="stores__body__title" id="stores2<?php echo get_row_index(); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="24px">
                                    <image  x="0px" y="0px" width="18px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAYCAMAAADAi10DAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA51BMVEX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX+iDX///8Wnk56AAAATHRSTlMAOn+z5oANmYtXIjLgpRIJ2WiNrRWEtyXpPOdRYg/iS5d0qMtDm2vFU453eFTIAsOPBRDtLxq525S4PnUIXOsXkK4K3D+Vqgzf6BO0aDuCWAAAAAFiS0dETPdvEPMAAAAHdElNRQfmBwURGAOPwX65AAABDElEQVQY01WR55KCQBCE25NzQUUxi2JCUPRUzDnn8P7vczu1cpzzY6brm52u6lqAKvAVlKTgdwBehZgkK+GwIkssJEgkqsaEiqnRCM24lvh7j4QW5z2Z4i2dyWYzaS5SSSCX50ovsGKRFXS+y+dgqECpXKGrSrkEqAaqNe5gCieTu9aqqFuA3RCoYQNWHU0HaLUF+mkBThO2DHS6PSK9bgeQbRgu125/AAz6Lt+4BoajMTCZzubz2XQCjEdDoL2go+VqtaS5INu1tvEDbbQ1DX2788huqwuxP3josH+L40kRQjkdveWZolPks+96uVK/XnyC253Hcu63fwjW4/l8WPgoZprskyD0er1/B7/wZBm1IC1ayAAAAABJRU5ErkJggg==" />
                                </svg>
                                <p id="stores2<?php echo get_row_index(); ?>"><? the_sub_field('store-address-our-stores'); ?></p>
                            </div>
                            <div class="stories__body__plus" id="stores<?php echo get_row_index(); ?>">+</div>
                        </div>
                        <div class="stores__body__info" id="1stores2<?php echo get_row_index(); ?>">
                            <div class="box">
                                <div class="stores__body__items">
                                    <img src="<? the_sub_field('photo-our-stores'); ?>" alt="">
                                    <?php $phone = str_replace([' ', '(', ')', '-'], '', get_sub_field('phone-our-stores'));?>
                                    <a class="stores__body__tel" href="tel:<?php echo $phone;?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px">
                                            <image  x="0px" y="0px" width="32px" height="32px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAQAAADZc7J/AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBwYLCCxt1tj5AAACtUlEQVRIx43UW4jUZRjH8c/uVqu2W5kWual0IvOiIrrMmwokiE50kogSCiIJIjrcCCVRlCQpRTcFqWxRFmx50UWBlUJq2sUO5FqYuG0nCzS3dnV1bX9dzMx/Z6aZMf43z/N7X77/5/iK9p/ZRuzypIUtzmvMLmc2uTDT5yKmbPe4GS0AejzlgCNe0dcEcrFnfCOi5IomAD22i8N+EL9Y1CLYS7wnxixvAJhlq9iiV6cXxK8ua1mRh4yLfrNqAR+JLVXJS+KnWoSFOmq8xUqiv/AtF6VpYoGoVN3tYsQa19SUtSQerAI+E3c1BPqy2Fax+ww4JqasdloRxbixcq04aFRnA6DTkLig8HssMyx2urCiPCwGdQf7xNkNgG4j4tyGgRoQO4soNokVwS6xpO7q6T4Um5r04GOxumIvEl8GG8SjdX/fLEqNUUWY42dT1XIq+cc87hZv1Vx6Uwya22IOHhBrKvZK8Ri9Rv09na8hmW7ZfwBnmTBSnguXi23Ci+L5mlmLT9ps57tSzMj79gpzjTtSzVmHr8Q9LQFnuLWwO/SWjVfFs4V8pUl/tN6HZtvYZ9yEqwpxpThQHZr/AahkvsfMQl4nhhp7YYEFLQDhA/FGTXbrxR6LC2W+rSK+MK854Bw/itsKv8t6Mea+CBcZFt/aK/aZ3wQQljjpqKU1yiMmxEbXGRZrdejydj2iPp9lJk24uUa51v6KubbY1DpEY0nudMIJd9QoMzxttyfqlr2MmNMEEG5x3KR727au0wbxTlNAuMkxJz2nuw2ixyF/6WgKCDc6LL5zfUtAn+N+axFBhPP1i9jovCans+0Wq9oAItzge3HIito3O/T6WgyUH7f2c95tlQnxp3WWlt8MVxsUm4u38ZTLcqnXjFac/Q5WEisKfEpApeb3e90OR/3u0/JwV79/ATOZWYOTBBEcAAAAAElFTkSuQmCC" />
                                        </svg>
                                        <p><? the_sub_field('phone-our-stores'); ?></p>
                                    </a>
                                </div>
                                <div class="stores__body__clock">
                                    <strong class="stores__body__clock__title">Время работы</strong>
                                    <ul class="clock__list">
                                        <li class="clock__list__items"><? the_sub_field('working-hours-monday-our-stores'); ?></li>
                                        <li class="clock__list__items"><? the_sub_field('working-hours-tuesday-our-stores'); ?></li>
                                        <li class="clock__list__items"><? the_sub_field('working-hours-wednesday-our-stores'); ?></li>
                                        <li class="clock__list__items"><? the_sub_field('working-hours-thursday-our-stores'); ?></li>
                                        <li class="clock__list__items"><? the_sub_field('working-hours-friday-our-stores'); ?></li>
                                        <li class="clock__list__items clock__list__items--color"><? the_sub_field('working-hours-saturday-our-stores'); ?></li>
                                        <li class="clock__list__items clock__list__items--color"><? the_sub_field('working-hours-sunday-our-stores'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><?
                    endwhile;?>
                </div><?
            endif;?>
        </div>
    </section>
<?php get_footer();?>