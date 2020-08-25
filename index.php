<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

    <!-- section slider -->
    <section class="section slider">
        <div class="container-xl">

            <div class="row">
                <div class="col-4">
                    <div class="slider__video">
                        <a class="playBut" href="#" data-toggle="modal" data-target="#modalVideoHeader">
                            <span>Смотреть промо</span>
                            <svg width="24" height="24" viewBox="0 0 213.7 213.7">
                                <polygon class='triangle' id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "/>
                                <circle class='circle' id="XMLID_17_" fill="none"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"/>
                            </svg>
                        </a>
                    </div>
                    <h3 class="slider__headline">
                        CAD/СAM
                        <br>
                        <span>системы</span>
                    </h3>
                    <p class="slider__lead">Мы предлагаем интраоральные сканеры, фрезерные станки, 3D принтеры ведущих мировых производителей.</p>
                    <p class="slider__lead">DentOptics digital работает только напрямую с заводами - производителями, имея прямые контракты, а значит - лучшие цены и официальный сервис.</p>
                    <p class="slider__lead">Наши специалисты подберут оптимальное решение для вашей практики, а в учебном центре #DENTALWORKSHOP вы сможете посмотреть различные комбинации предлагаемого оборудования в действии. Сделайте шаг в цифровое будущее с нами!</p>
                    <div class="slider__brands">
                        <img src="/local/templates/main/img/slider-brands/dentsply-sirona.png" alt="">
                        <img src="/local/templates/main/img/slider-brands/roland.png" alt="">
                        <img src="/local/templates/main/img/slider-brands/3shape.png" alt="">
                    </div>
                </div>
                <!-- // -->
                <div class="col-8 overflow-hidden">

                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide-title">
                                    <a href="#">
                                        <h4 class="h4">Сканеры <br> интраоральные</h4>
                                    </a>
                                </div>
                                <div class="swiper-slide-img">
                                    <img src="/images/products/product-01.png" alt="">
                                </div>
                                <div class="swiper-slide-text">
                                    Традиционные методы диагностики и моделирования зубов уступают место новым, основанным на 3D-сканировании и 3D-печати.
                                </div>
                            </div>
                            <!-- // -->
                            <div class="swiper-slide">
                                <div class="swiper-slide-title">
                                    <a href="#">
                                        <h4 class="h4">Сканеры <br> лабораторные</h4>
                                    </a>
                                </div>
                                <div class="swiper-slide-img">
                                    <img src="/images/products/product-02.png" alt="">
                                </div>
                                <div class="swiper-slide-text">
                                    Эволюция от аналоговой до цифровой стоматологии уже не является делом далекого будущего, а современной реальностью.
                                </div>
                            </div>
                            <!-- // -->
                            <div class="swiper-slide">
                                <div class="swiper-slide-title">
                                    <a href="#">
                                        <h4 class="h4">Фрезы</h4>
                                    </a>
                                </div>
                                <div class="swiper-slide-img">
                                    <img src="/images/products/product-03.png" alt="">
                                </div>
                                <div class="swiper-slide-text">
                                    Эволюция от аналоговой до цифровой стоматологии уже не является делом далекого будущего, а современной реальностью.
                                </div>
                            </div>
                            <!-- // -->
                            <div class="swiper-slide">
                                <div class="swiper-slide-title">
                                    <a href="#">
                                        <h4 class="h4">CAD/CAM <br> Комплекты</h4>
                                    </a>
                                </div>
                                <div class="swiper-slide-img">
                                    <img src="/images/products/product-04.png" alt="">
                                </div>
                                <div class="swiper-slide-text">
                                    Эволюция от аналоговой до цифровой стоматологии уже не является делом далекого будущего, а современной реальностью.
                                </div>
                            </div>
                        </div>
                        <!-- arrows -->
                        <div class="swiper-button-next swiper-button-black">
                            <img src="/local/templates/main/img/svg/slide-right.svg" alt="">
                        </div>
                        <div class="swiper-button-prev swiper-button-black">
                            <img src="/local/templates/main/img/svg/slide-left.svg" alt="">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- /section slider -->

    <!-- section video -->
    <section class="section video">

        <div class="video__wrapper">
            <video poster="/local/templates/main/img/video/video.png" autoplay loop muted>
                <source src="/video/digital_event_2020.mp4" type="video/mp4">
            </video>
            <?/*
            <picture>
                <source type="image/webp" srcset="<?=SITE_TEMPLATE_PATH;?>/img/webp/2020-digital-event.webp">
                <source type="image/png" srcset="<?=SITE_TEMPLATE_PATH;?>/img/video/video.png">
                <img src="<?=SITE_TEMPLATE_PATH;?>/img/video/video.png" alt="Video">
            </picture>
            */?>
            <div class="video__overlay">
                <div class="container-xl">
                    <h3 class="video__headline">#DENTALWORKSHOP</h3>
                    <p class="video__lead">Атмосфера энергии и эргономики, уникальное оснащение класса и внимательное отношение к мелочам – это пространство #DENTALWORKSHOP.</p>
                    <div class="video__play">
                        <a class="playBut" href="#" data-toggle="modal" data-target="#modalVideo">
                            <span>СМОТРЕТЬ</span>
                            <svg width="48" height="48" viewBox="0 0 213.7 213.7">
                                <polygon class='triangle' id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "/>
                                <circle class='circle' id="XMLID_17_" fill="none"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /section video -->

    <!-- section expendable materials -->
    <?/* TODO: Вывести инфоблоком данные карточек */?>
    <section class="section materials">
        <div class="container-xl">
            <h3 class="materials__headline">Расходные материалы</h3>
            <div class="row">
                <div class="col-6">
                    <div class="materials__card">
                        <div class="materials__card-img">
                            <img src="/local/templates/main/img/png/card-img.png" alt="">
                        </div>
                        <div class="materials__card-content">
                            <h4 class="materials__card-title">IPS e.max ZirCAD MT BL 98.5-14/1</h4>
                            <span>Средняя прозрачность</span>
                            <span>Класс материала</span>
                            <span>Прозрачность 4Y-TZP | 45%</span>
                            <span>Цвета 8</span>
                        </div>
                        <div class="materials__card-buttons">
                            <button>15 090 ₽</button>
                            <button>Подробнее</button>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="materials__card">
                        <div class="materials__card-img">
                            <img src="/local/templates/main/img/png/card-img.png" alt="">
                        </div>
                        <div class="materials__card-content">
                            <h4 class="materials__card-title">IPS e.max ZirCAD MT BL 98.5-14/1</h4>
                            <span>Средняя прозрачность</span>
                            <span>Класс материала</span>
                            <span>Прозрачность 4Y-TZP | 45%</span>
                            <span>Цвета 8</span>
                        </div>
                        <div class="materials__card-buttons">
                            <button>15 090 ₽</button>
                            <button>Подробнее</button>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="materials__card">
                        <div class="materials__card-img">
                            <img src="/local/templates/main/img/png/card-img.png" alt="">
                        </div>
                        <div class="materials__card-content">
                            <h4 class="materials__card-title">IPS e.max ZirCAD MT BL 98.5-14/1</h4>
                            <span>Средняя прозрачность</span>
                            <span>Класс материала</span>
                            <span>Прозрачность 4Y-TZP | 45%</span>
                            <span>Цвета 8</span>
                        </div>
                        <div class="materials__card-buttons">
                            <button>15 090 ₽</button>
                            <button>Подробнее</button>
                            <button>В корзину</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="materials__card">
                        <div class="materials__card-img">
                            <img src="/local/templates/main/img/png/card-img.png" alt="">
                        </div>
                        <div class="materials__card-content">
                            <h4 class="materials__card-title">IPS e.max ZirCAD MT BL 98.5-14/1</h4>
                            <span>Средняя прозрачность</span>
                            <span>Класс материала</span>
                            <span>Прозрачность 4Y-TZP | 45%</span>
                            <span>Цвета 8</span>
                        </div>
                        <div class="materials__card-buttons">
                            <button>15 090 ₽</button>
                            <button>Подробнее</button>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="materials__card">
                        <div class="materials__card-img">
                            <img src="/local/templates/main/img/png/card-img.png" alt="">
                        </div>
                        <div class="materials__card-content">
                            <h4 class="materials__card-title">IPS e.max ZirCAD MT BL 98.5-14/1</h4>
                            <span>Средняя прозрачность</span>
                            <span>Класс материала</span>
                            <span>Прозрачность 4Y-TZP | 45%</span>
                            <span>Цвета 8</span>
                        </div>
                        <div class="materials__card-buttons">
                            <button>15 090 ₽</button>
                            <button>Подробнее</button>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="materials__card">
                        <div class="materials__card-img">
                            <img src="/local/templates/main/img/png/card-img.png" alt="">
                        </div>
                        <div class="materials__card-content">
                            <h4 class="materials__card-title">IPS e.max ZirCAD MT BL 98.5-14/1</h4>
                            <span>Средняя прозрачность</span>
                            <span>Класс материала</span>
                            <span>Прозрачность 4Y-TZP | 45%</span>
                            <span>Цвета 8</span>
                        </div>
                        <div class="materials__card-buttons">
                            <button>15 090 ₽</button>
                            <button>Подробнее</button>
                            <button>В корзину</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /section expendable materials -->

    <!-- section reviews -->
    <?/* TODO: Простая верстка для отзывов */?>
    <section class="section reviews">
        <div class="container-xl">
            <div class="row">
                <div class="col-2">
                    <h3 class="reviews__headline">Отзывы</h3>
                </div>
                <div class="col-10">
                    <div class="reviews__slider">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /section reviews -->

    <!-- section about -->
    <section class="section about">
        <div class="container-xl">
            <div class="about__logo">
                <img src="/local/templates/main/img/logo-2.png" alt="">
            </div>
            <h3 class="about__headline">Мы предлагаем сегодня то, что станет трендом завтра.</h3>
            <p class="about__lead">Еще недавно все только мечтали и говрили о стоматологии 21-го века, стоматологии будущего, где цифровые технолии меняют привычный подход и привычные протоколы. Сегодня все больше и больше врачей работают с цифровыми оттисками, а компьютерные программы помогают сделать результат быстрым и точным. Мы делаем большую ставку на цифровую стоматологию и помогаем не только выбрать подходящую для вас технологию, но и интегрировать ее в существующий клинический процесс.</p>
            <p class="about__lead">Создавая DentOptics digital мы хотели чтобы это была компания, которая несет новые идеи и технологии, которая постепенно перестраивает мышление стоматологов о своей работе, несет удовольствие, успех и новое качество жизни и врачам и пациентам.</p>
            <div class="row">

                <div class="about__item col-4">
                    <figure>
                        <img src="/local/templates/main/img/svg/about_pay.svg" alt="">
                        <figcaption>
                            <h4 class="about__title">Удобная оплата онлайн</h4>
                        </figcaption>
                    </figure>
                    <hr class="about__hr">
                    <p>На нашем сайте удобная оплата картами MasterCard, Visa, МИР</p>
                </div>
                <!-- // -->
                <div class="about__item col-4">
                    <figure>
                        <img src="/local/templates/main/img/svg/about_delivery.svg" alt="">
                        <figcaption>
                            <h4 class="about__title">Доставка по всей России</h4>
                        </figcaption>
                    </figure>
                    <hr class="about__hr">
                    <p>Время - ценный ресурс, именно поэтому мы организовали быструю и надежную доставку</p>
                </div>
                <!-- // -->
                <div class="about__item col-4">
                    <figure>
                        <img src="/local/templates/main/img/svg/about_equipment.svg" alt="">
                        <figcaption>
                            <h4 class="about__title">Самое инновационное оборудование</h4>
                        </figcaption>
                    </figure>
                    <hr class="about__hr">
                    <p>Покупая инновационное оборудование, вы не только приятно удивите вашего пациента, но и ускорите, без потери качества, время лечения</p>
                </div>
                <!-- // -->
                <div class="w-100 my-4"></div>
                <!-- // -->
                <div class="about__item col-4">
                    <figure>
                        <img src="/local/templates/main/img/svg/about_doc.svg" alt="">
                        <figcaption>
                            <h4 class="about__title">Полная документация</h4>
                        </figcaption>
                    </figure>
                    <hr class="about__hr">
                    <p>Инструкции, регистрационные удостоверения, декларации соответствия, а также гарантийный талон выдаются каждому клиенту.</p>
                </div>
                <!-- // -->
                <div class="about__item col-4">
                    <figure>
                        <img src="/local/templates/main/img/svg/about_terms.svg" alt="">
                        <figcaption>
                            <h4 class="about__title">Выгодные условия</h4>
                        </figcaption>
                    </figure>
                    <hr class="about__hr">
                    <p>Наши менеджеры готовы предоставить выгодные условия покупки. Мы, ценим нашего покупателя!</p>
                </div>
                <!-- // -->
                <div class="about__item col-4">
                    <figure>
                        <img src="/local/templates/main/img/svg/about_choose.svg" alt="">
                        <figcaption>
                            <h4 class="about__title">Широкий выбор</h4>
                        </figcaption>
                    </figure>
                    <hr class="about__hr">
                    <p>Огромный выбор комплектующих товаров, готовых установок, CAD/CAM-систем.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /section about -->

    <!-- section manufacturers -->
    <section class="section manufacturers">
        <div class="container-xl">

            <h3 class="manufacturers__headline">Компании производители</h3>

            <div class="swiper-container swiper-manufacturers">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/brands/dentsply-sirona.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/brands/3shape.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/brands/roland.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/brands/dentsply-sirona.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/brands/3shape.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/brands/roland.png" alt="">
                    </div>
                </div>
                <!-- arrows -->
                <div class="swiper-button-next swiper-button-black"></div>
                <div class="swiper-button-prev swiper-button-black"></div>
            </div>

        </div>
    </section>
    <!-- /section manufacturers -->

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>