
var init_msgroup = function() {
	
	var handleClick = function () {
		 $('#li_msgroup_product').click(function(e){
			$('#msgroup_product').modal('show');	 
		 });
	};
	
	return {
		init: function() {
			handleClick();
			console.log(App.getUniqueID('msgrp'));
			console.log(App.getUniqueIDX());
			
        }
	};
}();


$(document).ready(function() {    
	init_msgroup.init();

});
