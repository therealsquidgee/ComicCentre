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
	var $comic = $(".comic");
	var $comicClone = $comic.clone();
	
	$comic.hide();
	$comicClone.hide();
	
	var carouselOptions = {
					items: 1,
					nav: true
				};
	
	$("#comicform").submit(function(event){
		event.preventDefault();
		if($("#url").val() == ""){
			$(".warning").show(0).delay(2000).slideUp(400);
		}
		else{
			
			if($comic.length > 1 || $("#comic-1").css("display") == "block"){
				var $lastComic = $(".comic").last();
				var $lastCarousel = $lastComic.find(".carousel");
				
				var $thisComic = $($comicClone);
				var $comicClone = $thisComic.clone();
				
				$thisComic.attr("id", incrementId($lastComic));
				
				$thisComic.insertAfter($lastComic).slideDown(1000);
				
				$thisComic.find(".carousel")
				.attr("id", incrementId($lastCarousel))
				//.trigger('destroy.owl.carousel')
				//.owlCarousel(carouselOptions);
			}
			else{
				$comic.slideDown(1000);
				$('#myCarousel-1').owlCarousel(carouselOptions);
				
				$("#submit-btn").text("Get More Comics!");
				$("#url").val("");
			}
		}
	});
});

function incrementId($elem){
	var idParts = $elem.attr("id").split('-');
	return idParts[0] + "-" + (parseInt(idParts[1]) + 1);
}