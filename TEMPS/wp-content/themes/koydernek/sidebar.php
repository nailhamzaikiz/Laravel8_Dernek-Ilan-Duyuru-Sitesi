<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
		<div id="sag">
			
<?php if(!is_user_logged_in())
{
?>			
			<!-- sag 1 blok -->
			<div class="sag_ust">Üye Girişi</div>
			<div class="sag_orta">
				<form action="<?php bloginfo('url')?>/wp-login.php" method="post">
				<div class="s1">Kullanıcı Adı</div>
				<div class="s2">:</div>
				<div class="s3"><input type="text" name="log" value="" /></div>
				<div class="clear"></div>
				<div class="s1">Şifre</div>
				<div class="s2">:</div>
				<div class="s3"><input type="password" name="pwd" value="" /></div>
				<input type="hidden" name="redirect_to" value="<?php bloginfo('url');?>" />
				<div class="clear"></div>
				<a href="<?php bloginfo('url')?>/wp-login.php?action=lostpassword" class="sifremi">Şifremi Unuttum?</a>
				<input type="submit" class="girisyap" value="" />
			</form>
			<div class="clear"></div>
			<div class="konuekle"><a href="<?php bloginfo('url');?>/wp-login.php?action=register"><img src="<?php bloginfo('template_url'); ?>/images/konuekle.jpg" alt=""  /></a></div>
			
			</div>
			<div class="sag_alt"></div>
			<!-- sag 1 blok bitti -->
<?php }
else
{
	global $current_user;
    get_currentuserinfo();
?>			
			<!-- sag 2 blok -->
			<div class="sag_ust2"></div>
			<div class="sag_orta2">
				<div class="uyegirdi_avatar">
<?php userphoto($current_user, $before = '', $after = '', $attributes = array(), $default_src = ''); ?>
                    </div>
				<div class="uyegirdi_bilgi">
					<div class="uyegirdix">Hoşgeldin, <span class="yesil">[<?php echo $current_user->user_login;?>]</span> <a href="<?php echo wp_logout_url( get_option('home') ); ?>"><span style="font-size:10px;">{Çıkış Yap}</span></a></div>
					<div class="uyegirdix"><a href="<?php bloginfo('url');?>/wp-admin/profile.php">Profil Bilgilerini Düzenleyin...</a></div>
					<div class="uyegirdix"><a href="<?php bloginfo('url');?>/wp-admin/profile.php">Avatarınızı Değiştirin..</a></div>
					<div class="uyegirdix"><a href="<?php bloginfo('url');?>/wp-admin/post-new.php"><span class="kirmizi">Video / Resim / Haber ekleyin...</span></a></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="sag_alt"></div>
			<!-- sag 2 blok bitti -->
<?php
}
?>			
			
			<!-- sag 1 blok -->
			<div class="sag_ust"><?php echo fs_get_option('fs_havail'); ?>'da 5 Günlük Hava Tahmini</div>
			<div class="sag_orta">
				<div align="center">
					<img style="float:left; margin-left: 5px;" src="http://www.dmi.gov.tr/sunum/tahmingor-a1.aspx?m=<?php echo fs_get_option('fs_havail'); ?>&g=1" alt="" /> 
<img style="float:left; margin-left: 12px;" src="http://www.dmi.gov.tr/sunum/tahmingor-a1.aspx?m=<?php echo fs_get_option('fs_havail'); ?>&g=2" alt="" /> 
<img style="float:left; margin-left: 12px;" src="http://www.dmi.gov.tr/sunum/tahmingor-a1.aspx?m=<?php echo fs_get_option('fs_havail'); ?>&g=3" alt="" /> 
<img style="float:left; margin-left: 12px;" src="http://www.dmi.gov.tr/sunum/tahmingor-a1.aspx?m=<?php echo fs_get_option('fs_havail'); ?>&g=4" alt="" /> 
<img style="float:left; margin-left: 12px; margin-bottom: 4px;" src="http://www.dmi.gov.tr/sunum/tahmingor-a1.aspx?m=<?php echo fs_get_option('fs_havail'); ?>&g=5" alt="" /> 

				</div>
<a href="http://www.diziizlesey.com/" title="Dizi izle">Dizi izle</a>
			</div>
			<div class="sag_alt"></div>
			<!-- sag 1 blok bitti -->
			
			<!-- sag 1 blok -->			<?php 
			$sayi = fs_get_option('fs_yazar2');			$kat = get_cat_id(fs_get_option('fs_yazar'));
			?>			<div class="sag_ust"><?php echo get_cat_name($kat); ?></div>			<div class="sag_orta">
			<?php $recent = new WP_Query("showposts=".$sayi."&cat=".$kat.""); while($recent->have_posts()) : $recent->the_post();?>
					<div class="yazar">
					<div class="yazar_resim">
					<?php
						 if ( has_post_thumbnail() ) {
							// Eğer bir resim atanmışsa bu resmi göster
							the_post_thumbnail();
						 } else {
				 
							// Eğer bir resim atanmamışsa standart bir resim göster
														
							echo '<img src="';
							bloginfo('template_url');
							echo '/images/yazarresim.png" alt="" />';
						
						 }
						 ?>
						</div>
					<div class="yazar_ozet">
						<span><?php the_author_posts_link(); ?></span>
						<p><a href="<?php the_permalink() ?>"><?php baslik(38); ?></a></p>
						<b><?php the_author_posts_link(); ?> tüm yazıları için tıklayın...</b> 
					</div>	
					</div><!--yazar bitti-->
			<?php endwhile; ?>			
			
			</div>
			<a href="<?php echo get_category_link($kat); ?>" class="tum_yazarlar"></a>
			<!-- sag 1 blok bitti -->
			
			
			<!-- sag 1 blok -->
			<div class="sag_ust">Anket</div>
			<div class="sag_orta">
			<? AnketSite(); ?>
			</div>
			<div class="sag_alt"></div>
			<!-- sag 1 blok bitti -->

			
			
			<!-- sag 2 blok -->
			<div class="sag_ust2"></div>
			<div class="sag_orta2">
				<div align="center">				<?php echo fs_get_option('fs_yanreklam'); ?>				</div>
			</div>
			<div class="sag_alt"></div>
			<!-- sag 2 blok bitti -->
			
			<!-- sag 1 blok -->
			<div class="sag_ust">Son Yorumlar</div>			<div class="sag_orta">
				<div class="yorumliste">
						<?php						$sayi = fs_get_option('fs_yorum2');
						global $wpdb;
						$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID,
						comment_post_ID, comment_author, comment_date_gmt, comment_approved,
						comment_type,comment_author_url,
						SUBSTRING(comment_content,1,75) AS com_excerpt
						FROM $wpdb->comments
						LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =
						$wpdb->posts.ID)
						WHERE comment_approved = '1' AND comment_type = '' AND
						post_password = ''
						ORDER BY comment_date_gmt DESC
						LIMIT $sayi";
						$comments = $wpdb->get_results($sql);
						$output = $pre_HTML;
						$output .= "\n<ul>";
						foreach ($comments as $comment) {
						$output .= "\n<li><a href=\"" . get_permalink($comment->ID) .
						"#comment-" . $comment->comment_ID . "\" title=\"on " .
						$comment->post_title . "\"><span>" .strip_tags($comment->comment_author)." : </span>" . strip_tags($comment->com_excerpt)
						."</a></li>";
						}
						$output .= "\n</ul>";
						$output .= $post_HTML;
						echo $output;
						?> 
							
				</div>
			</div>
			<div class="sag_alt"></div>
			<!-- sag 1 blok bitti -->
			
		
		</div><!--sag bitti-->