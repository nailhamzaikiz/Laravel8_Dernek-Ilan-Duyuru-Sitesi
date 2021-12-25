jQuery(document).ready(function(){

	jQuery('.fors-toggle').each( function() {
		var box_ID = jQuery(this).attr('id');
		if (jQuery.cookie(box_ID) == 'open') {
			jQuery(this).find('.fors-totoggle').show();
			jQuery(this).find('h3').addClass("toggle-close");
		} else {
			jQuery(this).find('.fors-totoggle').hide();
			jQuery(this).find('h3').addClass("toggle-open");
		}
	});
	
	jQuery('.fors-toggle h3').click(function(){
	
		if (jQuery(this).next('div.fors-totoggle').is(":hidden")) {
    	    jQuery(this).next('div.fors-totoggle').slideDown();
    	    jQuery(this).removeClass("toggle-open");
			jQuery(this).addClass("toggle-close");
    	    jQuery.cookie(jQuery(this).parent().parent().attr('id'), 'open',{ path: '/' });
			return false;
    	} else {
    		jQuery(this).next('div.fors-totoggle').slideUp();
    		jQuery(this).removeClass("toggle-close");
			jQuery(this).addClass("toggle-open");
    	    jQuery.cookie(jQuery(this).parent().parent().attr('id'), 'closed',{ path: '/' });
			return false;
    	}
      
     });
     
     setTimeout(function(){ jQuery('#fors-message').fadeOut('slow'); }, 3000);
	
});