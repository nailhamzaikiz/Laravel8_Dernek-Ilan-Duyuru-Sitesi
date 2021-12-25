<?php $post = $wp_query->post; if ( in_category('6') ) 
{ include(TEMPLATEPATH . '/single-resimvideo.php'); } 
elseif ( in_category('7') ) 
{ include(TEMPLATEPATH . '/single-resimvideo.php'); } 
else { include(TEMPLATEPATH . '/single-default.php'); } ?>