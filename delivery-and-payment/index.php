<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка и оплата");
?>

    <section class="section">
        <div class="container">

            <h3 class="text-center mb-5" style="font-weight: 600;font-size: 18px;line-height: 25px;">
                Доставка и оплата
            </h3>

            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p style="font-family: Open Sans;font-style: normal;font-weight: bold;font-size: 24px;line-height: 32px;letter-spacing: -0.03em;color: #FB668A;text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.17);">
                        Оплачивай онлайн и выберай удобный способ доставки
                    </p>
                </div>
                <!--//-->
                <div class="col-lg-8 d-flex align-items-center">

                    <div class="d-flex justify-content-around align-items-center w-100"  style="min-height: 178px; background: #F8F8F8; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.06); border-radius: 10px;">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/payment_delivery.svg" alt="">
                        <div>
                            <p class="mb-1" style="font-size: 14px">
                                Доставка транспортной компанией <span style="color: #FB668A;">по всей территории России.</span>
                            </p>
                            <p class="mb-1 text-right" style="font-weight: 300;font-size: 12px;line-height: 16px;">
                                Условия обговариваются в каждом конкретном случае
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <!--//-->
            <div class="row mt-5 no-gutters">

                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center flex-column p-5 mr-lg-2" style="min-height: 178px;font-size: 13px;background: #F8F8F8;box-shadow: 5px 5px 15px rgba(0,0,0,.06);border-radius: 10px;">
                        <h5 style="font-size: 13px;font-weight: bold;">Оплата <span style="color: #FB668A;">наличными</span></h5>
                        <span class="text-center">
                            Возможность оплатить наличными курьеру, либо в пункте выдачи
                            по адресу г. Москва, пер. Васнецова, 7, 4 этаж
                        </span>
                    </div>
                </div>
                <!--//-->
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center flex-column p-5 mx-lg-2" style="min-height: 178px;font-size: 13px;background: #F8F8F8;box-shadow: 5px 5px 15px rgba(0,0,0,.06);border-radius: 10px;">
                        <h5 style="font-size: 13px;font-weight: bold;">Оплата <span style="color: #FB668A;">онлайн</span></h5>
                        <span class="text-center">
                            На сайте есть возможность оплатить банковскими картами VISA, MasterCard, МИР
                        </span>
                    </div>
                </div>
                <!--//-->
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center flex-column p-5 ml-lg-2" style="min-height: 178px;font-size: 13px;background: #F8F8F8;box-shadow: 5px 5px 15px rgba(0,0,0,.06);border-radius: 10px;">
                        <h5 style="font-size: 13px;font-weight: bold;">Выставленный <span style="color: #FB668A;">счет</span></h5>
                        <span class="text-center">
                            Безналичный расчет (по счету) – такой расчет более всего подходит для организаций.
                        </span>
                    </div>
                </div>
            </div>
            <!--//-->
            <div class="mt-5 text-center" style="font-size: 12px;">
                <h3 style="font-size: 12px;font-weight: bold">Процесс оплаты:</h3>
                <p>При выборе формы оплаты с помощью пластиковой карты проведение платежа по заказу производится непосредственно после его оформления. После завершения оформления заказа в нашем магазине, Вы должны будете нажать на кнопку «Оплата банковской картой», при этом система переключит Вас на страницу авторизационного сервера, где Вам будет предложено ввести данные пластиковой карты, инициировать ее авторизацию, после чего вернуться в наш магазин кнопкой "Вернуться в магазин". После того, как Вы возвращаетесь в наш магазин, система уведомит Вас о результатах авторизации. В случае подтверждения авторизации Ваш заказ будет автоматически выполняться в соответствии с заданными Вами условиями. В случае отказа в авторизации карты Вы сможете повторить процедуру оплаты. При аннулировании позиций из оплаченного заказа (или при аннулировании заказа целиком) Вы можете заказать другой товар на эту сумму, либо вернуть деньги связавшись с менеджером по телефону</p>
                <p>+7(495)7962410</p>
            </div>
            <div class="mt-5 text-center" style="font-size: 12px;">
                <h3 style="font-size: 12px;font-weight: bold">Процесс передачи данных:</h3>
                <p>Для оплаты покупки Вы будете перенаправлены на платежный шлюз ОАО "Сбербанк России" для ввода реквизитов Вашей карты. Пожалуйста, приготовьте Вашу пластиковую карту заранее. Соединение с платежным шлюзом и передача информации осуществляется в защищенном режиме с использованием протокола шифрования SSL. В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified By Visa или MasterCard Secure Code для проведения платежа также может потребоваться ввод специального пароля. Способы и возможность получения паролей для совершения интернет-платежей Вы можете уточнить в банке, выпустившем карту. Настоящий сайт поддерживает 258-битное шифрование. Конфиденциальность сообщаемой персональной информации обеспечивается ОАО "Сбербанк России". Введенная информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ. Проведение платежей по банковским картам осуществляется в строгом соответствии с требованиями платежных систем Visa Int. и MasterCard Europe Sprl.</p>
            </div>

        </div>
    </section>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>