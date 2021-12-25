<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="sol">
		
			

		<?php if (have_posts()) : ?>	  
		<!--haberler bloğu başladı-->
			<div class="haberler_ust">
			  <?php $post = $posts[0]; // Hack. $post değişkenini ata ki the_date() çalışsın. ?>
			  <?php /* Kategori arşivi ise */ if (is_category()) { ?>
				<?php single_cat_title(); ?>
			  <?php /* Etiket arşivi ise */ } elseif( is_tag() ) { ?>
				<?php single_tag_title(); ?>
			  <?php /* Günlük arşiv ise */ } elseif (is_day()) { ?>
				<?php the_time('d F Y'); ?> 
			  <?php /* Aylık arşiv ise */ } elseif (is_month()) { ?>
				<?php the_time('F Y'); ?> 
			  <?php /* Yıllık arşiv ise */ } elseif (is_year()) { ?>
				<?php the_time('Y'); ?>
			  <?php /* Yazar arşivi ise */ } elseif (is_author()) { ?>
				Yazar Arşivi
			  <?php /* Sayfalanmış bir arşiv ise */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				Blog Arşivi
			  <?php } ?>
			</div>
			<div class="haberler_orta">



		<?php while (have_posts()) : the_post(); ?>
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
		<div class="sayfalama_sag"><a href="<?php echo get_option('home'); ?>/">ANASAYFA</a></div>
		</div><!--sayfalama bitti-->
	<?php else :?>
<!--haberler bloğu başladı-->
<div class="haberler_ust"><?php single_cat_title(); ?>.</div>
<div class="haberler_orta">

<?php
		if ( is_category() ) { // Kategori arşivi ise
			printf("<h2 class='center' style='font-size:14px; padding-top: 10px; padding-bottom: 10px; text-align:center;'>Üzgünüz, %s kategorisinde henüz yazı yok.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // Tarih arşivi ise
			echo("<h2>Üzgünüz, bu tarihte yazı yok.</h2>");
		} else if ( is_author() ) { // Yazar arşivi ise
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Üzgünüz, henüz %s tarafından yazılmış herhangi bir yazı yok.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>Herhangi bir yazı bulunamadı.</h2>");
		}



endif;
?>
			</div>
			<div class="haberler_alt"></div> <!--haberler bitti-->
			
			
			
			<div class="reklam468_ust"></div>
			<div class="reklam468_orta">
			 <?php echo fs_get_option('fs_arsiv'); ?>
			</div>
			<div class="reklam468_alt"></div>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
