<?php 

/*	##################################
	TS ADMIN THEMES PAGE
	################################## */
	
	function fs_themes_page() {

	global $fs_theme, $fs_short, $fs_version, $fs_domain, $options;
	
?>

	<div class="wrap">

	<div id="ts-wrap">
		
		<div id="fors-options-header">
		
			<a href="http://themeshift.com" target="_blank"><img src="<?php echo fs_ADMIN . 'img/fs_logo.png'; ?>" alt="ThemeShift" width="300" height="30" /></a>
			
			<h2><?php _e('More ThemeShift Themes', $fs_domain); ?></small></h2>
		
		</div>
		
		<div id="fors-options-subheader" class="clearfix">
		
			<ul>
				<li><a class="fors-options-info" href="http://themeshift.com/themes" target="_blank"><?php _e('Themes Index', $fs_domain); ?></a></li>
				<li><a class="fors-options-forums" href="http://themeshift.com/support" target="_blank"><?php _e('Support Forum', $fs_domain); ?></a></li>
			</ul>
		
		</div>
		    
		<div id="ts-themes-wrap">
		
			<?php
            include_once(ABSPATH . WPINC . '/feed.php');
            $rss = fetch_feed('http://themeshift.com/?feed=themesfeed');
            $maxitems = $rss->get_item_quantity(10); 
            $items = $rss->get_items(0, $maxitems);
            global $post;
            ?>
            
            <?php $i=1; foreach ( $items as $item ) : ?>
		
		    <div id="ts-themes-<?php echo $i; ?>" class="ts-section ts-toggle">
		    	<div class="ts-section-inner">
		    	
		    	<div class="ts-info">
					<a href="<?php $fs_link = $item->get_permalink(); echo str_replace('http://','http://demo.',$fs_link);  ?>" class="button" target="_blank"><?php _e('Theme Demo', $fs_domain); ?></a>
		    	</div>
		    
		    	<h3 class="ts-section-logo"><span><?php echo $item->get_title();?></span></h3>
		    	
		    	<div class="ts-totoggle">
		    	
		    		<div class="ts-option ts-option-last clearfix">
		    			
		    			<?php echo $item->get_description(); ?>
		    			
		    			<p style="padding-bottom:20px"><a href="<?php echo $item->get_permalink(); ?>" class="button ts-btn-info" target="_blank"><?php _e('Theme Info', $fs_domain); ?></a></p>
		    		
		    		</div><!-- end ts-option -->
		    	
		    	</div>
		    
		    	</div><!-- end ts-section-inner -->
		    </div><!-- end ts-section -->
		    
		    <?php $i++; endforeach; ?>
		
		</div>
	
	</div><!-- end ts-wrap -->
	
</div>

<?php }


/*	##################################
	TS ADMIN NEWS PAGE
	################################## */

function fs_news_page() {

	global $fs_theme, $fs_short, $fs_version, $fs_domain, $options;
	
?>

	<div class="wrap">

	<div id="ts-wrap">
		
		<div id="fors-options-header">
		
			<a href="http://themeshift.com" target="_blank"><img src="<?php echo fs_ADMIN . 'img/fs_logo.png'; ?>" alt="ThemeShift" width="300" height="30" /></a>
			
			<h2><?php _e('Latest ThemeShift News', $fs_domain); ?></small></h2>
		
		</div>
		
		<div id="fors-options-subheader" class="clearfix">
		
			<ul>
				<li><a class="fors-options-info" href="http://themeshift.com/blog" target="_blank"><?php _e('Blog', $fs_domain); ?></a></li>
				<li><a class="fors-options-forums" href="http://themeshift.com/support" target="_blank"><?php _e('Support Forum', $fs_domain); ?></a></li>
			</ul>
		
		</div>
		    
		<div id="ts-news-wrap">
		
			<?php
            include_once(ABSPATH . WPINC . '/feed.php');
            $rss = fetch_feed('http://themeshift.com/feed/');
            $maxitems = $rss->get_item_quantity(8); 
            $items = $rss->get_items(0, 8);			
            ?>
            
            <?php $i=1; foreach ( $items as $item ) : ?>
		
		    <div id="ts-news-<?php echo $i; ?>" class="ts-section ts-toggle">
		    	<div class="ts-section-inner">
		    	
		    	<div class="ts-news-date"><?php echo $item->get_date(get_option('date_format')); ?></div>
		    
		    	<h3 class="ts-section-logo"><span><?php echo $item->get_title();?></span></h3>
		    	
		    	<div class="ts-totoggle">
		    	
		    		<div class="ts-option ts-option-last clearfix">
		    			
		    			<p style="margin-bottom:20px"><?php echo $item->get_description();?></p>
		    			
		    			<p><a href="<?php echo $item->get_permalink(); ?>" class="button" target="_blank"><?php _e('Continue Reading', $fs_domain); ?></a></p>
		    		
		    		</div><!-- end ts-option -->
		    	
		    	</div>
		    
		    	</div><!-- end ts-section-inner -->
		    </div><!-- end ts-section -->
		    
		    <?php $i++; endforeach; ?>
		
		</div>
	
	</div><!-- end ts-wrap -->
	
</div>

<?php } ?>