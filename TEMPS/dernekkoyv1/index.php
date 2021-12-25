<?php include( "admin/include/baglan.php"); include( "admin/include/fonksiyonlar.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="TR" />
    <meta name="language" content="TR" />

    <title>
        <?=$ayar[ 'site_title']?>
    </title>
    <meta name="description" content="<?=$ayar['site_description']?>">
    <meta name="keywords" content="<?=$ayar['site_meta']?>">
    <meta http-equiv="reply-to" content="<?=$ayar['site_mail']?>">
    <style type="text/css" media="screen">
        <!-- @import url(wp-content/themes/istanbul/style.css);
        -->
    </style>

    <script type="text/javascript" src="wp-content/themes/istanbul/js/jquery.js"></script>
    <script type="text/javascript" src="wp-content/themes/istanbul/js/foto-slayt.js"></script>
    <script type="text/javascript" src="wp-content/themes/istanbul/js/contentslider.js"></script>


    <style type="text/css">
        #fancybox-close {
            right: -15px;
            top: -15px
        }
        div#fancybox-content {
            border-color: #FFFFFF
        }
        div#fancybox-title {
            background-color: #FFFFFF
        }
        div#fancybox-outer {
            background-color: #FFFFFF
        }
        div#fancybox-title-inside {
            color: #333333
        }
    </style>

    <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/stylesf3df.css?ver=3.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='fancybox-css' href='wp-content/plugins/fancybox-for-wordpress/fancybox/fancyboxcd70.css?ver=3.8.3' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-pagenavi-css' href='wp-content/plugins/wp-pagenavi/pagenavi-css44fd.css?ver=2.70' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jquery3e5a.js?ver=1.10.2'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
    <script type='text/javascript' src='wp-content/plugins/fancybox-for-wordpress/fancybox/jquery.fancyboxc412.js?ver=1.3.4'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 3.8.3" />

    <!-- Fancybox for WordPress v3.0.2 -->
    <script type="text/javascript">
        jQuery(function() {

            jQuery.fn.getTitle = function() { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
                var arr = jQuery("a.fancybox");
                jQuery.each(arr, function() {
                    var title = jQuery(this).children("img").attr("title");
                    jQuery(this).attr('title', title);
                })
            }

            // Supported file extensions
            var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter(function() {
                return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href'))
            });

            thumbnails.addClass("fancybox").attr("rel", "fancybox").getTitle();
            jQuery("a.fancybox").fancybox({
                'cyclic': false,
                'autoScale': true,
                'padding': 10,
                'opacity': true,
                'speedIn': 500,
                'speedOut': 500,
                'changeSpeed': 300,
                'overlayShow': true,
                'overlayOpacity': "0.3",
                'overlayColor': "#666666",
                'titleShow': true,
                'titlePosition': 'inside',
                'enableEscapeButton': true,
                'showCloseButton': true,
                'showNavArrows': true,
                'hideOnOverlayClick': true,
                'hideOnContentClick': false,
                'width': 560,
                'height': 340,
                'transitionIn': "fade",
                'transitionOut': "fade",
                'centerOnScroll': true
            });


        })
    </script>
    <!-- END Fancybox for WordPress -->

    <script type="text/javascript" src="wp-content/themes/istanbul/cfn/cufon-yui.js"></script>
    <script type="text/javascript" src="wp-content/themes/istanbul/cfn/scripts.js"></script>
    <script type="text/javascript" src="wp-content/themes/istanbul/cfn/s.font.js"></script>
    <script type="text/javascript" src="wp-content/themes/istanbul/cfn/g.font.js"></script>

</head>

<body>
    <div id="header">
        <div class="h-or">

            <div class="logo"><a href="sayfa-anasayfa"><img src="wp-content/themes/istanbul/i/<?=$ayar['site_logo']?>" /></a>
            </div>
            <div class="umenu"><!--<a href="#">Türkçe</a><a href="#">İngilizce</a>-->
            </div>

            <div class="tmz"></div>
            <div class="anamenu">
                <div class="menu-ust-menu-container">
                    <ul id="menu-ust-menu" class="menu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8"><a href="sayfa-anasayfa">ANASAYFA</a>
                        </li>
                        <li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-346"><a href="#">KURUMSAL</a>     
                      <?php $sayfaSorgu = mysql_query("SELECT * FROM sayfalar WHERE durum = 1 ORDER BY sira ASC");
					  if(!mysql_affected_rows()){}else{
					  echo '<ul class="sub-menu">';
					  while($sayfaSonuc = mysql_fetch_object($sayfaSorgu)){?>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                             <a href="sayfalar-<?php echo $sayfaSonuc->seo; ?>"><?php echo $sayfaSonuc->adi; ?></a>
                          </li>
                      <?php }echo '</ul>';?> 
                      <?php }?>  
                        </li>
                        
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-150"><a href="sayfa-faliyetler">FAALİYETLER</a>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-150"><a href="sayfa-haberler">HABERLER</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-74"><a href="#">GALERİ</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-76"><a href="sayfa-foto-galeri">FOTO GALERİ</a>
                                </li>
                                <li  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-77"><a href="sayfa-video-galeri">VİDEO GALERİ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10"><a href="sayfa-iletisim">İLETİŞİM</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="tmz"></div>

    <div id="wrap">
        <?php include( 'if.php');?>
        <div class="tmz"></div>

        <div class="destek">
            <ul id="ticker2">


                <li>
                   <?php $destekSorgu=mysql_query( "SELECT * FROM destekleyenler WHERE durum = 1 ORDER BY id DESC");
					while($destekSonuc=mysql_fetch_object($destekSorgu)){ ?>
                    <a href="<?php echo $destekSonuc->aciklama;?>" target="_blank"><img src="wp-content/uploads/destek/kucuk/<?php echo $destekSonuc->resim;?>" alt="<?php echo $destekSonuc->adi;?>" border="0"/>
</a>
                    <?php }?>
                </li>
            </ul>
            <script>
                function tick2() {
                    $('#ticker2 li:first').slideUp(function() {
                        $(this).appendTo($('#ticker2')).slideDown();
                    });
                }
                setInterval(function() {
                    tick2()
                }, 8000);
            </script>
        </div>

        <div class="tmz"></div>

        <div id="footer">

            <div class="fsol">
                <p>
                    <?=$ayar[ 'firma_adres']?>
                </p>
                <p>
				Tel : <?=$ayar['firma_telefon'];?> / Faks : <?=$ayar['firma_fax'];?>
                </p>
                <p>
                    <?=$ayar[ 'firma_email']?>
                </p>
            </div>
            <style type="text/css">
                input[type=text]::-webkit-input-placeholder {
                    color: #999999;
                }
                input[type=text]:-moz-placeholder {
                    color: #999999;
                }
                input[type=text]:focus {
                    box-shadow: 0 1px 0 #2392f3 inset, 0 -1px 0 #2392f3 inset, 1px 0 0 #2392f3 inset, -1px 0 0 #2392f3 inset, 0 0 4px rgba(35, 146, 243, 0.5);
                    outline: none;
                    background: #ffffff;
                }
            </style>
            <script type="text/javascript">
							$(function(){
								$("#bulten").click(function(){
									var ebulten = $("#ebulten").val();
									
									if(ebulten == ""){
									alert("E-Mail Boş Olamaz.!!");
									}else{
									$.ajax({
										type:"post",
										url:"bulten.php",
										data: {'ebulten':ebulten},
										success:function(c){
											alert(c);
											 document.forms["newsletterForm"].reset();
										}
										
									});
									}
								return false;	
								});
								
							});
						  </script>
            <div class="ebulten">
                <form action="#" method="post" name="newsletterForm">
                    <input type="text" class="ebul" name="ebulten" id="ebulten" placeholder="Bizi Takip Edin" />
                    <input type="button" class="ebulbuton" style="width:50px;background:#30A5D0;color:#FFF;height:26px; border:none;" name="egonder" id="bulten" value="Ekle" />
                </form>
            </div>
            <div class="fsag">
                <a href="<?=$ayar['facebook']?>" target="_blank"><img src="wp-content/themes/istanbul/i/f1.png" alt="" />
                </a>
                <a href="<?=$ayar['twitter']?>" target="_blank"><img src="wp-content/themes/istanbul/i/f2.png" alt="" />
                </a>
            </div>

        </div>

    </div>
<center><span style="color: #ffffff;"><a style="color: #ffffff;" href="http://www.enkral.net" target="_blank">Ücretsiz Script İndir</a> - <a style="color: #ffffff;" href="http://www.enkral.net/market-item/ucretsiz-dernek-koy-scripti/" target="_blank">Ücretsiz Köy Dernek Scripti</a></span></center>

</body>

</html>