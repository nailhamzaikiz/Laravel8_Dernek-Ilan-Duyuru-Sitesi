<?php $id=g('id');?>
<?php $kategori=mysql_fetch_object(mysql_query( "SELECT * FROM fotograf_galeri_kategori WHERE seo = '$id'"));?>
<?php $foto=mysql_fetch_object(mysql_query( "SELECT * FROM fotograf_galeri WHERE kategori = '$kategori->id'"));?>
<?php $f_id=$foto->id;?>
<div id="content">

    <div class="solbar">
        <div class="baslik">
            <h1><b>FOTO GALERİ /</b> <?php echo $kategori->kategori_adi;?></h1>
        </div>


        <div class="icerik">
            <style type='text/css'>
                #gallery-1 {
                    margin: auto;
                }
                #gallery-1 .gallery-item {
                    float: left;
                    margin-top: 10px;
                    text-align: center;
                    width: 25%;
                }
                #gallery-1 img {
                    border: 2px solid #cfcfcf;
                }
                #gallery-1 .gallery-caption {
                    margin-left: 0;
                }
                /* see gallery_shortcode() in wp-includes/media.php */
            </style>
            <div id='gallery-1' class='gallery galleryid-428 gallery-columns-4 gallery-size-thumbnail'>
<?php $galeriSorgu=mysql_query("SELECT * FROM fotograf_galeri WHERE kategori = '$kategori->id' ORDER BY id DESC"); 
if(!mysql_affected_rows()){echo "Bu kategoriye ait resim bulunamadı."; }else{
while($galeriSonuc=mysql_fetch_object($galeriSorgu)){ ?>
                <dl class='gallery-item'>
                    <dt class='gallery-icon landscape'>
				<a href='wp-content/uploads/galeri/<?php echo $galeriSonuc->resim;?>'><img width="150" height="150" src="wp-content/uploads/galeri/<?php echo $galeriSonuc->resim;?>" class="attachment-thumbnail" alt="<?php echo $galeriSonuc->adi;?>" /></a>
			</dt>
                    <dd class='wp-caption-text gallery-caption'>
                        <?php echo $galeriSonuc->adi;?>
                    </dd>
                </dl>
                <?php }}?>

                <br style="clear: both" />
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