// JavaScript Document
var SiteMain = (function() {
	function init(){
		carousel_3d();
	}

	function createRadio(){
		$('input.iCheckRadio').iCheck();
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
		var carousel = $("#carousel1").waterwheelCarousel({
      		flankingItems: flankingItems,
			separation: separation,
			sizeMultiplier: sizeMultiplier,
			opacityMultiplier: 1,
			clickedCenter: function($clickedItem) {
		      // $clickedItem is a jQuery wrapped object describing the image that was clicked.
			  openPopup('#viewProduct')
		    }
		})

		$('.prev').bind('click', function () {
          carousel.prev();
          return false
        });

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
