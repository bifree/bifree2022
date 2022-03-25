//メイン キャッチコピー
$(function() {
	if (window.matchMedia( '(min-width: 801px)' ).matches) {
	$(function(){
	var scrollStart = $('.main_visual').offset().top; //ページ上部からの距離を取得
	var scrollEnd = $('.about').offset().top; //ページ上部からの距離を取得
	var distance = 0;
	
	$(document).scroll(function(){
		distance = $(this).scrollTop(); //スクロールした距離を取得
	
		if (scrollStart <= distance) { //スクロール距離が『.main_catch』の位置を超えたら
		$('.main_catch').addClass('fixed'); //class『fixed』を追加
		} else { //スクロールがページ上部まで戻ったら
		$('.main_catch').removeClass('fixed'); //class『fixed』を削除
		}
	
		if (scrollEnd + 95 <= distance) { //スクロール距離が『.about』の位置を超えたら
		$('.main_catch').addClass('stop'); //class『stop』を追加
		} else{
		$('.main_catch').removeClass('stop'); //『.about』より上部に戻ったらclass『stop』を削除
		}
	});      
	});
}
});

// メイン キャッチコピー背景
$(function() {
		if (window.matchMedia( '(min-width: 801px)' ).matches) {
		$(document).ready(function(){
			$(window).on("scroll", function() {
			if ($(this).scrollTop() > 230) {
				$(".main_catch__back").fadeOut("slow");
			} else {
				$(".main_catch__back").fadeIn("slow");
			}
			});  
		});
		}
	});

// メイン キャッチコピー背景SP
$(function() {
	if (window.matchMedia( '(max-width: 800px)' ).matches) {
	$(document).ready(function(){
	$(window).on("scroll", function() {
		if ($(this).scrollTop() > 550) {
		$(".catch-copy__back").fadeOut("slow");
		} else {
		$(".catch-copy__back").fadeIn("slow");
		}
	});  
	});
}
});

// ヘッダーハンバーガーメニュー

$(function() {
	$('.navbtn').click(function() {
		$(this).toggleClass('active');

	if ($(this).hasClass('active')) {
		$('.header_container__nav').addClass('active');
	} else {
		$('.header_container__nav').removeClass('active');
	}
});
});

var swiper = new Swiper('.swiper-container', {
	slidesPerView: 'auto',
	spaceBetween: 30,
	loop: true,
	centeredSlides: true,
	pagination: '.swiper-pagination',
	autoplay: 1500,
	disableOnInteraction: false,
});