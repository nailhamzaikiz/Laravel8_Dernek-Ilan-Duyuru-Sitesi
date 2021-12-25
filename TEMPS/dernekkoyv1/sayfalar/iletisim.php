<div id="content">

    <div class="solbar">

        <div class="baslik">
            <h1>İLETİŞİM</h1>
        </div>


        <div class="icerik">
            <p><strong>Adres: </strong>
                <?=$ayar[ 'firma_adres']?>
            </p>
            <p><strong>Telefon:</strong>
                <?=$ayar[ 'firma_telefon'];?>
            </p>
            <p><strong>Faks:</strong> (
                <?=$ayar[ 'firma_fax'];?>
            </p>
            <p><strong>E-Posta:</strong>
                <?=$ayar[ 'firma_email']?>
            </p>
            <p>&nbsp;</p>
            <script>
// JavaScript Document
$(function(){
		$("#gonder").click(function(){
			var name = $("#name").val();
			var telefon = $("#telefon").val();			
			var email = $("#email").val();
			var firma  = $("#firma").val();
			var message  = $("#message").val();
			
			if(name == "" || telefon == "" || message == ""){
				alert("Boş Alan Bırakmayınız..!");
				}else{

			$.ajax({ 
            type: "POST",
            url: "mesaj.php",
            data: {'name':name, 'telefon':telefon, 'email':email, 'firma':firma, 'message':message},
            error:function(){ alert("Bir hata oluştur.")},
            success: function(veri) {
				 alert(veri);	
				 document.forms["contactForm"].reset();
			}           
        });
	}
})
})
</script>
            <p><strong>İLETİŞİM FORMU</strong>
            </p>
            <form action="#" method="post" name="contactForm">
                <p>Ad Soyad*
                    <br />
                    <input type="text" name="name"  id="name" style="width:350px;height:25px;" />
                </p>
                <p>Telefon*
                    <br />
                    <input type="text" name="telefon" id="telefon" style="width:350px;height:25px;" />
                </p>
                <p>E-posta*
                    <br />
                    <input type="email" name="email" id="email" style="width:350px;height:25px;" />
                </p>
                <p>Firma
                    <br />
                    <input type="text" name="firma" id="firma" style="width:350px;height:25px;" />
                </p>
                <p>Açıklama
                    <br />
                    <textarea name="message" id="message" cols="40" rows="10" style="width:350px;height:100px;"></textarea>
                </p>
                <p>
                    <input type="button" name="gonder" id="gonder" style="width:100px;height:30px;background:#30A5D0;color:#FFF;border:none;cursor:pointer;" value="Gönder" />
                </p>
            </form>
            <p>&nbsp;</p>

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