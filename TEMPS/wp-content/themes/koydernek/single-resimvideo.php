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

<div class="partlist"> <?php wp_link_pages('before=<p>&after=</p>&pagelink=% | '); ?> </div>  
				
				</div>
				<div class="clear"></div>
				
				<div class="bilgiler">
					<div class="bilgiler_sol">BİLGİLER</div>
								<div class="bilgiler_sag"><b><?php the_author_posts_link(); ?></b> tarafından <b><?php the_time('d F Y ') ?> - <?php the_time() ?></b> tarihinde yayınlandı.</div>
				</div>
				<!--okunma başladı-->
					<div class="bilgiler">
					<div class="bilgiler_sol">OKUNMA</div>
					<div class="bilgiler_sag">Bu Yazı Şuana Kadar <b><?php if(function_exists('the_views')) { the_views(); } ?></b> kez Okunmuştur.</div>
				</div>
				<!--okunma bitti-->
				
				<!--etiketler başladı-->
					<div class="bilgiler">
					<div class="bilgiler_sol">ETİKETLER</div>
					<div class="bilgiler_sag2"><?php the_tags( ' ', ', ', ''); ?></div>
				</div>
				<!--etiketler bitti-->
				
				<div class="paylas">
				<div class="paylas_sol">PAYLAŞ</div>
					<div class="paylas_sag">
<? echo simple_social(''); ?>
</div>
				</div>
				
				
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
