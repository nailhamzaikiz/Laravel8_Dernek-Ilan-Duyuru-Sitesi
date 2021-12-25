<?php $id=g ( 'id');?>
<?php $etkinlik=mysql_fetch_object(mysql_query( "SELECT * FROM etkinlikler WHERE durum = '1' and seo = '$id'"));?>
<?php $e_id=$etkinlik->id;?>
<div id="content">

    <div class="solbar">


        <div class="baslik">
            <h1><?php echo $etkinlik->adi;?></h1>
        </div>


        <div class="icerik">
		        	<p style="float:left;margin-right:10px;"><a href="wp-content/uploads/etkinlikler/<?php echo $etkinlik->resim;?>"><img src="wp-content/uploads/etkinlikler/<?php echo $etkinlik->resim;?>" width="300"></a></p>

            <p>
                <?php echo $etkinlik->aciklama;?></p>

            <style type='text/css'>
                #gallery-1 {
                    margin: auto;
                }
                #gallery-1 .gallery-item {
                    float: left;
                    margin-top: 10px;
                    text-align: center;
                    width: 33%;
                }
                #gallery-1 img {
                    border: 2px solid #cfcfcf;
                }
                #gallery-1 .gallery-caption {
                    margin-left: 0;
                }
                /* see gallery_shortcode() in wp-includes/media.php */
            </style>
            <div id='gallery-1' class='gallery galleryid-1765 gallery-columns-3 gallery-size-thumbnail'>
                <?php $etkinlikDigerSorgu=mysql_query( "SELECT * FROM etkinlik_galeri WHERE urun_id = '$e_id'"); 
				while($etkinlikDigerSonuc=mysql_fetch_object($etkinlikDigerSorgu)){?>
                <dl class='gallery-item'>
                    <dt class='gallery-icon '>
<a href='wp-content/uploads/etkinlikler/diger/<?php echo $etkinlikDigerSonuc->resim;?>'><img width="1" height="1" src="wp-content/uploads/etkinlikler/diger/<?php echo $etkinlikDigerSonuc->resim;?>" class="attachment-thumbnail" alt="" /></a>
</dt>
                </dl>
                <?php }?>
                <br style='clear: both;' />
            </div>

        </div>


    </div>

    <div class="sagbar">
        <div class="gri-b">
            <p>ETKİNLİKLER</p>
        </div>
        <?php $etkinlikSorgu=mysql_query( "SELECT * FROM etkinlikler WHERE durum = 1 ORDER BY tarih ASC LIMIT 4"); 
		while($etkinlikSonuc=mysql_fetch_object($etkinlikSorgu)){ ?>
        <div id="etkinlik">
            <a href="etkinlikler-<?php echo $etkinlikSonuc->seo;?>">
                <div class="e-sol">
                    <h3><?php echo substr($etkinlikSonuc->tarih,8,9);?></h3>
                    <h4><?php echo turkce(substr($etkinlikSonuc->tarih,5,2));?></h4>
                </div>
                <div class="e-sag"><b><?php echo $etkinlikSonuc->konu;?></b>
                    <p>
                        <?php echo $etkinlikSonuc->adi;?></p>
                </div>
            </a>
        </div>
        <?php }?>


        <div class="araver"></div>
        <div class="tmz"></div>


        <div class="gri-b">
            <p>FOTO GALERİ</p>
        </div>
        <div class="fvgaleri">
 <?php $galeriKategoriSorgu=mysql_query("SELECT * FROM fotograf_galeri_kategori WHERE durum = 1 ORDER BY id DESC");
  while($galeriKategoriSonuc=mysql_fetch_object($galeriKategoriSorgu)){ ?>
            <a href="foto-galeri-<?php echo $galeriKategoriSonuc->seo;?>">
<img src="wp-content/uploads/galeri/<?php echo $galeriKategoriSonuc->kategori_resim;?>" alt="<?php echo $galeriKategoriSonuc->kategori_adi;?>" />
<p><?php echo $galeriKategoriSonuc->kategori_adi;?></p>
</a>
            <?php }?>
        </div>


        <div class="tmz"></div>


        <div class="gri-b">
            <p>VİDEO GALERİ</p>
        </div>
        <div class="fvgaleri">
            <?php $videoSorgu=mysql_query( "SELECT * FROM video WHERE durum = 1 ORDER BY id DESC"); 
			while($videoSonuc=mysql_fetch_object($videoSorgu)){ ?>
            <a href="video-galeri-<?php echo $videoSonuc->seo;?>">
<img src="wp-content/uploads/video/<?php echo $videoSonuc->resim;?>" alt="Ne Dediler? (<?php echo $videoSonuc->adi;?>)" />
<p>Ne Dediler? (<?php echo $videoSonuc->adi;?>)</p>
</a>
            <?php }?>
        </div>
    </div>

</div>