// Panel bitrix
if ($('#bx-panel').length) {
	$('#global_nav').css({'top':'auto','z-index':'99'});
	// $('#catalog-nav').css('z-index','90');
};

// Slider
var mySwiper = new Swiper('.slider .swiper-container', {
	slidesPerView: 2,
	slidesOffsetBefore: 0,
	slidesOffsetAfter: 0,
	spaceBetween: 40,
	loop: true,
	autoplay: {
		delay: 6500,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	// mousewheel: true,
	keyboard: true,
});

// Manufacturers
var mySwiper = new Swiper('.manufacturers .swiper-container', {
	slidesPerView: 3,
	loop: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});