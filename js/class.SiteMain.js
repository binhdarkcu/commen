// JavaScript Document
var SiteMain = (function() {
	function init(){
		carousel_3d();
	}

	function openPopup(idDiv){
		$('.result_question').css('display','none')
		$(idDiv).css({'visibility':'visible','display':'block'});
	}
	function closePopup(idDiv){
		$(idDiv).css({'visibility':'hidden','display':'none'});
	}
	function carousel_3d() {
		var separation = 230;
		var sizeMultiplier = 0.9;
		var flankingItems = 3;
		if($(window).width() < 640) {
			separation = 140
			flankingItems = 2
		}
		var options = {
			flankingItems: flankingItems,
			separation: separation,
			sizeMultiplier: sizeMultiplier,
			opacityMultiplier: 1,
			preloadImages:true,
			clickedCenter: function($clickedItem) {
		      // $clickedItem is a jQuery wrapped object describing the image that was clicked.
			  openPopup('#viewProduct')
		    }
		}
		var carousel = $("#carousel1").waterwheelCarousel(options)

		$('.prev').bind('click', function () {
          carousel.prev();
          return false
        });

		$(window).resize(function(){
			carousel.reload(options)
		})

        $('.next').bind('click', function () {
          carousel.next();
          return false;
        });
	}

	return {
		init:init,
		openPopup:openPopup,
		closePopup:closePopup
	}

})();

$(document).ready( function() {
	SiteMain.init();
});

// Page Loader
$(window).load(function () {
    "use strict";
	$('#loader').fadeOut();
});
