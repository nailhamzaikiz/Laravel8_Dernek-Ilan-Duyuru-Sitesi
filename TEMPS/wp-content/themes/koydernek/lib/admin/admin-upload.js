jQuery(document).ready(function() {

	jQuery('#fors-upload-button').click(function() {
 		formfield = jQuery('#fors-logo').attr('name');
 		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
 		return false;
	});

	window.send_to_editor = function(html) {
 		imgurl = jQuery('img',html).attr('src');
 		jQuery('#fors-logo').val(imgurl);
 		jQuery('#fors-logo-img').attr('src',imgurl);
 		tb_remove();
	}

});