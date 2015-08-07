 $(document).ready(function() {
        $('.carousel').carousel({interval: 2000});
      });


// icon_hover
$(document).ready(function(){
	$(".env").hover(function(){
		$(".env").animate({height:"200px",height:"100px"},"slow");
	});
	$(".phn").hover(function(){
		$(".phn").animate({height:"200px",height:"100px"},"slow");
	});
	$(".hom").hover(function(){
		$(".hom").animate({height:"200px",height:"100px"},"slow");
	});
	$(".skp").hover(function(){
		$(".skp").animate({height:"200px",height:"100px"},"slow");
	});
});


// back_to_top
$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},1000);
		return false;
	});
	
});

$(document).ready(function(){
	$(".gal").hover(function(){
		var ani = $(".gal");
		ani.animate({fontSize:"0.2em"},"slow");
		ani.animate({fontSize:"1em"},"slow");
		// ani.animate({height:"50px",opacity:0.5},"slow");
	});
});




// galleryimage
  $(document).ready(function(){
          $('a').click(function (e) {
    $('#myModal img').attr('src', $(this).attr('data-img-url'));
});
        })


// tooltip
$(function() { $("[data-toggle='tooltip']").tooltip();});
