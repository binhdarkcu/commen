// JavaScript Document
var SiteMain = (function() {
	function init(){
		carousel_3d();
		open_popup();
	}

	function createRadio(){
		$('input.iCheckRadio').iCheck();
	}

	function openPopup(idDiv){
		$('.result_question').css('display','none')
		$(idDiv).css('display','block');
	}
	function closePopup(idDiv){
		$(idDiv).css('display','none');
	}
	function open_popup() {
		$('.carousel-container').on('click', '.carousel-item', function() {
			console.log('1')
			$('.cd-quick-view').css({'visibility':'visible', 'display': 'table'})
		})
	}
	function close_popup() {
			$(this).css({'visibility':'hidden', 'display': 'none'})
		}
	function carousel_3d() {
		var carousel = $("#carousel1").waterwheelCarousel({
      flankingItems: 3
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
		closePopup:closePopup,
		open_popup:open_popup,
		close_popup:close_popup
	}

})();

$(document).ready( function() {
	SiteMain.init();
});
