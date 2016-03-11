// JavaScript Document

$(document).ready(function(){
 
    $(".menu_bg,.menu_block").animate({
		left:($(window).width() * -1 ) + 'px',
		height: ($(window).height() + 400 ) + 'px'
    },0);
	
	$(".menu_icon_01").click(function(){
		$(".menu_bg").animate({
			left:'0'
		},500);
	});
	$(".close,.menu_bg").click(function(){
		$(".menu_bg").animate({
			left:($(window).width() * -1 ) + 'px',
		},500);
	});
	
	

});