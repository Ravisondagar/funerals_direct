// JavaScript Document
jQuery(window).on('load',function() {
	"use strict";
	//jQuery('.loader').fadeToggle('medium');
});
$(function() {
	$(".home > img, .landing-page-search-bg > img, .inner-banner > img, .login-wrap > img").each(function(i, elem) {
	  var img = $(elem);
		$(this).hide();
	 $(this).parent().css({
		background: "url(" + img.attr("src") + ") no-repeat",
	 });
	});
	$("a[rel^=author]").fancybox({
		maxWidth : 1000,
		maxHeight : 700,
		width  : '100%',
		height  : '100%',
		openEffect : 'elastic',
		closeEffect : 'elastic',
		padding: 10,
		nextEffect:'elastic',
		prevEffect:'elastic',
		helpers: {
			title: {
				type: 'over'
			},
			overlay: {
			  locked: false,
			  css: {'background-color': 'rgba(0,0,0,0.8)','background-image': 'none','box-shadow': 'none'}
			},
		 },
	});
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$('.selectpicker').selectpicker({
    dropupAuto: true,
});

// left menu
	jQuery('.menu-icon, .leftmenu a.close').click(function(){
		jQuery('.leftmenu').toggleClass('open');
	});
	jQuery(document).bind('touchstart click', function(e){
		if(jQuery(e.target).parents('.leftmenu').length ==0 && !jQuery(e.target).is('.menu-icon')){
			jQuery('.leftmenu').removeClass('open');
		}
	});
	jQuery(window).resize(function() {
		var w = jQuery(window).width();
		if (w > 1000) {
			jQuery('.leftmenu').removeClass('open');
		}
	});

	// 10-09-2017
	jQuery('.subscribe-btn a').click(function(){
		jQuery('.subscribe-wrap .right').slideToggle();
	});

	$( function() {
		$( "#sortable" ).sortable({
			placeholder: "ui-state-highlight"
		});
		$( "#sortable" ).disableSelection();
	} );
jQuery(document).ready(function() {
	$(".flatpickr").flatpickr({
		dateFormat: "d-m-Y"
	});
	jQuery('.back-to-top a').on('click',function (e) {
		jQuery('html, body').stop().animate({
			'scrollTop': jQuery('body').offset().top
		}, 1000, 'swing', function(){
		});
	});
	$('.rate-star').raty({
		path: 'images/'
	});
	jQuery('.favorites-btn').click(function(){
		jQuery('.favorites-list').toggleClass('open');
	});
	jQuery('.funeral-cost-calculator a, .calculator-close').on('click',function(){
		jQuery('.calculator-page-right').toggleClass('open');
	});
	jQuery('.info-btn a').on('click',function(){
		jQuery( "#apply-trigger" ).trigger( "click" );
	});

	$('.btn-number').click(function(e){
		e.preventDefault();
		fieldName = $(this).attr('data-field');
		type      = $(this).attr('data-type');
		var input = $("input[name='"+fieldName+"']");
		var currentVal = parseInt(input.val());
		if (!isNaN(currentVal)) {
			if(type == 'minus') {
				if(currentVal > input.attr('min')) {
					input.val(currentVal - 1).change();
				}
				if(parseInt(input.val()) == input.attr('min')) {
					$(this).attr('disabled', true);
				}
			} else if(type == 'plus') {
				if(currentVal < input.attr('max')) {
					input.val(currentVal + 1).change();
				}
				if(parseInt(input.val()) == input.attr('max')) {
					$(this).attr('disabled', true);
				}
			}
		} else {
			input.val(0);
		}
	});
	$('.input-number').focusin(function(){
		$(this).data('oldValue', $(this).val());
	});
	$('.input-number').change(function() {
		minValue =  parseInt($(this).attr('min'));
		maxValue =  parseInt($(this).attr('max'));
		valueCurrent = parseInt($(this).val());
		name = $(this).attr('name');
		if(valueCurrent >= minValue) {
			$(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
		} else {
			alert('Sorry, the minimum value was reached');
			$(this).val($(this).data('oldValue'));
		}
		if(valueCurrent <= maxValue) {
			$(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
		} else {
			alert('Sorry, the maximum value was reached');
			$(this).val($(this).data('oldValue'));
		}
	});
	$(".input-number").keydown(function (e) {
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
				(e.keyCode == 65 && e.ctrlKey === true) ||
				(e.keyCode >= 35 && e.keyCode <= 39)) {
				return;
		}
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
});