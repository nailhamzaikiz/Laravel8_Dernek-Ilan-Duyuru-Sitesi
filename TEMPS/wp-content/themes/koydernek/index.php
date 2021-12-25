<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div id="yanmenu">
		<div class="hizlimenu_ust">Hızlı Menu</div>
		<div class="hizlimenu_orta">
				<?php wp_nav_menu( array( 'container_class' => 'yanmenu', 'theme_location' => 'hizlimenu' ) ); ?>
		</div>
		<div class="hizlimenu_alt"></div>
		</div><!--yanmenu bitti-->
		<div id="manset">
			<div class="manset_ust"></div>
			<div class="manset_orta">
				<?php include (TEMPLATEPATH . "/manset.php"); ?> 
			</div>
			<div class="manset_alt"></div>
		</div><!--manset bitti-->
		<div class="clear"></div>
		
		<div id="sol">
			<div id="duyurular">
				<div id="duyuruic">
								<marquee onmouseover="this.stop();" onmouseout="this.start();">
								<?php 
								$sayi = fs_get_option('fs_duyurular2');
								$kat = get_cat_id(fs_get_option('fs_duyurular'));
								$recent = new WP_Query("showposts=".$sayi."&cat=".$kat.""); while($recent->have_posts()) : $recent->the_post();?>
					<a href="<?php the_permalink() ?>"> &#8226; <?php the_title(); ?> </a> 
					<?php endwhile; ?>
					</marquee></div>
				  
				<a href="<?php echo get_category_link(''.$kat.''); ?>" class="duyuruileri"></a>
				
			</div>
			
			<div class="reklam468_ust"></div>
			<div class="reklam468_orta">
			 <?php echo fs_get_option('fs_anareklam'); ?>
			</div>
			<div class="reklam468_alt"></div>
						<?php 			$sayi = fs_get_option('fs_haberler2');			$kat = get_cat_id(fs_get_option('fs_haberler'));			?>
			
			<!--haberler bloğu başladı-->
			<div class="haberler_ust"><?php echo get_cat_name($kat); ?></div>
			<div class="haberler_orta">

			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
	    	<?php query_posts('cat='.$kat.'&showposts='.$sayi.'&paged=' . $paged); ?>

       	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
				<!--bir haber başladı-->
				<div class="haber">
				
					<div class="haber_resim">
						 <?php
						 if ( has_post_thumbnail() ) {
							echo '<a href="';
							the_permalink();
							echo '">';
							// Eğer bir resim atanmışsa bu resmi göster
							the_post_thumbnail();
							echo "</a>";
						 } else {
				 
							// Eğer bir resim atanmamışsa standart bir resim göster
							
							echo '<a href="';
							the_permalink();
							echo '">';
							
							echo '<img src="';
							bloginfo('template_url');
							echo '/images/foto1.jpg" alt="" /></a>';
						
						 }
						 ?>
						
					</div>
					<div class="haber_ozet">
						<h3><a href="<?php the_permalink() ?>"><?php baslik(46); ?></a> </h3>
						<?php the_content_limit(160, ""); ?>
					</div>
				</div>
				<!--bir haber bitti-->
			<?php endwhile; ?>
				<div class="clear"></div>
				<div class="sayfalama">
					<div class="sayfalama_sol"><?php wp_pagenavi(); ?></div>
					<div class="sayfalama_sag"><a href="<?php echo get_category_link(''.$kat.''); ?>">TÜM HABERLER</a></div>
				</div><!--sayfalama bitti-->
				
			<?php else : ?>

			<?php endif; ?>
			</div>
			<div class="haberler_alt"></div> <!--haberler bitti-->
			
			
			<div id="fotogaleri">
			<?php 
			$sayi = fs_get_option('fs_resim2');
			$kat = get_cat_id(fs_get_option('fs_resim'));
			?>
				<div class="baslik"><h2><?php echo get_cat_name($kat); ?></h2></div>
				<div class="gormek1"><a href="<?php echo get_category_link(''.$kat.''); ?>">Tümünü görmek için tıklayın...</a></div>
				<div class="clear"></div>
				<ul id="mycarousel" class="jcarousel-skin-tango1">

			<?php $recent = new WP_Query("showposts=".$sayi."&cat=".$kat.""); while($recent->have_posts()) : $recent->the_post();?>
		  <?php
         if ( has_post_thumbnail() ) {
 
			echo "<li>"; 
			echo '<a href="';
			the_permalink();
			echo '">';
            // Eğer bir resim atanmışsa bu resmi göster
            the_post_thumbnail();
 			echo "</a></li>";
         } else {
 
            // Eğer bir resim atanmamışsa standart bir resim göster
			
            echo '<li>';
			echo '<a href="';
			the_permalink();
			echo '">';
			
			echo '<img src="';
			bloginfo('template_url');
			echo '/images/foto1.jpg" alt="" /></a></li>';
 		
         }
      ?>
		
		<?php endwhile; ?>
		</ul>
			</div>
			
			<div class="reklam468_ust"></div>
			<div class="reklam468_orta">
			 <?php echo fs_get_option('fs_anareklam2'); ?>
			</div>
			<div class="reklam468_alt"></div>
		

			<div id="videogaleri">
			<?php 
			$sayi = fs_get_option('fs_video2');
			$kat = get_cat_id(fs_get_option('fs_video'));
			?>
				<div class="baslik"><h2><?php echo get_cat_name($kat); ?></h2></div>
				<div class="gormek"><a href="<?php echo get_category_link(''.$kat.''); ?>">Tümünü görmek için tıklayın...</a></div>
				<div class="clear"></div>
					<ul id="mycarousel1" class="jcarousel-skin-tango1">
			<?php $recent = new WP_Query("showposts=".$sayi."&cat=".$kat.""); while($recent->have_posts()) : $recent->the_post();?>
		  <?php
         if ( has_post_thumbnail() ) {
 
			echo "<li>"; 
			echo '<a href="';
			the_permalink();
			echo '">';
            // Eğer bir resim atanmışsa bu resmi göster
            the_post_thumbnail();
 			echo "</a></li>";
         } else {
 
            // Eğer bir resim atanmamışsa standart bir resim göster
			
            echo '<li>';
			echo '<a href="';
			the_permalink();
			echo '">';
			
			echo '<img src="';
			bloginfo('template_url');
			echo '/images/foto1.jpg" alt="" /></a></li>';
 		
         }
      ?>
		
		<?php endwhile; ?>
		
		</ul>
			</div>
		</div><!--solbitti-->
		
<?php get_sidebar(); ?>
<?php get_footer(); ?>
