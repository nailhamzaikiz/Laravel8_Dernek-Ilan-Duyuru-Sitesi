<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Bu satırları silmeyin
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Lütfen bu sayfayı direkt yüklemeyin. Teşekkürler!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">Bu yazı parola korumalı. Yorumları görmek için parolayı girin.</p>
	<?php
		return;
	}
?>

<!-- Buradan sonrasını düzenleyebilirsiniz. -->










<!--yorumlar bloğu başladı-->
			<div class="haberler_ust"><?php comment_form_title( 'Yorum yapın', '%s için yorum yapın' ); ?></div>
			<div class="haberler_orta">
			
			
			<?php if ( comments_open() ) : ?>

<div id="respond">


<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<div class="ortacik">
<p>Yorum yapabilmek için <a href="<?php echo wp_login_url( get_permalink() ); ?>">giriş</a> yapmalısınız.</p>
</div>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

<?php if ( is_user_logged_in() ) : ?>
<div class="ortacik">
<p><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> olarak giriş yapılmış. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Bu hesaptan çıkış yapın">Çıkış Yap &raquo;</a></p>
</div>
<?php else : ?>

				<div class="yblok">
					<div class="y1">İsim</div>
					<div class="y2">:</div>
					<div class="y3"><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> /></div>	
					<div class="clear"></div>
				</div>

				
				<div class="yblok">
					<div class="y1">E-Posta</div>
					<div class="y2">:</div>
					<div class="y3"><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> /></div>	
					<div class="clear"></div>
				</div>
				
				<div class="yblok">
					<div class="y1">WebSite</div>
					<div class="y2">:</div>
					<div class="y3"><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" /></div>	
					<div class="clear"></div>
				</div>
				
				<?php endif; ?>
				<div class="yblok">
					<div class="y1">Yorumunuz</div>
					<div class="y2">:</div>
					<div class="y4"><textarea name="comment" id="comment" cols="58" rows="6"></textarea></div>	
					<div class="clear"></div>
				</div>
				
				<input type="reset" class="yorumreset" value="" />
				<input name="submit" type="submit" class="yorumgonder" value="" />
<!--<p><small><strong>XHTML:</strong> Şu etiketleri kullanabilirsiniz: <code><?php echo allowed_tags(); ?></code></small></p>-->
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // Eğer üyelik gerekliyse ve giriş yapılmamışsa ?>
</div>

<?php endif; // eğer bunu silerseniz gökyüzü başınıza düşecek ?>
<div class="clear"></div>


			
		
				
			
			
			
			
<?php if ( have_comments() ) : ?>
<ol>
				
<?php foreach ($comments as $comment) : ?>
				<!-- 1 yorum -->
				<div class="biryorum">
				<cite>
<div class="yorumavatar"><?php userphoto_comment_author_photo() ?></div>
					<div class="yorumicerik">
					<span class="yazaran"><?php comment_author_link() ?></span>                    <span class="yorumtarih">Yorum <?php comment_time() ?> <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?></a>  de Yazılmıştır..</span>

</cite>
					<div class="clear"></div>
<?php comment_text() ?>
<?php if ($comment->comment_approved == '0') : ?>
<em><b>Yorumunuz onaylandıktan sonra yayınlanacaktır.</b></em>
<?php endif; ?>
					</div>
					

				<div class="clear"></div>
				</div>
				<!-- 1 yorum son-->
<?php
/* Changes every other comment to a different class */
$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
?>
<?php endforeach; /* end for each comment */ ?>
</ol>

 <?php else : // Hiç yorum yoksa gösterilecek bölüm ?>

	<?php if ( comments_open() ) : ?>
		<!-- Yorum yapma açıksa ama henüz yorum yoksa. -->

	 <?php else : // Yorum yapma kapalı ?>
		<!-- Eğer yorum yapma kapalıysa. -->
		<p class="nocomments">Yorum yapma kapalı.</p>

	<?php endif; ?>
<?php endif; ?>


			
			
				
				
				
				
			</div>
			<div class="haberler_alt"></div> <!--yorumlar bitti-->




