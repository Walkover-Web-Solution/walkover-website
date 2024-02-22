function myFunction(x) {
  x.classList.toggle("change");
}


$(document).ready(function() {
	$("#testimonial").on("slid.bs.carousel", function () {
		var image = $(".carousel-item.active").attr('data-image');		
		$('.testi-box').css('background-image', 'url(' + image + ')');
		// var activeSlide = $(".carousel-indicators .active").index() ;
		// if(activeSlide == 2){
		// 	$(".slider-heading").text("Freedom + Responsibility at Walkover");
		// }
		// else{
		// 	$(".slider-heading").text("Voice of walker");
		// }
	})
})