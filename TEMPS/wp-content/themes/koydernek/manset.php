<?php
$_xml ='<Banner bannerWidth="" bannerHeight="" textSize="14" textColor="" textAreaWidth="" textLineSpacing="0" textLetterSpacing="-0.5" textMarginLeft="12" textMarginBottom="5" transitionType="1" transitionDelayTimeFixed="3" transitionDelayTimePerWord=".5" transitionSpeed="8" transitionBlur="yes" transitionRandomizeOrder="no" showTimerClock="yes" showBackButton="no" showNumberButtons="yes" showNumberButtonsAlways="no" showNumberButtonsHorizontal="no" showNumberButtonsAscending="yes" autoPlay="yes">
';

	$resim 	= mysql_query("SELECT * FROM ".$table_prefix."postmeta LEFT OUTER JOIN ".$table_prefix."posts ON ".$table_prefix."postmeta.post_id = ".$table_prefix."posts.id Where ".$table_prefix."postmeta.meta_key='manset' ORDER By ".$table_prefix."postmeta.post_id DESC Limit 0,5");
		for ($j=0; $niphell=mysql_fetch_array($resim); $j++){
		$_xml .= '<item image="'.$niphell[meta_value].'"  link="'.get_permalink($niphell[post_id]).'" target="_self" textBlend="no"><![CDATA[<font color=\'#EEC008\'>'.$niphell[post_title].'<br /></font><font color=\'#FFFFFF\'>'.htmlspecialchars(substr(strip_tags($niphell[post_content]),0,150)).'</font>]]></item>
		';
	}

$_xml .= '</Banner>';	
$dosya = "wp-content/themes/".get_template()."/data.xml";

$file= fopen($dosya, 'w+') or die("dosya açılamadı");
fwrite($file, $_xml);
fclose($file);

echo '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" id="obj1" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="663" height="309">
	<param name="movie" value="'.get_bloginfo('template_url').'/banner.swf">
	<param name="quality" value="High">
	<param name="base" value="'.get_bloginfo('template_url').'/banner.swf">

	<param name="wmode" value="transparent">
	<embed pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj1" width="663" height="309" quality="High" base="'.get_bloginfo('template_url').'/banner.swf" src="'.get_bloginfo('template_url').'/banner.swf" wmode="transparent"></object>';
?>