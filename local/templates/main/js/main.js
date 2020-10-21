// Panel bitrix
if ($('#bx-panel').length) {
	$('#global_nav').css({'top':'auto','z-index':'99'});
	// $('#catalog-nav').css('z-index','90');
};

// Dropdown catalog
$(function() {
	$('.dropdown').hover(
		function() {
			$(this).addClass('show');
			$(this).find('#dropdownMenu ~ .dropdown-menu').addClass('show');
		},
		function() {
			$(this).removeClass('show');
			$(this).find('#dropdownMenu ~ .dropdown-menu').removeClass('show');
		});
	$('.dropright').hover(
		function() {
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
	slidesPerView: 1,
	slidesOffsetBefore: 0,
	slidesOffsetAfter: 0,
	spaceBetween: 40,
	breakpoints: {
		// >= 720px
		720: {
			slidesPerView: 2,
			spaceBetween: 40
		},
	},
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
	slidesPerView: 1,
	breakpoints: {
		// >= 720px
		720: {
			slidesPerView: 3,
			// spaceBetween: 40
		},
	},
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

// Reviews
var mySwiper = new Swiper('.reviews__slider .swiper-container', {
	slidesPerView: 1,
	spaceBetween: 0,
	breakpoints: {
		// >= 720px
		720: {
			slidesPerView: 2,
			spaceBetween: 0
		},
	},
	loop: true,
	autoplay: {
		delay: 3500,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

// Compare
$('.product-item-detail-compare label').on('click', function() {
	// $('.product-item-detail-compare').toggleClass('active');
	$(this).toggleClass('active');
});

//Спойлеры в обучении
$('.trainingSpoilers').click(function(){
	let a = '#' + $(this).attr('data-id');
	$(a).slideToggle(200);
	let b = $(this).find('.trainingStatus > b');
	b.text( b.text() == '+' ? "-" : "+");
});
$('.trainingContentList').toggle();

//viewportChecker
!function(a) {
	a.fn.viewportChecker = function(b) {
		var c = {
			classToAdd: "visible",
			classToRemove: "invisible",
			classToAddForFullView: "full-visible",
			removeClassAfterAnimation: !1,
			offset: 100,
			repeat: !1,
			invertBottomOffset: !0,
			callbackFunction: function(a, b) {},
			scrollHorizontal: !1,
			scrollBox: window
		};
		a.extend(c, b);
		var d = this
			, e = {
			height: a(c.scrollBox).height(),
			width: a(c.scrollBox).width()
		};
		return this.checkElements = function() {
			var b, f;
			c.scrollHorizontal ? (b = Math.max(a("html").scrollLeft(), a("body").scrollLeft(), a(window).scrollLeft()),
				f = b + e.width) : (b = Math.max(a("html").scrollTop(), a("body").scrollTop(), a(window).scrollTop()),
				f = b + e.height),
				d.each(function() {
					var d = a(this)
						, g = {}
						, h = {};
					if (d.data("vp-add-class") && (h.classToAdd = d.data("vp-add-class")),
					d.data("vp-remove-class") && (h.classToRemove = d.data("vp-remove-class")),
					d.data("vp-add-class-full-view") && (h.classToAddForFullView = d.data("vp-add-class-full-view")),
					d.data("vp-keep-add-class") && (h.removeClassAfterAnimation = d.data("vp-remove-after-animation")),
					d.data("vp-offset") && (h.offset = d.data("vp-offset")),
					d.data("vp-repeat") && (h.repeat = d.data("vp-repeat")),
					d.data("vp-scrollHorizontal") && (h.scrollHorizontal = d.data("vp-scrollHorizontal")),
					d.data("vp-invertBottomOffset") && (h.scrollHorizontal = d.data("vp-invertBottomOffset")),
						a.extend(g, c),
						a.extend(g, h),
					!d.data("vp-animated") || g.repeat) {
						String(g.offset).indexOf("%") > 0 && (g.offset = parseInt(g.offset) / 100 * e.height);
						var i = g.scrollHorizontal ? d.offset().left : d.offset().top
							, j = g.scrollHorizontal ? i + d.width() : i + d.height()
							, k = Math.round(i) + g.offset
							, l = g.scrollHorizontal ? k + d.width() : k + d.height();
						g.invertBottomOffset && (l -= 2 * g.offset),
							k < f && l > b ? (d.removeClass(g.classToRemove),
								d.addClass(g.classToAdd),
								g.callbackFunction(d, "add"),
								j <= f && i >= b ? d.addClass(g.classToAddForFullView) : d.removeClass(g.classToAddForFullView),
								d.data("vp-animated", !0),
							g.removeClassAfterAnimation && d.one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
								d.removeClass(g.classToAdd)
							})) : d.hasClass(g.classToAdd) && g.repeat && (d.removeClass(g.classToAdd + " " + g.classToAddForFullView),
								g.callbackFunction(d, "remove"),
								d.data("vp-animated", !1))
					}
				})
		}
			,
		("ontouchstart"in window || "onmsgesturechange"in window) && a(document).bind("touchmove MSPointerMove pointermove", this.checkElements),
			a(c.scrollBox).bind("load scroll", this.checkElements),
			a(window).resize(function(b) {
				e = {
					height: a(c.scrollBox).height(),
					width: a(c.scrollBox).width()
				},
					d.checkElements()
			}),
			this.checkElements(),
			this
	}
}(jQuery);

//Анимация заголовков обучения
$('.animTop').viewportChecker({
	classToAdd: 'animationTop',
	offset: 0
});;

//Слайдер для Фотоотчета(обучение)
var galleryThumbs = new Swiper('.gallery-thumbs', {
	spaceBetween: 6,
	slidesPerView: 8,
	slidesPerColumn: 4,
	slidesPerColumnFill: "row",
	loop: false,
	freeMode: true,
	loopedSlides: 5, //looped slides should be the same
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
	spaceBetween: 10,
	loop: true,
	lazy: true,
	loopedSlides: 5, //looped slides should be the same
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	thumbs: {
		swiper: galleryThumbs,
	},
});