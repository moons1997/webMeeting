'use strict';

$(function ()
{      
	//set up the tab click event handler
	$(".agenda .agenda_item").click(function () {
		//handle the tab click event
		//alert("clicked " + this.id);
		var tabId = this.id; //get the id of the element that was clicked
		var contentId = this.id + "_content"; //figure out the id of the corresonding article element by appending "_content" to the id

		//add the selected class to the selected tab to make its bottom border disappear
		$(".agenda .agenda_item").removeClass("selected");
		$(".agenda .agenda_item#" + tabId).addClass("selected");

		//a css-based way of showing/hiding a selected article
		$(".agenda article").removeClass("selected");
		$(".agenda article#" + contentId).addClass("selected");

		/*
		//an alternative javascript-only way of showing/hiding a selected article 
		//without relying on CSS classes to do that:
		$(".agenda article").hide(); //make all articles disappear
		$(".agenda article#" + contentId).show(); //make the selected article appear
		*/
	});

	// $('.ulead_galery_img').on('click',function(e){
	// 	$('.ulead_galery_block').addClass('active');
	// })
	// $('.galery_close').on('click', function(e){
	// 	$('.ulead_galery_block').removeClass('active');
	// });


	$('#01').modal('show')
	$('.comments .owl-carousel').owlCarousel({
	    loop:true,
	    nav:true,
	    navText : ["<div class='corusel_prev'></div>","<div class='corusel_next'></div>"],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})

	$('.international_corusel .owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    // nav:true,
	    autoplay:true,
    	autoplayTimeout:5000,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})

	lightGallery(document.getElementById('ulead_galery'),{
		selector: 'a'
	}); 
	   
	$('#nav_toogle').click(function(){
		$('.menu_mob').addClass('active');
	});
	$('.menu_mob_close').click(function(){
		$('.menu_mob').removeClass('active');
	})

});
