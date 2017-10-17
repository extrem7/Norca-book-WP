<footer>
    <div class="container">
        <a href="<? bloginfo( 'url' ) ?>">
            <img src="<? echo get_field( 'лого', 17 )['url'] ?>" alt="<? echo get_field( 'лого', 17 )['alt'] ?>"
                 class="logo"></a>
        <div class="social">
            <p><? the_field( 'соц-сети-текст', 17 ) ?></p>
            <div class="links">
                <a href="<? the_field( 'cсылка-инстраграм', 17 ) ?>"></a>
                <a href="<? the_field( 'cсылка-твиттер', 17 ) ?>"></a>
                <a href="<? the_field( 'cсылка-фейсбук', 17 ) ?>"></a>
                <a href="<? the_field( 'cсылка-vk', 17 ) ?>"></a>
                <a href="<? the_field( 'cсылка-linkedin', 17 ) ?>"></a>
            </div>
            <a href="<? the_field( 'футер_политика', 17 ) ?>" target="_blank" class="copyright"><? the_field( 'копирайт', 17 ) ?></a>
        </div>
        <a data-target="#modal-ask" data-toggle="modal" class="btn"><? the_field( 'футер_кнопка_вопроса', 17 ) ?></a>
    </div>
</footer>
<div id="modal-video" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div style="position:relative;height:0;padding-bottom:56.25%">
                    <iframe src="<? the_field( 'автор_видео_ссылка', 17 ) ?>" width="720" height="480"
                            frameborder="0" style="position:absolute;width:100%;height:100%;left:0"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-ask" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <h2 class="title columns columns-center"><? the_field( 'модалка_воросы_заголовок', 17 ) ?></h2>
                <p><? the_field( 'модалка_воросы_текст', 17 ) ?></p>
				<? echo do_shortcode( '[contact-form-7 id="176" title="Вопросы к автору" html_class="form"]' ) ?>
            </div>
        </div>
    </div>
</div>
<div id="modal-page" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <p class="tablet-text"><? the_field( 'доступ_планшет_текст', 17 ) ?></p>
            </div>
        </div>
    </div>
</div>
<div id="modal-bonus" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <h2 class="title columns columns-center"><? the_field( 'модалка_бонус_заголовок', 17 ) ?></h2>
                <p><? the_field( 'модалка_бонус_текст', 17 ) ?></p>
				<? echo do_shortcode( '[contact-form-7 id="179" title="Заявка на бонус" html_class="form"]' ) ?>
            </div>
        </div>
    </div>
</div>
<div id="modal-buy" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="title columns columns-center"><? the_field( 'заказать-заголовок', 17 ) ?></h2>
                <p class="middle"><? the_field( 'заказать-текст', 17 ) ?></p>
                <div class="col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="item">
                        <a href="<? the_field( 'магазин-1-ссылка', 17 ) ?>" class="btn">
                            <img <? the_image( 'заказать-иконка', 17 ) ?>><? the_field( 'заказать-кнопка', 17 ) ?></a>
                        <img <? the_image( 'магазин-1-картинка', 17 ) ?>>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="item">
                        <a href="<? the_field( 'магазин-2-ссылка', 17 ) ?>" class="btn">
                            <img <? the_image( 'заказать-иконка', 17 ) ?>><? the_field( 'заказать-кнопка', 17 ) ?></a>
                        <img <? the_image( 'магазин-2-картинка', 17 ) ?>>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="item">
                        <a href="<? the_field( 'магазин-3-ссылка', 17 ) ?>" class="btn">
                            <img <? the_image( 'заказать-иконка', 17 ) ?>><? the_field( 'заказать-кнопка', 17 ) ?></a>
                        <img <? the_image( 'магазин-3-картинка', 17 ) ?>>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="item">
                        <a href="<? the_field( 'магазин-4-ссылка', 17 ) ?>" class="btn">
                            <img <? the_image( 'заказать-иконка', 17 ) ?>><? the_field( 'заказать-кнопка', 17 ) ?></a>
                        <img <? the_image( 'магазин-4-картинка', 17 ) ?>>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<? path() ?>js/jquery.min.js"></script>
<script src="<? path() ?>js/bootstrap.min.js"></script>
<script>
    var thanks = '<? the_permalink( 193 ) ?>';
</script>
<script src="<? path() ?>js/main.js"></script>
<? wp_footer(); ?>
</body>
</html>