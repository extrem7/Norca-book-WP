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
<div class="scroll-up"></div>
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


<div id="modal-buy" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="title columns columns-center"><? the_field( 'заказать-заголовок', 17 ) ?></h2>
                <p class="middle"><? the_field( 'заказать-текст', 17 ) ?></p>
                <div class="col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="item">
                        <a href="<? the_field( 'магазин-1-ссылка', 17 ) ?>" target="_blank" class="btn">
                            <img <? the_image( 'заказать-иконка', 17 ) ?>><? the_field( 'заказать-кнопка', 17 ) ?></a>
                        <img <? the_image( 'магазин-1-картинка', 17 ) ?>>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="item">
                        <a href="<? the_field( 'магазин-2-ссылка', 17 ) ?>" target="_blank" class="btn">
                            <img <? the_image( 'заказать-иконка', 17 ) ?>><? the_field( 'заказать-кнопка', 17 ) ?></a>
                        <img <? the_image( 'магазин-2-картинка', 17 ) ?>>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="item">
                        <a href="<? the_field( 'магазин-3-ссылка', 17 ) ?>" target="_blank" class="btn">
                            <img <? the_image( 'заказать-иконка', 17 ) ?>><? the_field( 'заказать-кнопка', 17 ) ?></a>
                        <img <? the_image( 'магазин-3-картинка', 17 ) ?>>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="item">
                        <a href="<? the_field( 'магазин-4-ссылка', 17 ) ?>" target="_blank" class="btn">
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
<!-- SendPulse Form -->
<style >.sp-force-hide { display: none;}.sp-form[sp-id="84636"] { display: block; background: #ffffff; padding: 15px; width: 450px; max-width: 100%; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-color: #dddddd; border-style: solid; border-width: 1px; font-family: Arial, "Helvetica Neue", sans-serif; background-repeat: no-repeat; background-position: center; background-size: auto;}.sp-form[sp-id="84636"] .sp-form-fields-wrapper { margin: 0 auto; width: 420px;}.sp-form[sp-id="84636"] .sp-form-control { background: #ffffff; border-color: #cccccc; border-style: solid; border-width: 1px; font-size: 15px; padding-left: 8.75px; padding-right: 8.75px; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; height: 35px; width: 100%;}.sp-form[sp-id="84636"] .sp-field label { color: #444444; font-size: 13px; font-style: normal; font-weight: bold;}.sp-form[sp-id="84636"] .sp-button { border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; background-color: #e32b40; color: #ffffff; width: auto; font-weight: normal; font-style: normal; font-family: Arial, sans-serif; box-shadow: none; -moz-box-shadow: none; -webkit-box-shadow: none;}.sp-form[sp-id="84636"] .sp-button-container { text-align: left;}.sp-popup-outer { background: rgba(0, 0, 0, 0.5);}</style><div class="sp-form-outer sp-popup-outer sp-force-hide" style="background: rgba(0, 0, 0, 0.5);"><div id="sp-form-84636" sp-id="84636" sp-hash="6e6042f124081ed54990a9095264ede7fbc2400c06f87b5d77f1b88f50ef0d4e" sp-lang="ru" class="sp-form sp-form-regular sp-form-popup" sp-show-options="%7B%22amd%22%3Afalse%2C%22condition%22%3A%22onButtonClick%22%2C%22scrollTo%22%3A25%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22rgba(0%2C%200%2C%200%2C%200.5)%22%2C%22position%22%3A%22bottom-right%22%2C%22animation%22%3A%22%22%2C%22hideOnMobile%22%3Afalse%2C%22urlFilter%22%3Afalse%2C%22urlFilterConditions%22%3A%5B%7B%22force%22%3A%22hide%22%2C%22clause%22%3A%22contains%22%2C%22token%22%3A%22%22%7D%5D%7D"><div class="sp-form-fields-wrapper"><button class="sp-btn-close ">&nbsp;</button><div class="sp-message"><div></div></div><div class="sp-element-container"><div class="sp-field " sp-id="sp-6131c8e0-9754-4d1e-8842-bca5bdbd8247"><div style="font-family: inherit; line-height: 1.2;"><p style="text-align: left;"><span style="font-size: 24px;">Получить бонус</span></p><p style="text-align: left;">Оставьте свои контактные данные и получите доступ к бонусам на свой e-mail</p></div></div><div class="sp-field " sp-id="sp-da354c57-a4d9-49fb-b4b5-ff1777d2cdbc"><label class="sp-control-label"><span >Ваше имя</span><strong >*</strong></label><input type="text" sp-type="input" name="sform[0LjQvNGP]" class="sp-form-control " placeholder="Имя" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%7D" required="required"></div><div class="sp-field " sp-id="sp-5bf3ced3-ff26-45d0-b1b2-be94f60b1602"><label class="sp-control-label"><span >Ваша фамилия</span><strong >*</strong></label><input type="text" sp-type="input" name="sform[0KTQsNC80LjQu9C40Y8=]" class="sp-form-control " placeholder="Фамилия" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%7D" required="required"></div><div class="sp-field " sp-id="sp-9b6c1cdf-c1b9-4174-bd05-9bd676a59b15"><label class="sp-control-label"><span >Email</span><strong >*</strong></label><input type="email" sp-type="email" name="sform[email]" class="sp-form-control " placeholder="username@gmail.com" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D" required="required"></div><div class="sp-field " sp-id="sp-6f75878b-155e-448e-acf6-e0398c2c4c64"><label class="sp-control-label"><span >Телефон</span></label><input type="tel" sp-type="phone" name="sform[phone]" class="sp-form-control " placeholder="1234567890" sp-tips="%7B%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20%D0%BD%D0%BE%D0%BC%D0%B5%D1%80%20%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%B0%22%7D"></div><div class="sp-field " sp-id="sp-802e2066-5ff7-4493-9a93-9e78f9cc5670"><label class="sp-control-label"><span >Город</span></label><input type="text" sp-type="input" name="sform[0JPQvtGA0L7QtA==]" class="sp-form-control " placeholder="Город" sp-tips="%7B%7D"></div><div class="sp-field sp-button-container " sp-id="sp-1b8a9546-b6ea-411e-a2b8-c197e8f0e1da"><button id="sp-1b8a9546-b6ea-411e-a2b8-c197e8f0e1da" class="sp-button">ОТПРАВИТЬ </button></div></div><div class="sp-link-wrapper sp-brandname__left"></div></div></div></div><script type="text/javascript" src="//static-login.sendpulse.com/apps/fc3/build/default-handler.js?1507899681304"></script>
<!-- /SendPulse Form -->
<!-- SendPulse Form -->
<style >.sp-force-hide { display: none;}.sp-form[sp-id="84638"] { display: block; background: #ffffff; padding: 15px; width: 450px; max-width: 100%; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-color: #dddddd; border-style: solid; border-width: 1px; font-family: Arial, "Helvetica Neue", sans-serif; background-repeat: no-repeat; background-position: center; background-size: auto;}.sp-form[sp-id="84638"] .sp-form-fields-wrapper { margin: 0 auto; width: 420px;}.sp-form[sp-id="84638"] .sp-form-control { background: #ffffff; border-color: #cccccc; border-style: solid; border-width: 1px; font-size: 15px; padding-left: 8.75px; padding-right: 8.75px; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; height: 35px; width: 100%;}.sp-form[sp-id="84638"] .sp-field label { color: #444444; font-size: 13px; font-style: normal; font-weight: bold;}.sp-form[sp-id="84638"] .sp-button { border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; background-color: #e32b40; color: #ffffff; width: auto; font-weight: bold; font-style: normal; font-family: Arial, sans-serif; box-shadow: none; -moz-box-shadow: none; -webkit-box-shadow: none;}.sp-form[sp-id="84638"] .sp-button-container { text-align: left;}.sp-popup-outer { background: rgba(0, 0, 0, 0.5);}</style><div class="sp-form-outer sp-popup-outer sp-force-hide" style="background: rgba(0, 0, 0, 0.5);"><div id="sp-form-84638" sp-id="84638" sp-hash="94e4c8194abf02ae028a3431689de9d9f6f2ddbb37995bc27d5bf848e21dc41b" sp-lang="ru" class="sp-form sp-form-regular sp-form-popup" sp-show-options="%7B%22amd%22%3Afalse%2C%22condition%22%3A%22onEnter%22%2C%22scrollTo%22%3A25%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22rgba(0%2C%200%2C%200%2C%200.5)%22%2C%22position%22%3A%22bottom-right%22%2C%22animation%22%3A%22%22%2C%22hideOnMobile%22%3Afalse%2C%22urlFilter%22%3Afalse%2C%22urlFilterConditions%22%3A%5B%7B%22force%22%3A%22hide%22%2C%22clause%22%3A%22contains%22%2C%22token%22%3A%22%22%7D%5D%7D"><div class="sp-form-fields-wrapper"><button class="sp-btn-close ">&nbsp;</button><div class="sp-message"><div></div></div><div class="sp-element-container"><div class="sp-field " sp-id="sp-133bf1c1-d2dd-401f-b3f7-4acfe4b36948"><div style="font-family: inherit; line-height: 1.2;"><p>Оставьте свои контактные данные и получите фрагмент книги "Экспертные продажи: Новые методы убеждения покупателей" &nbsp;для ознакомления&nbsp;на свой email.</p></div></div><div class="sp-field " sp-id="sp-416a5ab8-37ee-4336-9eb1-0d5e87f3c1b4"><label class="sp-control-label"><span >Имя</span><strong >*</strong></label><input type="text" sp-type="input" name="sform[0LjQvNGP]" class="sp-form-control " placeholder="Имя" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%7D" required="required"></div><div class="sp-field " sp-id="sp-732f5d7e-fe4b-491c-8d56-55849d4a7bfc"><label class="sp-control-label"><span >Фамилия</span></label><input type="text" sp-type="input" name="sform[0KTQsNC80LjQu9C40Y8=]" class="sp-form-control " placeholder="Фамилия" sp-tips="%7B%7D"></div><div class="sp-field " sp-id="sp-2c87f14d-dc5d-4cf4-a5ee-59748d274b51"><label class="sp-control-label"><span >Email</span><strong >*</strong></label><input type="email" sp-type="email" name="sform[email]" class="sp-form-control " placeholder="username@gmail.com" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D" required="required"></div><div class="sp-field " sp-id="sp-6f22c59f-e0ee-469b-b4f2-23ceb9d38f41"><label class="sp-control-label"><span >Телефон</span></label><input type="tel" sp-type="phone" name="sform[phone]" class="sp-form-control " placeholder="1234567890" sp-tips="%7B%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20%D0%BD%D0%BE%D0%BC%D0%B5%D1%80%20%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%B0%22%7D"></div><div class="sp-field " sp-id="sp-122eef93-8ee3-42e3-b404-987973fb44d0"><label class="sp-control-label"><span >Город</span></label><input type="text" sp-type="input" name="sform[0JPQvtGA0L7QtA==]" class="sp-form-control " placeholder="Город" sp-tips="%7B%7D"></div><div class="sp-field sp-button-container " sp-id="sp-078dd9a8-1058-43f5-98d0-ed8b23b5a4bd"><button id="sp-078dd9a8-1058-43f5-98d0-ed8b23b5a4bd" class="sp-button">ОТПРАВИТЬ </button></div></div><div class="sp-link-wrapper sp-brandname__left"></div></div></div></div><script type="text/javascript" src="//static-login.sendpulse.com/apps/fc3/build/default-handler.js?1507899681304"></script>
<!-- /SendPulse Form -->

<script>
    var thanks = '<? the_permalink( 193 ) ?>';
</script>
<script src="<? path() ?>js/main.js"></script>
<? wp_footer(); ?>
</body>
</html>