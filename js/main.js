$(document).ready(function(){
	//Index page
	$('#indexCarousel').owlCarousel({
		items: 1,
		autoplay: true,
		autoplaySpeed: 500,
		autoplayHoverPause: true
	});
	
	// Discussion Page
	var $picCarousel = $('#picCarousel');
	var $commentCarousel = $('#commentCarousel');
	
	$picCarousel.owlCarousel({
		items: 1,
		nav: true,
		mouseDrag: false
	});
	
	$commentCarousel.owlCarousel({
		items: 1,
		mouseDrag: false
	});
	
	$(".owl-next").click(function(){
		$commentCarousel.trigger("next.owl.carousel");
	});
	
	$(".owl-prev").click(function(){
		$commentCarousel.trigger("prev.owl.carousel");
	});
	//MyComics page
	
	$(".comic").hide();
	
	$("#comicform").submit(function(event){
		event.preventDefault();
		if($("#url").val() == ""){
			$(".warning").show(0).delay(2000).slideUp(400);
		}
		else{
			$(".comic").show();
			$('#myCarousel').owlCarousel({
				items: 1,
				nav: true,
			});
			$("#comicform").hide();
		}
	});
});