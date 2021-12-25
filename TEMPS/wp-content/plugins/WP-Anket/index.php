<?PHP

if (!session_id())

{

    session_start();

}

ini_set("max_execution_time",0);

set_time_limit(0);



/*

Plugin Name: Anket Sistemi v1

Plugin URI: http://www.ferhatdogan.com.tr

Description: Anket Sistemi v1 - Temanıza <code>&lt;? AnketSite(); ?&gt;</code> diye çağırabilirsiniz.

Author: Ferhat DOĞAN

Version: 1.0

Author URI: http://www.ferhatdogan.com.tr

*/





@add_action('admin_menu', 'AdminPage');

@add_action('admin_head','AnketHeader');

@add_action('wp_head','AnketSiteHeader');



function TagAyir($icerik,$degisken1,$degisken2)

{

    $ayir    = explode($degisken1,$icerik);

    $ayir    = explode($degisken2,$ayir[1]);

    return trim($ayir[0]);

}



function AnketSistemi()

{



    if($_POST['soru'])

    {

        if($_POST['sifirla']!="1")

        {

            $soru       = $_POST['soru'];

            $id         = $_POST['id'];

            if($id=="")

            {

                $ekle   = mysql_query("INSERT INTO wp_anket (icerik,tip) Values ('".mysql_real_escape_string($soru)."','soru')");

            }

            else

            {

                $guncelle   = mysql_query("UPDATE wp_anket SET icerik='".mysql_real_escape_string($soru)."' WHERE id='$id'");

            }

            foreach($_POST as $adi => $icerik)

            {

                if(strpos($adi,'cevap')!== false)

                {

                    $id  = str_replace('cevap','',$adi);

                    $bul = mysql_query("SELECT * FROM wp_anket WHERE id='$id'");

                    if(mysql_num_rows($bul)<1)

                    {

                        if($icerik!="")

                        {

                            $ekle   = mysql_query("INSERT INTO wp_anket (icerik,tip) Values ('".mysql_real_escape_string($icerik)."','cevap')");

                        }

                    }

                    else

                    {

                        if($icerik!="")

                        {

                            $guncelle   = mysql_query("UPDATE wp_anket SET icerik='".mysql_real_escape_string($icerik)."' WHERE id='$id'");

                        }

                        else

                        {

                            $sil        = mysql_query("DELETE FROM wp_anket WHERE id='$id'");

                        }

                    }

                }

            }

        }

        else

        {

            mysql_query("TRUNCATE TABLE wp_anket");

        }



    }





    $soru   = mysql_fetch_array(mysql_query("SELECT * FROM wp_anket WHERE tip='soru'"));

    $sid    = mysql_fetch_array(mysql_query("SELECT * FROM `wp_anket` ORDER By id DESC Limit 1"));

    $sonid  = ($sid['id']=="") ? 2 : $sid['id'];



    echo '

        <br /><div id="message" class="updated fade"><p><strong>Anket Sistemi v1 | * Silmek istediğiniz cevabı boş bırakın. * Sıfırla diyerekten sıfırdan anket hazırlayabilirsiniz.</strong></p><hr />

        <form action="" method="post">

        <input type="hidden" value="'.$soru['id'].'" name="id">

        <input type="hidden" value="0" name="sifirla" id="sifirla">

        <b> Soru &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b> <input type="text" size="65" value="'.$soru['icerik'].'" name="soru"><br />';



    $bul    = mysql_query("SELECT * FROM wp_anket WHERE tip='cevap'");

    $i      = 1;

    while($yaz  = mysql_fetch_array($bul))

    {

        echo ' <b> Cevap '.$i.' : </b> <input type="text" size="50" value="'.$yaz['icerik'].'" name="cevap'.$yaz['id'].'"><br /> ';

        $i++;

    }



    echo '<div id="formelaman" style="margin:0px; height:auto; margin-bottom:5px;"></div>

    <span id="buttonalani" style="padding:0px; margin:0px;"><input type="button" id="button" value="Cevap Alanı Ekle" onclick="javascript:inputekle('.$i.','.$sonid.')"></span>

    &nbsp;<input type="submit" value="Kaydet!">

    &nbsp;<input type="reset" value="Temizle!">

    &nbsp;<input type="submit" value="Sıfırla!" onclick="sifirlayalim('.$i.')">

    >> Bu ankete <b>';

    echo mysql_num_rows(mysql_query("SELECT * FROM wp_anket WHERE tip='oy'"));

    echo '</b> kişi oy vermiş.</form>';

    echo '<hr /></div>';

}





function AnketSite()

{

    $soru       = mysql_fetch_array(mysql_query("SELECT * FROM wp_anket WHERE tip='soru'"));

    $siteadi    = get_bloginfo('url');

    echo '

     <div id="anketsistemi">

        <form action="#" method="post" id="anketform">

            <div id="anketsistemiicon"></div>

            <div id="anketsistemiarka">

                <div id="anketsistemisoru">'.stripslashes($soru['icerik']).'</div>

            </div>

            <div id="anketsistemiiconalti"></div>

            <div id="anketsistemiarkasol"></div>';



    $bul    = mysql_query("SELECT * FROM wp_anket WHERE tip='cevap'");

    $i      = 1;

    while($yaz  = mysql_fetch_array($bul))

    {



        echo '<div class="anketsistemicevap"><input type="radio" name="cvp" value="'.$yaz['id'].'" />  '.$yaz['icerik'].'</div>

              <div class="anketsistemihr"></div>';

        $i++;

    }



   echo '<input type="button" value="SONUÇLAR" id="anketsistemibutton" /> <input type="submit" id="anketsistemisubmit" value="GÖNDER" />

        </form>

    </div>

    ';

}







$anketklasor    = TagAyir($_SERVER['REQUEST_URI'],'?page=','/');



function AnketHeader()

{

    $siteadi  = get_bloginfo('url');

    $sonuc    = '<script type="text/javascript" src="'.$siteadi.'/wp-content/plugins/'.$GLOBALS["anketklasor"].'/Jquery.js"></script>

    <script type="text/javascript">

        function inputekle(sayi,sonid)

        {

            var eski = $("#formelaman").val();

            $("#formelaman").append(eski+\'<b> Cevap \'+sayi+\' : </b> <input type="text" size="50" value="" name="cevap\'+sonid+\'"><br />\');

            $("#buttonalani").html(\'<input type="button" id="button" value="Cevap Alanı Ekle" onclick="javascript:inputekle(\'+(sayi+1)+\',\'+(sonid+1)+\')">\');

            return false;

        }

        function sifirlayalim(id)

        {

            $("#sifirla").attr("value", "1");

            return true;

        }

    </script>';

   echo $sonuc;

}



function AnketSiteHeader()

{

    $siteadi  = get_bloginfo('url');

    $sonuc    = '<link rel="stylesheet" type="text/css" href="'.$siteadi.'/wp-content/plugins/WP-Anket/anket.css" />

    <script type="text/javascript" src="'.$siteadi.'/wp-content/plugins/WP-Anket/Jquery.js"></script>

    <script type="text/javascript">

    jQuery(document).ready(function(){

        $("#anketsistemi form").submit(function(){

            $.post("'.$siteadi.'/wp-content/plugins/WP-Anket/Islem.php?Islem=Oy",$("#anketsistemi form").serialize(),function(data){$("#anketsistemi").html(data);});

            return false;

        });

        $("#anketsistemi #anketsistemibutton").click(function(){



            $.post("'.$siteadi.'/wp-content/plugins/WP-Anket/Islem.php?Islem=Goster",{goster : 1},function(data){$("#anketsistemi").html(data);});

            return false;

        });

    });

    </script>';

   echo $sonuc;

}





function AnketYardim()

{

    echo '<br /><div id="message" class="updated fade"><p><strong>Anket Sistemi Yardım</strong></p><hr /><b>Ferhat DOĞAN</b><br /><h3>Anket Sistemi ile ilgili yardım almak istiyorsanız <font color="red">sanalbilisim@hotmail.com</font> MSN eklerseniz detaylı olarak yardımcı olabiliriz.</h3><hr /></div>';



}



function AdminPage()

{

    $sira    = '8';

    add_menu_page('Anket Sistemi', 'Anket Sistemi',$sira,__FILE__, 'AnketSistemi');

    add_submenu_page(__FILE__, __('Anket Sistemi','Anket Sistemi'), __('Anket Sistemi','AnketSistemi'),$sira,__FILE__);

    add_submenu_page(__FILE__, __('Yardım','Yardım'), __('Yardım','Yardım'),$sira,__FILE__ . '?islem=AnketYardim','AnketYardim');

}



function AnketSistemiKaldir()

{

    mysql_query("DROP TABLE wp_anket");

}

function AnketSistemiKur()

{

    mysql_query("CREATE TABLE `wp_anket` (`id` int(21) NOT NULL auto_increment,`icerik` text character set latin5 NOT NULL,`tip` text character set latin5 NOT NULL,`ip` text character set latin5 NOT NULL,PRIMARY KEY  (`id`)) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;");

    mysql_query("INSERT INTO `wp_anket` VALUES (1, 'Anket Sistemi Nasıl Olmuş ? - Ferhat DOĞAN', 'soru', '')");

    mysql_query("INSERT INTO `wp_anket` VALUES (2, 'Gayet Güzel', 'cevap', '')");

    mysql_query("INSERT INTO `wp_anket` VALUES (3, 'İyi', 'cevap', '')");

    mysql_query("INSERT INTO `wp_anket` VALUES (4, 'Normal', 'cevap', '')");

    mysql_query("INSERT INTO `wp_anket` VALUES (5, 'İdare eder', 'cevap', '')");

    mysql_query("INSERT INTO `wp_anket` VALUES (6, 'Kötü', 'cevap', '')");

}



if(isset($_GET['activate']) && $_GET['activate'] == 'true'){add_action('init', 'AnketSistemiKur');}



?>