// Panel bitrix
if ($('#bx-panel').length) {
	$('#global_nav').css({'top':'auto','z-index':'99'});
	// $('#catalog-nav').css('z-index','90');
};

// Dropdown catalog
$(function() {
	$('.dropdown').hover(function() {
		$(this).addClass('show');
		$(this).find('.dropdown-menu').addClass('show');
	},
	function() {
		$(this).removeClass('show');
		$(this).find('.dropdown-menu').removeClass('show');
	});
});

// Modal Video Header
$('#modalVideoHeader').on('show.bs.modal', function (e) {
	$(this).find('video')[0].play();
});
$('#modalVideoHeader').on('hidden.bs.modal', function (e) {
	$(this).find('video')[0].pause();
});

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

// Modal Video
$('#modalVideo').on('show.bs.modal', function (e) {
	$(this).find('video')[0].play();
});
$('#modalVideo').on('hidden.bs.modal', function (e) {
	$(this).find('video')[0].pause();
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
