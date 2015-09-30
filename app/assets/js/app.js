$(document).ready(function(){
 	initPage();

 	$('.square').hover(hoverIn, hoverOut);
 });


// Page load event 
function initPage(){

	var slider = $.simpleSlider();

	TweenMax.set('.square .overlay', {opacity:0,display:'none'});
	TweenMax.set('.square .overlay h4, .square .overlay p', {opacity:0,y:20});

}

function hoverIn() {
	var overlay = $(this).find('.overlay');
	var overlayContent = overlay.find('h4, p');
	TweenMax.to(overlay, 0.25, {opacity:1,display:'block',ease:Power2.easeOut});
	TweenMax.staggerTo(overlayContent, 0.25, {opacity:1,y:0,ease:Power2.easeOut,delay:0.25}, 0.1);
}
function hoverOut() {
	var overlay = $(this).find('.overlay');
	var overlayContent = overlay.find('h4, p');
	TweenMax.staggerTo(overlayContent, 0.25, {opacity:0,y:20,ease:Power2.easeOut}, 0.1);
	TweenMax.to(overlay, 0.25, {opacity:0,display:'none',ease:Power2.easeOut,delay:0.25});
}