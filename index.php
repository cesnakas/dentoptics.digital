<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

    <!-- section slider -->
    <section class="section slider">
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <div class="slider__video">
                        <a href="#">
                            Смотреть промо
                            <img src="/local/templates/main/img/svg/play.svg" alt="">
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
                <div class="col-8">

                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                            <div class="swiper-slide">Slide 4</div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-black"></div>
                        <div class="swiper-button-prev swiper-button-black"></div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- /section slider -->

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>