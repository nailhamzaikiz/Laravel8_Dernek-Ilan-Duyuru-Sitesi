<?php $id=g ( 'id');?>
<?php $video=mysql_fetch_object(mysql_query( "SELECT * FROM video WHERE durum = '1' and seo = '$id'"));?>
<?php $f_id=$video->id;?>
<div id="content">

<div class="solbar">


<div class="baslik"><h1><b>VİDEO GALERİ /</b> Ne Dediler? (<?php echo $video->adi;?>)</h1></div>


<div class="icerik"><p><iframe width="500" height="375" src="http://www.youtube.com/embed/<?php echo $video->aciklama;?>?feature=oembed" frameborder="0" allowfullscreen></iframe></p>
<p>Ne Dediler? (<?php echo $video->adi;?> )</p>
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