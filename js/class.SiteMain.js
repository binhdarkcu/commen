// JavaScript Document
var SiteMain = (function() {
	function init(){
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
	function open_popup(divName) {
		$(divName).css({'visibility':'visible', 'display': 'table'})
	}
	function close_popup(divName) {
		$(divName).css({'visibility':'hidden', 'display': 'none'})
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
