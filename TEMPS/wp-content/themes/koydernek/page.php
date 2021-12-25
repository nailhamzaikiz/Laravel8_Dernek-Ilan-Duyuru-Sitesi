<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="sol">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!--haberler bloğu başladı-->
			<div class="haberler_ust"><?php the_title(); ?></div>
			<div class="haberler_orta">
			
			<div class="tekilicerik">
			
			
						

  <?php the_content('<p class="serif">Yazının tamamını okuyun &raquo;</p>'); ?>
				
				</div>
				<div class="clear"></div>
				
				
				
			</div>
			<div class="haberler_alt"></div> <!--haberler bitti-->
			
			
			<div class="reklam468_ust"></div>
			<div class="reklam468_orta">
		<?php echo fs_get_option('fs_konuici'); ?>
			</div>
			<div class="reklam468_alt"></div>			
			
			

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Üzgünüz, kriterinize uygun yazı bulunamadı.</p>

<?php endif; ?>

	</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
