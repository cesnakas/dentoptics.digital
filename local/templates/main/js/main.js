// Panel bitrix
if ($('#bx-panel').length) {
	$('#global_nav').css({'top':'auto','z-index':'99'});
	// $('#catalog-nav').css('z-index','90');
};

// Slider
var swiper = new Swiper('.slider .swiper-container', {
	slidesPerView: 2,
	spaceBetween: 20,
	loop: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	mousewheel: true,
	keyboard: true,
});