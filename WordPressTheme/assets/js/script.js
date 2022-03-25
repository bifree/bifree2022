'use strict';

//メイン キャッチコピー
$(function() {
	if (window.matchMedia( '(min-width: 801px)' ).matches) {
		$(function(){
		var scrollStart = $('.main-visual').offset().top; //ページ上部からの距離を取得
		var scrollEnd = $('.top-about-stopper').offset().top; //ページ上部からの距離を取得
		var distance = 0;
		
		$(document).scroll(function(){
		  distance = $(this).scrollTop(); //スクロールした距離を取得
		
		  if (scrollStart <= distance) { //スクロール距離が『.catch-copy』の位置を超えたら
			$('.catch-copy').addClass('fixed'); //class『fixed』を追加
		  } else { //スクロールがページ上部まで戻ったら
			$('.catch-copy').removeClass('fixed'); //class『fixed』を削除
			}
		
		  if (scrollEnd - 40 <= distance) { //スクロール距離が『.about』の位置を超えたら
			$('.catch-copy').addClass('stop'); //class『stop』を追加
			} else{
			$('.catch-copy').removeClass('stop'); //『.top-about』より上部に戻ったらclass『stop』を削除
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
				$(".catch-copy__back").fadeOut("slow");
			} else {
				$(".catch-copy__back").fadeIn("slow");
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

// メイン トップへ戻るボタン
$(function() {
	if (window.matchMedia( '(min-width: 801px)' ).matches) {
	$(document).ready(function(){
		$(".top-btn").hide();
		$(window).on("scroll", function() {
			if ($(this).scrollTop() > 80) {
				$(".top-btn").fadeIn("fast");
			} else {
				$(".top-btn").fadeOut("fast");
			}
	
		  scrollHeight = $(document).height(); //ドキュメントの高さ 
		  scrollPosition = $(window).height() + $(window).scrollTop(); //現在地 
		  footHeight = $("footer").innerHeight(); //footerの高さ（＝止めたい位置）
		  if ( scrollHeight - scrollPosition  <= footHeight ) { //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
			$(".top-btn").css({
				"position":"absolute", 
				"bottom": footHeight + 20
			});
			} else {
			$(".top-btn").css({
				"position":"fixed", 
				"bottom": "20px"
			});
		}
	});
		
		$('.top-btn').click(function () {
			$('body,html').animate({
			scrollTop: 0
			}, 400);
			return false;
		});
	});
	}
});

//メイン サービス
$(function () {
	$(window).scroll(function () {
	$(".top-service").each(function () {
		var elemPos = $(this).offset().top; //要素の位置を取得 
		var scroll = $(window).scrollTop(); //スクロール位置を取得 */
		var windowHeight = $(window).height(); //画面幅を取得（画面の下側に入ったときに動作させるため） 
		if (scroll > elemPos - windowHeight) {
		  //要素位置までスクロール出来たときに動作する 
			$(this).addClass("services-scroll");
		}
		});
	});
	jQuery(window).scroll();
});
