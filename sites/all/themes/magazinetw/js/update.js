// JavaScript Document
jQuery(document).ready(function($) { $('#nav').scrollToFixed(); });

jQuery(document).ready(function() {

	// Get all thumbs containers
	jQuery( ".thumbs-rating-container" ).each(function( index ) {

		// Get data attribute
		 var content_id = jQuery(this).data('content-id');

		 var itemName = "thumbsrating"+content_id;

			  // Check if this content has localstorage
			if (localStorage.getItem(itemName)){

				// Check if it's Up or Down vote
				if ( localStorage.getItem("thumbsrating" + content_id + "-1") ){
					jQuery(this).find('.thumbs-rating-up').addClass('thumbs-rating-voted');
				}
				if ( localStorage.getItem("thumbsrating" + content_id + "-0") ){
					jQuery(this).find('.thumbs-rating-down').addClass('thumbs-rating-voted');
				}
			}
	});
});
jQuery(function($){
	
	$(document).ready(function(){
		if($(".symple-tabs").length)
			$( ".symple-tabs" ).tabs();
	});
});