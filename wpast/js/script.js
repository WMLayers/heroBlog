$(function(){
//scroll teste 1.0
	//$(window).on('scroll', function(i){
	//	var loca = $('.menu').css('top');
	//	console.log(loca);
	//})
	var controller = new ScrollMagic.Controller();
	var animateElem = document.getElementById("menu");
	var animateEle = document.getElementById("logo");
	var animateshadow = document.getElementById("shadow");
	var scene = new ScrollMagic.Scene({triggerElement: ".container"})
	.on("enter", function() {
		animateElem.style.backgroundColor = "rgba(254, 203, 75, 1)";
		animateEle.style.display = "block";
		animateshadow.style.display = "block";
	})
	.on("leave", function() {
		animateElem.style.backgroundColor = "";
		animateEle.style.display = "none";
		animateshadow.style.display = "none";
	})
	.addTo(controller);
})

$(document).ready(function(){
    $('.carousel').carousel();
  });

   var instance = M.Carousel.init({
    fullWidth: true
  });
$('.carousel.carousel-slider').carousel({
    fullWidth: true
  });

   var instance = M.Carousel.init({
    fullWidth: true,
    indicators: true
});
//animateElem.style.backgroundColor = "rgba(61, 61, 61, 0.5)";

  