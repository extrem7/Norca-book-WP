<? /* Template Name: Главная*/ ?>

<?php get_header(); ?>
<section class="main">
    <div class="container">
        <div class="image-container col-md-5">
            <img src="<? echo get_field( 'книга' )['url'] ?>" alt="<? echo get_field( 'книга' )['alt'] ?>" class="book">
        </div>
        <div class="content col-md-7">
            <h1 class="title"><? the_field( 'первый-заголовок' ) ?></h1>
            <p class="middle"><? the_field( 'первый-текст' ) ?></p>
            <a data-target="#modal-buy" data-toggle="modal" class="btn buy"><? the_field( 'кнопка-купить' ) ?></a>
            <div class="social">
                <div class="left">
                    <p><? the_field( 'соц-сети-текст' ) ?></p>
                    <div class="links">
                        <a href="<? the_field( 'cсылка-инстраграм' ) ?>" target="_blank"></a>
                        <a href="<? the_field( 'cсылка-твиттер' ) ?>" target="_blank"></a>
                        <a href="<? the_field( 'cсылка-фейсбук' ) ?>" target="_blank"></a>
                        <a href="<? the_field( 'cсылка-vk' ) ?>" target="_blank"></a>
                        <a href="<? the_field( 'cсылка-linkedin' ) ?>" target="_blank"></a>
                    </div>
                </div>
                <div class="right">
                    <p><? the_field( 'cайт-автора' ) ?></p>
                    <a href="<? the_field( 'cайт-автора-ссылка' ) ?>" class="btn" target="_blank"><? the_field( 'cайт-автора-кнопка' ) ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order">
    <div class="container">
        <h2 class="title columns columns-center"><? the_field( 'заказать-заголовок' ) ?></h2>
        <p class="middle"><? the_field( 'заказать-текст' ) ?></p>
        <div class="col-md-4 col-md-offset-0 col-sm-5 col-sm-offset-1">
            <div class="item">
                <a href="<? the_field( 'магазин-1-ссылка' ) ?>" target="_blank" class="btn">
                    <img <? the_image( 'заказать-иконка' ) ?>><? the_field( 'заказать-кнопка' ) ?></a>
                <img <? the_image( 'магазин-1-картинка' ) ?>>
            </div>
        </div>
        <div class="col-md-4 col-sm-5">
            <div class="item">
                <a href="<? the_field( 'магазин-2-ссылка' ) ?>" target="_blank" class="btn">
                    <img <? the_image( 'заказать-иконка' ) ?>><? the_field( 'заказать-кнопка' ) ?></a>
                <img <? the_image( 'магазин-2-картинка' ) ?>>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-4">
            <div class="item">
                <a href="<? the_field( 'магазин-3-ссылка' ) ?>" target="_blank" class="btn">
                    <img <? the_image( 'заказать-иконка' ) ?>><? the_field( 'заказать-кнопка' ) ?></a>
                <img <? the_image( 'магазин-3-картинка' ) ?>>
            </div>
        </div>
    </div>
</section>
<section id="about" class="about">
    <div class="container">
        <div class="col-md-6">
            <h2 class="title columns"><? the_field( 'о-книге-заголовок' ) ?></h2>
            <p class="middle"><? the_field( 'о-книге-текст' ) ?></p>
            <div class="text"><p><? the_field( 'о_книге_текст_со_скроллом' ) ?></p>
            </div>
            <!--<button data-target="#modal-buy" data-toggle="modal"><? the_field( 'о_книге_кнопка' ) ?></button>-->
        </div>
        <div class="col-md-6"><img <? the_image( 'о_книге_картинка' ) ?> class="book"></div>
    </div>
</section>
<section id="how" class="how">
    <div class="container">
        <div class="image-container col-md-6 col-sm-6">
            <div class="tablet">
                <div class="part part-1 active"><? the_field( 'как_часть_первая' ) ?></div>
                <div class="part part-2"><? the_field( 'как_часть_вторая' ) ?></div>
                <ul class="first">
                    <li class="active"><? the_field( 'глава-1' ) ?>
                        <div class="name hidden"><? the_field( 'глава-1-название' ) ?></div>
                        <div class="content hidden"><? the_field( 'глава-1-текст' ) ?> </div>
                    </li>
					<? for ( $i = 2; $i <= 5; $i ++ ): ?>
                        <li><? the_field( 'глава-' . $i ) ?>
                            <div class="name hidden"><? the_field( 'глава-' . $i . '-название' ) ?></div>
                            <div class="content hidden"><? the_field( 'глава-' . $i . '-текст' ) ?></div>
                        </li>
					<? endfor; ?>
                </ul>
                <ul class="second">
					<? for ( $i = 6; $i <= 10; $i ++ ): ?>
                        <li><? the_field( 'глава-' . $i ) ?>
                            <div class="name hidden"><? the_field( 'глава-' . $i . '-название' ) ?></div>
                            <div class="content hidden"><? the_field( 'глава-' . $i . '-текст' ) ?></div>
                        </li>
					<? endfor; ?>
                </ul>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1 col-sm-6">
            <h2 class="title columns"><? the_field( 'как_устроена_книга_заголовок' ) ?></h2>
            <p class="middle"><? the_field( 'глава-1-название' ) ?></p>
            <p><? the_field( 'глава-1-текст' ) ?></p>
        </div>
    </div>
</section>
<section class="access">

    <!-- SendPulse Form
    <style >.sp-force-hide { display: none;}.sp-form[sp-id="84638"] { display: block; background: #ffffff; padding: 15px; width: 450px; max-width: 100%; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-color: #dddddd; border-style: solid; border-width: 1px; font-family: Arial, "Helvetica Neue", sans-serif; background-repeat: no-repeat; background-position: center; background-size: auto;}.sp-form[sp-id="84638"] .sp-form-fields-wrapper { margin: 0 auto; width: 420px;}.sp-form[sp-id="84638"] .sp-form-control { background: #ffffff; border-color: #cccccc; border-style: solid; border-width: 1px; font-size: 15px; padding-left: 8.75px; padding-right: 8.75px; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; height: 35px; width: 100%;}.sp-form[sp-id="84638"] .sp-field label { color: #444444; font-size: 13px; font-style: normal; font-weight: bold;}.sp-form[sp-id="84638"] .sp-button { border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; background-color: #e32b40; color: #ffffff; width: auto; font-weight: bold; font-style: normal; font-family: Arial, sans-serif; box-shadow: none; -moz-box-shadow: none; -webkit-box-shadow: none;}.sp-form[sp-id="84638"] .sp-button-container { text-align: left;}</style><div class="sp-form-outer sp-force-hide"><div id="sp-form-84638" sp-id="84638" sp-hash="94e4c8194abf02ae028a3431689de9d9f6f2ddbb37995bc27d5bf848e21dc41b" sp-lang="ru" class="sp-form sp-form-regular sp-form-embed" sp-show-options="%7B%22amd%22%3Afalse%2C%22condition%22%3A%22onEnter%22%2C%22scrollTo%22%3A25%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22rgba(0%2C%200%2C%200%2C%200.5)%22%2C%22position%22%3A%22bottom-right%22%2C%22animation%22%3A%22%22%2C%22hideOnMobile%22%3Afalse%2C%22urlFilter%22%3Afalse%2C%22urlFilterConditions%22%3A%5B%7B%22force%22%3A%22hide%22%2C%22clause%22%3A%22contains%22%2C%22token%22%3A%22%22%7D%5D%7D"><div class="sp-form-fields-wrapper"><div class="sp-message"><div></div></div><div class="sp-element-container"><div class="sp-field " sp-id="sp-133bf1c1-d2dd-401f-b3f7-4acfe4b36948"><div style="font-family: inherit; line-height: 1.2;"><p>Оставьте свои контактные данные и получите фрагмент книги "Экспертные продажи: Новые методы убеждения покупателей" &nbsp;для ознакомления&nbsp;на свой email.</p></div></div><div class="sp-field " sp-id="sp-416a5ab8-37ee-4336-9eb1-0d5e87f3c1b4"><label class="sp-control-label"><span >Имя</span><strong >*</strong></label><input type="text" sp-type="input" name="sform[0LjQvNGP]" class="sp-form-control " placeholder="Имя" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%7D" required="required"></div><div class="sp-field " sp-id="sp-732f5d7e-fe4b-491c-8d56-55849d4a7bfc"><label class="sp-control-label"><span >Фамилия</span></label><input type="text" sp-type="input" name="sform[0KTQsNC80LjQu9C40Y8=]" class="sp-form-control " placeholder="Фамилия" sp-tips="%7B%7D"></div><div class="sp-field " sp-id="sp-2c87f14d-dc5d-4cf4-a5ee-59748d274b51"><label class="sp-control-label"><span >Email</span><strong >*</strong></label><input type="email" sp-type="email" name="sform[email]" class="sp-form-control " placeholder="username@gmail.com" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D" required="required"></div><div class="sp-field " sp-id="sp-6f22c59f-e0ee-469b-b4f2-23ceb9d38f41"><label class="sp-control-label"><span >Телефон</span></label><input type="tel" sp-type="phone" name="sform[phone]" class="sp-form-control " placeholder="1234567890" sp-tips="%7B%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20%D0%BD%D0%BE%D0%BC%D0%B5%D1%80%20%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%B0%22%7D"></div><div class="sp-field " sp-id="sp-122eef93-8ee3-42e3-b404-987973fb44d0"><label class="sp-control-label"><span >Город</span></label><input type="text" sp-type="input" name="sform[0JPQvtGA0L7QtA==]" class="sp-form-control " placeholder="Город" sp-tips="%7B%7D"></div><div class="sp-field sp-button-container " sp-id="sp-078dd9a8-1058-43f5-98d0-ed8b23b5a4bd"><button id="sp-078dd9a8-1058-43f5-98d0-ed8b23b5a4bd" class="sp-button">ОТПРАВИТЬ </button></div></div><div class="sp-link-wrapper sp-brandname__left"></div></div></div></div><script type="text/javascript" src="//static-login.sendpulse.com/apps/fc3/build/default-handler.js?1507899681304"></script>
     /SendPulse Form -->

    <div class="container">
        <h2 class="title"><? the_field( 'доступ_заголовок' ) ?></h2>
        <img <? the_image('доступ_иконка') ?>>
        <!--<button class="btn">ПОЛУЧИТЬ ДОСТУП</button>-->
        <button data-toggle="modal" data-target="#modal-access" class="btn"><? the_field( 'доступ_кнопка' ) ?></button>
    </div>
</section>
<section id="bonus" class="bonus">
    <div class="container">
        <h2 class="title columns columns-center"><? the_field( 'бонус_заголовок' ) ?></h2>
        <p class="middle"><? the_field( 'бонус_текст' ) ?></p>
        <p class="small"><? the_field( 'бонус_текст_2' ) ?></p>
        <div class="row">
            <div class="col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                <div class="item">
                    <span>01</span>
                    <div class="circle">
                        <img <? the_image( 'бонус_1_картинка' ) ?>>
                    </div>
                    <p><? the_field( 'бонус_1_текст' ) ?></p>
                    <a href="<? the_field( 'магазин-1-ссылка' ) ?>"
                       class="btn buy" target="_blank"><img <? the_image( 'магазин-1-картинка' ) ?>></a>
                    <a href="<? the_field( 'магазин-2-ссылка' ) ?>"
                       class="btn buy" target="_blank"><img <? the_image( 'магазин-2-картинка' ) ?>></a>
                    <a href="<? the_field( 'магазин-3-ссылка' ) ?>"
                       class="btn buy" target="_blank"><img <? the_image( 'магазин-3-картинка' ) ?>></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-5">
                <div class="item">
                    <span>02</span>
                    <div class="circle">
                        <img <? the_image( 'бонус_2_картинка' ) ?>>
                    </div>
                    <p><? the_field( 'бонус_2_текст' ) ?></p>
                    <div class="social">
						<? if ( get_field( 'бонус_2_фейсбук' ) ): ?>
                            <a href="<? the_field( 'бонус_2_фейсбук' ) ?>" target="_blank"><img
                                        src="<? path() ?>images/bonus-social-1.png" alt=""><span>Facebook</span></a>
						<? endif; ?>
						<? if ( get_field( 'бонус_2_vk' ) ): ?>
                            <a href="<? the_field( 'бонус_2_vk' ) ?>" target="_blank"><img
                                        src="<? path() ?>images/bonus-social-2.png" alt=""><span>Vkontakte</span></a>
						<? endif; ?>
						<? if ( get_field( 'бонус_2_linkedin' ) ): ?>
                            <a href="<? the_field( 'бонус_2_linkedin' ) ?>" target="_blank">
                                <img src="<? path() ?>images/bonus-social-3.png" alt=""><span>Linkedin</span></a>
						<? endif; ?>
						<? if ( get_field( 'бонус_2_e-mail' ) ): ?>
                            <a href="<? the_field( 'бонус_2_e-mail' ) ?>" target="_blank">
                                <img src="<? path() ?>images/bonus-social-twitter.png" alt=""><span>Twitter</span></a>
						<? endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                <div class="item">
                    <span>03</span>
                    <div class="circle">
                        <img <? the_image( 'бонус_3_картинка' ) ?>>
                    </div>
                    <p><? the_field( 'бонус_3_текст' ) ?></p>
                    <img <? the_image( 'бонус_3_картинка-подарка' ) ?> class="bonus-icon">
                    <!--<a data-target="#modal-bonus" data-toggle="modal"
                       class="btn btn-bonus"><? the_field( 'бонус_3_кнопка' ) ?></a>
                    <hr>-->
                    <button  class="btn btn-bonus" data-toggle="modal" data-target="#modal-bonus" sp-show-form="84636" ><? the_field( 'бонус_3_кнопка' ) ?></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-5">
                <div class="item">
                    <span>04</span>
                    <div class="circle">
                        <img <? the_image( 'бонус_4_картинка' ) ?>>
                    </div>
                    <p><? the_field( 'бонус_4_текст' ) ?></p>
                    <img <? the_image( 'бонус_4_картинка_email' ) ?> class="email">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="author" class="author">
    <div class="container">
        <div class="col-lg-6 col-md-7">
            <h2 class="title columns"><? the_field( 'автор_заголовок' ) ?></h2>
            <img <? the_image( 'автор-картинка' ) ?> class="author-man">
            <div class="text"><p><? the_field( 'автор_текст' ) ?></p>
            </div>
            <div class="buttons">
                <a data-target="#modal-ask" data-toggle="modal"
                   class="btn"><? the_field( 'автор_кнопка_вопроса' ) ?></a>
                <a data-target="#modal-video" data-toggle="modal" class="video"><img
                            src="<? path() ?>images/author-play.png"
                            alt=""><span><? the_field( 'автор_кнопка_видео' ) ?></span></a>
            </div>
            <div class="social">
                <p><? the_field( 'соц-сети-текст' ) ?></p>
                <div class="links">
                    <a href="<? the_field( 'cсылка-инстраграм' ) ?>" target="_blank"></a>
                    <a href="<? the_field( 'cсылка-твиттер' ) ?>" target="_blank"></a>
                    <a href="<? the_field( 'cсылка-фейсбук' ) ?>" target="_blank"></a>
                    <a href="<? the_field( 'cсылка-vk' ) ?>" target="_blank"></a>
                    <a href="<? the_field( 'cсылка-linkedin' ) ?>" target="_blank"></a>
                </div>
            </div>
        </div>
        <img <? the_image( 'автор-картинка' ) ?> class="man">
    </div>
</section>
<section id="testimonials" class="testimonials">
    <div class="container">
        <h2 class="title columns columns-center"><? the_field( 'отзывы_заголовок' ) ?></h2>
        <p class="middle"><? the_field( 'отзывы_текст' ) ?></p>
        <div class="list">
			<?php
			$temp     = $wp_query;
			$i        = 0;
			$wp_query = null;
			$wp_query = new WP_Query();
			$wp_query->query( array( 'post_type' => 'testimonials' ) );
			while ( $wp_query->have_posts() ) : $wp_query->the_post();
				$i ++; ?>
                <div class="item <? if ( $i >= 5 )
					echo 'hidde' ?>">
                    <div class="head">
                        <div class="photo">
                            <img <? the_image( 'фото',get_the_ID() ) ?>>
                        </div>
                        <div class="info">
                            <p class="name"><? the_field( 'имя' ) ?></p>
                            <p class="company"><? the_field( 'компания' ) ?></p>
                            <p class="vacancy"><? the_field( 'должность' ) ?></p>
                        </div>
                        <img <? the_image( 'иконка_компании',get_the_ID() ) ?> class="company">
                    </div>
                    <p class="info"><? the_field( 'текст_отзыва' ) ?></p>
                </div>
			<?php endwhile;
			$wp_query = null;
			$wp_query = $temp;
			wp_reset_query();
			?>
        </div>
        <button class="ajax-load"><img src="<? path() ?>images/test-load.png" alt=""><? the_field( 'отзывы_кнопка' ) ?></button>
    </div>
</section>
<section class="order-many">
    <div class="container">
        <div class="col-lg-6 col-md-7">
            <h2 class="title columns"><? the_field( 'несколько_книг_заголовок' ) ?></h2>
            <p class="middle"><? the_field( 'несколько_книг_текст' ) ?></p>
            <a data-target="#modal-ask" data-toggle="modal" class="btn"><? the_field( 'несколько_книг_кнопка' ) ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
