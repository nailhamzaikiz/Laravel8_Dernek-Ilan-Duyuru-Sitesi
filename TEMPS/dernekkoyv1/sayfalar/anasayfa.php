<div id="content">
    <div class="manset">
        <div class="foto-alan">
            <script type="text/javascript">
                $(function() {
                    $(".foto-kaydir").jCarouselLite({
                        btnNext: ".ilerigotur",
                        btnPrev: ".gerigetir",
                        visible: 1,
                    });
                });
            </script>
            <div id="foto-slayt">
                <div class="gerigetir">
                    <a href="#"></a>
                </div>
                <div class="ilerigotur">
                    <a href="#"></a>
                </div>
                <div class="foto-kaydir">
                    <ul>
                <?php $mansetSorgu=mysql_query( "SELECT * FROM manset WHERE durum = '1' ORDER BY sira ASC"); 
				while($mansetSonuc=mysql_fetch_object($mansetSorgu)){ ?>
                        <li>
                      <a href="haber-<?php echo $mansetSonuc->seo;?>" title="<?php echo $mansetSonuc->adi;?>">
<img src="wp-content/uploads/manset/<?php echo $mansetSonuc->resim;?>" alt="<?php echo $mansetSonuc->adi;?>" />
</a>
                            <p>
                                <a href="haber-<?php echo $mansetSonuc->seo;?>">
                                    <?php echo $mansetSonuc->adi;?></a>
                            </p>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="msag">
        <div id="slider2">
            <?php $faaliyetSorgu=mysql_query( "SELECT * FROM faliyetler WHERE durum = 1 ORDER BY id DESC"); 
			while($faaliyetSonuc=mysql_fetch_object($faaliyetSorgu)){ ?>
            <div class="contentdiv">
                <a href="faliyetler-<?php echo $faaliyetSonuc->seo;?>">
<img src="wp-content/uploads/faaliyet/<?php echo $faaliyetSonuc->resim;?>" alt="<?php echo $faaliyetSonuc->adi;?>" />
</a>
                <p>
                    <a href="faliyetler-<?php echo $faaliyetSonuc->seo;?>">
                        <?php echo $faaliyetSonuc->adi;?></a>
                </p>
            </div>
            <?php }?>
        </div>

        <div id="paginate-slider2">
            <?php $faaliyetSorgu=mysql_query( "SELECT * FROM faliyetler WHERE durum = 1 ORDER BY id DESC"); 
			while($faaliyetSonuc=mysql_fetch_object($faaliyetSorgu)){ ?>
            <a class="toc" href="faliyetler-<?php echo $faaliyetSonuc->seo;?>">
<img src="wp-content/uploads/faaliyet/<?php echo $faaliyetSonuc->resim;?>" alt="<?php echo $faaliyetSonuc->adi;?>" />
<?php echo $faaliyetSonuc->adi;?></a>
            <?php }?>
        </div>

        <script type="text/javascript">
            featuredcontentslider.init({
                id: "slider2", //id of main slider DIV
                contentsource: ["inline", ""], //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
                toc: "markup", //Valid values: "#increment", "markup", ["label1", "label2", etc]
                nextprev: ["", ""], //labels for "prev" and "next" links. Set to "" to hide.
                revealtype: "mouseover", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
                enablefade: [false, 0.4], //[true/false, fadedegree]
                autorotate: [true, 4000], //[true/false, pausetime]
                onChange: function(previndex, curindex) { //event handler fired whenever script changes slide
                    //previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
                    //curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
                }
            })
        </script>
    </div>

    <div class="araver"></div>
    <div class="tmz"></div>


    <div class="sol">
        <div class="gri-b">
            <p>ETKİNLİK TAKVİMİ</p>
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
        <a href="sayfa-etkinlikler">Tüm Etkinlikler</a>
    </div>


    <div class="orta">
        <div class="gri-b">
            <p>FOTO GALERİ</p>
        </div>
        <div class="fvgaleri">
 <?php $galeriKategoriSorgu=mysql_query( "SELECT * FROM fotograf_galeri_kategori WHERE durum = 1 ORDER BY id DESC"); while($galeriKategoriSonuc=mysql_fetch_object($galeriKategoriSorgu)){ ?>
            <a href="foto-galeri-<?php echo $galeriKategoriSonuc->seo;?>">
<img src="wp-content/uploads/galeri/<?php echo $galeriKategoriSonuc->kategori_resim;?>" alt="<?php echo $galeriKategoriSonuc->kategori_adi;?>" />
<p><?php echo $galeriKategoriSonuc->kategori_adi;?></p>
</a>
            <?php }?>
        </div>

        <div class="gri-b">
            <p>VİDEO GALERİ</p>
        </div>
        <div class="fvgaleri">
            <?php $videoSorgu=mysql_query("SELECT * FROM video WHERE durum = 1 ORDER BY id DESC"); 
			while($videoSonuc=mysql_fetch_object($videoSorgu)){ ?>
            <a href="video-galeri-<?php echo $videoSonuc->seo;?>">
<img src="wp-content/uploads/video/<?php echo $videoSonuc->resim;?>" alt="Ne Dediler? (<?php echo $videoSonuc->adi;?>)" />
<p>Ne Dediler? (<?php echo $videoSonuc->adi;?>)</p>
</a>
            <?php }?>
        </div>

    </div>


    <div class="sag">
        <div class="gri-b">
            <p>ÜYELERİMİZ</p>
        </div>
        <ul id="ticker">
            <?php $uyeSorgu=mysql_query( "SELECT * FROM uyeler WHERE durum = 1 ORDER BY id DESC"); 
			while($uyeSonuc=mysql_fetch_object($uyeSorgu)){ ?>
            <li>
                <a href="uye-<?php echo $uyeSonuc->seo;?>">
<img src="wp-content/uploads/uyeler/<?php echo $uyeSonuc->resim;?>" alt="<?php echo $uyeSonuc->adi;?>" />
</a>
                <p>
                    <a href="uye-<?php echo $uyeSonuc->seo;?>">
                        <?php echo $uyeSonuc->adi;?></a><b><?php echo $uyeSonuc->gorev;?></b>
                </p>
            </li>
            <?php }?>
        </ul>
        <script>
            function tick() {
                $('#ticker li:first').slideUp(function() {
                    $(this).appendTo($('#ticker')).slideDown();
                });
            }
            setInterval(function() {
                tick()
            }, 5000);
        </script>
    </div>


</div>