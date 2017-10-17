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
                        <a href="<? the_field( 'cсылка-инстраграм' ) ?>"></a>
                        <a href="<? the_field( 'cсылка-твиттер' ) ?>"></a>
                        <a href="<? the_field( 'cсылка-фейсбук' ) ?>"></a>
                        <a href="<? the_field( 'cсылка-vk' ) ?>"></a>
                        <a href="<? the_field( 'cсылка-linkedin' ) ?>"></a>
                    </div>
                </div>
                <div class="right">
                    <p><? the_field( 'cайт-автора' ) ?></p>
                    <a href="<? the_field( 'cайт-автора-ссылка' ) ?>"><? the_field( 'cайт-автора-ссылка' ) ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order">
    <div class="container">
        <h2 class="title columns columns-center"><? the_field( 'заказать-заголовок' ) ?></h2>
        <p class="middle"><? the_field( 'заказать-текст' ) ?></p>
        <div class="col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
            <div class="item">
                <a href="<? the_field( 'магазин-1-ссылка' ) ?>" class="btn">
                    <img <? the_image( 'заказать-иконка' ) ?>><? the_field( 'заказать-кнопка' ) ?></a>
                <img <? the_image( 'магазин-1-картинка' ) ?>>
            </div>
        </div>
        <div class="col-md-3 col-sm-5">
            <div class="item">
                <a href="<? the_field( 'магазин-2-ссылка' ) ?>" class="btn">
                    <img <? the_image( 'заказать-иконка' ) ?>><? the_field( 'заказать-кнопка' ) ?></a>
                <img <? the_image( 'магазин-2-картинка' ) ?>>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
            <div class="item">
                <a href="<? the_field( 'магазин-3-ссылка' ) ?>" class="btn">
                    <img <? the_image( 'заказать-иконка' ) ?>><? the_field( 'заказать-кнопка' ) ?></a>
                <img <? the_image( 'магазин-3-картинка' ) ?>>
            </div>
        </div>
        <div class="col-md-3 col-sm-5">
            <div class="item">
                <a href="<? the_field( 'магазин-4-ссылка' ) ?>" class="btn">
                    <img <? the_image( 'заказать-иконка' ) ?>><? the_field( 'заказать-кнопка' ) ?></a>
                <img <? the_image( 'магазин-4-картинка' ) ?>>
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
            <button data-target="#modal-buy" data-toggle="modal"><? the_field( 'о_книге_кнопка' ) ?></button>
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
    <div class="container">
        <div class="col-sm-6">
            <h2 class="title columns"><? the_field( 'доступ_заголовок' ) ?></h2>
			<? echo do_shortcode( '[contact-form-7 id="108" title="Доступ" html_class="form"]' ) ?>
        </div>
        <div class="tablet-container col-sm-6"><img <? the_image( 'доступ_планшет' ) ?> class="tablet">
            <p class="tablet-text"><? the_field( 'доступ_планшет_текст' ) ?></p>
            <a href="#" data-target="#modal-page" data-toggle="modal">
                <img <? the_image( 'доступ_планшет_иконка' ) ?>><? the_field( 'доступ_планшет_кнопка' ) ?></a>
        </div>
    </div>
</section>
<section id="bonus" class="bonus">
    <div class="container">
        <h2 class="title columns columns-center"><? the_field( 'бонус_заголовок' ) ?></h2>
        <p class="small"><? the_field( 'бонус_текст' ) ?></p>
        <p class="middle"><? the_field( 'бонус_текст_2' ) ?></p>
        <div class="row">
            <div class="col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                <div class="item">
                    <span>01</span>
                    <div class="circle">
                        <img <? the_image( 'бонус_1_картинка' ) ?>>
                    </div>
                    <p><? the_field( 'бонус_1_текст' ) ?></p>
                    <a href="<? the_field( 'магазин-1-ссылка' ) ?>"
                       class="btn buy"><img <? the_image( 'магазин-1-картинка' ) ?>></a>
                    <a href="<? the_field( 'магазин-2-ссылка' ) ?>"
                       class="btn buy"><img <? the_image( 'магазин-2-картинка' ) ?>></a>
                    <a href="<? the_field( 'магазин-3-ссылка' ) ?>"
                       class="btn buy"><img <? the_image( 'магазин-3-картинка' ) ?>></a>
                    <a href="<? the_field( 'магазин-4-ссылка' ) ?>"
                       class="btn buy"><img <? the_image( 'магазин-4-картинка' ) ?>></a>
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
                            <a href="<? the_field( 'бонус_2_фейсбук' ) ?>"><img
                                        src="<? path() ?>images/bonus-social-1.png" alt=""><span>Facebook</span></a>
						<? endif; ?>
						<? if ( get_field( 'бонус_2_vk' ) ): ?>
                            <a href="<? the_field( 'бонус_2_vk' ) ?>"><img
                                        src="<? path() ?>images/bonus-social-2.png" alt=""><span>Vkontakte</span></a>
						<? endif; ?>
						<? if ( get_field( 'бонус_2_linkedin' ) ): ?>
                            <a href="<? the_field( 'бонус_2_linkedin' ) ?>">
                                <img src="<? path() ?>images/bonus-social-3.png" alt=""><span>Linkedin</span></a>
						<? endif; ?>
						<? if ( get_field( 'бонус_2_e-mail' ) ): ?>
                            <a href="<? the_field( 'бонус_2_e-mail' ) ?>">
                                <img src="<? path() ?>images/bonus-social-4.png" alt=""><span>Отправить на e-mail</span></a>
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
                    <a data-target="#modal-bonus" data-toggle="modal"
                       class="btn btn-bonus"><? the_field( 'бонус_3_кнопка' ) ?></a>
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
                    <a href="<? the_field( 'cсылка-инстраграм' ) ?>"></a>
                    <a href="<? the_field( 'cсылка-твиттер' ) ?>"></a>
                    <a href="<? the_field( 'cсылка-фейсбук' ) ?>"></a>
                    <a href="<? the_field( 'cсылка-vk' ) ?>"></a>
                    <a href="<? the_field( 'cсылка-linkedin' ) ?>"></a>
                </div>
            </div>
        </div>
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
            <a data-target="#modal-buy" data-toggle="modal" class="btn"><? the_field( 'несколько_книг_кнопка' ) ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
