<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="sol">
		
			

		<?php if (have_posts()) : ?>	  
		<!--haberler bloğu başladı-->
			<div class="haberler_ust">
			 Arama Sonuçları
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


	<?php else : ?>
<div class="haberler_ust">
			 Arama Sonuçları
			</div>
			<div class="haberler_orta">
		<h2 class="center" style="font-size:20px; padding-top: 10px;">Hiç yazı bulunamadı. Yeni bir arama yapmak ister misiniz?</h2>
		<div style="text-align:center; margin-top: 10px;"><?php get_search_form(); ?></div>

	<?php endif; ?>

	</div>
			<div class="haberler_alt"></div> <!--haberler bitti-->
			
			

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
