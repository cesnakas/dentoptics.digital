<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

    <section class="section">
        <div class="container-xl">
            <div class="row">

                <div class="col-lg-6 mb-3 contacts_cont">
                    <img src="/images/contacts/maxim.png" height="150" class="contact_avatar">
                    <div class="contact_info">
                        <p class="contact_name mb-0">Сивуков Максим Владимирович</p>
                        <p class="text-muted mb-2">
                            <small>Бренд-менеджер <b>3shape</b> и <b>Roland</b></small>
                        </p>
                        <a class="contact_tel" href="tel:+79031302440">8 (903) 130 24 40</a>
                    </div>
                </div>

                <div class="col-lg-6 mb-3 contacts_cont">
                    <img src="/images/contacts/elena.png" height="150" class="contact_avatar">
                    <div class="contact_info">
                        <p class="contact_name mb-0">Семенец Елена Олеговна</p>
                        <p class="text-muted mb-2">
                            <small>Бренд-менеджер <b>Dentsply Sirona</b></small>
                        </p>
                        <a class="contact_tel" href="tel:+79660157063">8 (966) 015 70 63</a>
                    </div>
                </div>

                <br>

                <div class="col-lg-3 mt-5 text-center text-lg-left">
                    <b class="contact_zag">Мы в социальных сетях</b><br>
                    <div class="bottom_txt_cont">
                        <a href="https://vk.com/club111793076/"><img src="/local/templates/main/img/svg/vk_b.svg"
                                                                     alt=""></a> <a
                                href="https://www.instagram.com/examvisionrussian/"><img
                                    src="/local/templates/main/img/svg/inst_b.svg" alt=""></a> <a
                                href="https://www.facebook.com/dentoptics/"><img
                                    src="/local/templates/main/img/svg/fb_b.svg" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-6 text-center mt-5">
                    <b class="contact_zag">Наш адрес</b><br>
                    <span class="bottom_txt_cont">Москва, 2-й Троицкий переулок, 6А, строение 5</span>
                </div>

                <div class="col-lg-3 text-center text-lg-right mt-5">
                    <b class="contact_zag">Наша почта</b><br>
                    <a class="bottom_txt_cont" href="mailto:mail@dentoptics.ru">mail@dentoptics.ru</a>
                </div>

                <div class="col-12 my-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.9720935405276!2d37.62333303854174!3d55.776356518684615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a6d05dc7fa3%3A0x3fa71787869a1494!2zMi3QuSDQotGA0L7QuNGG0LrQuNC5INC_0LXRgC4sIDbQkCDRgdGC0YDQvtC10L3QuNC1IDUsINCc0L7RgdC60LLQsCwgMTI5MDkw!5e0!3m2!1sru!2sru!4v1602697696579!5m2!1sru!2sru"
                            width="100%" height="430" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-12">
                    <h2 class="a_chto">А что если?</h2>
                    <span class="vot_chto">Задай любой вопрос и мы обязательно ответим</span><br>
                    <br>
                </div>
            </div>

            <form class="row contacts_form">
                <div class="col-lg-4 pr-3">
                    <input type="text" placeholder="Имя">
                </div>
                <div class="col-lg-4 my-3 my-lg-0 px-lg-2">
                    <input type="tel" placeholder="Телефон">
                </div>
                <div class="col-lg-4 pl-3">
                    <input type="email" placeholder="Почта">
                </div>
                <div class="col-12">
                    <textarea type="text" class="my-4" placeholder="Текст сообщения"></textarea>
                </div>
                <div class="col-lg-12 text-center">
                    <input class="contact_form_ok" value="Отправить" type="submit">
                </div>
            </form>

        </div>
    </section>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>