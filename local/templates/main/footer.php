<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>

    </main>

    <footer class="footer">
        <div class="container-xl">
            <div class="row">
                <div class="footer__left col-lg-3 text-center text-lg-left">
                    <p class="p">БУДЕМ НА СВЯЗИ!</p>
                    <p class="p mb-4">
                        Акции и бонусы для своих
                        <br>
                        в один клик - и у вас в почте.
                    </p>
                    <div>
                        <input type="email" value="" placeholder="Укажите Ваш E-mail">
                    </div>
                    <div class="footer__left-social mb-3 mb-lg-0">
                        <p class="">Мы в социальных сетях</p>
                        <a href="https://www.instagram.com/examvisionrussian/" target="_blank">
                            <img src="/local/templates/main/img/svg/instagram.svg" alt="Instagram">
                        </a>
                        <a href="https://vk.com/club111793076/" target="_blank">
                            <img src="/local/templates/main/img/svg/vk.svg" alt="VKontakte">
                        </a>
                        <a href="https://www.facebook.com/dentoptics/" target="_blank">
                            <img src="/local/templates/main/img/svg/fb.svg" alt="Facebook">
                        </a>
                    </div>
                </div>
                <div class="footer__center col-lg-6">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <ul class="list-unstyled">
                                <li><a href="#">Покупателям</a></li>
                                <li><a href="/contacts/">Контакты</a></li>
                                <li><a href="#">Обратная связь</a></li>
                                <li><a href="/company/">Компания</a></li>
                                <li><a href="#">Доставка и оплата</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-4">
                            <ul class="list-unstyled">
                                <li><a href="#">CAT/СAM системы</a></li>
                                <li><a href="/catalog/ioscans/">Сканеры интраоральные</a></li>
                                <li><a href="/catalog/labscans/">Сканеры лабораторные</a></li>
                                <li><a href="/catalog/milling/">Фрезы</a></li>
                                <li><a href="/catalog/cad-cam-kits/">Комплекты CAT/CAM</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-4">
                            <ul class="list-unstyled">
                                <li><a href="#">Расходные материалы</a></li>
                                <li><a href="/catalog/disks/">Диски</a></li>
                                <li><a href="/catalog/blocks/">Блоки</a></li>
                                <li><a href="/catalog/cutters/">Фрезы</a></li>
                                <li><a href="/catalog/3d-printing/">3D печать</a></li>
                                <li><a href="/catalog/accessories/">Аксессуары</a></li>
                                <li><a href="/catalog/dye/">Красители</a></li>
                                <li><a href="/catalog/software/">Программное&nbsp;обеспечение</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__right col-lg-3">
                    <div class="footer__right-info">
                        <div>
                            <a href="tel:+4957962410">8 (495) 796 24 10</a>
                            - с 10:00 до 20:00 часов по будням
                        </div>
                        <div>
                            <a href="tel:+79660157063">8 (966) 015 70 63</a>
                            - горячая линия c 8:00 до 17:00
                        </div>
                    </div>
                    <div class="footer__right-mail">
                        <a href="mailto:mail@dentoptics.ru">
                            <img src="/local/templates/main/img/svg/mail-light.svg" alt="E-mail">
                            <span>mail@dentoptics.ru</span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-primary btn-feedback" data-toggle="modal" data-target="#exampleModal">
                        Заказать обратный звонок
                    </button>

                    <div class="footer__right-cards">
                        <img src="/local/templates/main/img/svg/mastercard.svg" loading="lazy" alt="MasterCard">
                        <img src="/local/templates/main/img/svg/visa.svg" loading=""lazy alt="VISA">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__rights">
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-lg-2">© DENTOPTICS, 2020</div>
                    <div class="col-lg-3">
                        <a href="#">Пользовательское соглашение и условия</a>
                    </div>
                    <div class="col-lg-7">
                        <a href="#">Обработка персональных данных</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- modal -->
    <div class="modal fade" id="modalVideoHeader" data-backdrop="_static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">

            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="embed-responsive embed-responsive-16by9">
                        <video src="/video/3d_shape_def.mp4" controls>
                            <source src="/video/3d_shape_def.mp4" type="video/mp4">
                        </video>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!--//-->

    <div class="modal fade" id="modalVideo" data-backdrop="_static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">

            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="embed-responsive embed-responsive-16by9">
                        <video src="/video/digital_event_2020.mp4" controls>
                            <source src="/video/digital_event_2020.mp4" type="video/mp4">
                        </video>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!--//-->

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.feedback",
        "bootstrap_v4",
        array(
            "USE_CAPTCHA" => "N",
            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
            "EMAIL_TO" => "my@email.com",
            "REQUIRED_FIELDS" => array(
                0 => "NAME",
                1 => "EMAIL",
                2 => "MESSAGE",
            ),
            "EVENT_MESSAGE_ID" => array(
                0 => "7",
            ),
            "COMPONENT_TEMPLATE" => "bootstrap_v4"
        ),
        false
    );?>
    <!-- /modal -->

</body>
</html>