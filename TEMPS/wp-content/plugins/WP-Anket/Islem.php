<?PHP
header("Content-Type: text/html; charset=windows-1254");
require('../../../wp-load.php');

function GetIPAnket()
{
    if(getenv("HTTP_CLIENT_IP"))
    {
       $ip = getenv("HTTP_CLIENT_IP");
    }
    elseif(getenv("HTTP_X_FORWARDED_FOR"))
    {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        if (strstr($ip, ','))
        {
            $tmp = explode (',', $ip);
            $ip = trim($tmp[0]);
        }
    }
    else
    {
        $ip = getenv("REMOTE_ADDR");
    }
    return $ip;
}

function AnketHesap($sayi,$bsayi)
{
    return (($sayi*100)/('1'.(str_repeat('0',strlen($bsayi)))));
}

function BSayi()
{
    $bul        = mysql_query("SELECT * FROM wp_anket WHERE tip='cevap'");
    $bsayi      = "100";
    while($yaz  = mysql_fetch_array($bul))
    {
        $say    = mysql_num_rows(mysql_query("SELECT * FROM wp_anket WHERE icerik='".$yaz['id']."'"));
        if($say>$bsay){
            $bsay   = $say;
        }
    }
    return $bsay;
}

function AnketGoster()
{
    $soru       = mysql_fetch_array(mysql_query("SELECT * FROM wp_anket WHERE tip='soru'"));
    echo '<form action="#" method="post">
        <div id="anketsistemiicon"></div>
        <div id="anketsistemiarka">
            <div id="anketsistemisoru">'.iconv('UTF-8','Windows-1254',$soru['icerik']).'</div>
        </div>
        <div id="anketsistemiiconalti"></div>
        <div id="anketsistemiarkasol"></div>';

    $bul    = mysql_query("SELECT * FROM wp_anket WHERE tip='cevap'");
    $i      = 1;
    while($yaz  = mysql_fetch_array($bul))
    {
        $say    = mysql_num_rows(mysql_query("SELECT * FROM wp_anket WHERE icerik='".$yaz['id']."'"));
        echo '<div class="anketsistemicevap"> '.iconv('UTF-8','Windows-1254',$yaz['icerik']).' - <span class="anketsistemioyadet">'.$say.' oy kullanýldý.</span></div>
              <div class="anketsistemiload"><div class="anketsistemiload2" style="width:'.AnketHesap($say,BSayi()).'%"></div></div>';
    }
    echo '<input type="button" value="SONUÇLAR" id="anketsistemibutton" /> <input type="submit" id="anketsistemisubmit" value="GÖNDER" /></form>';
    return true;
}

if($_GET['Islem']=="Oy")
{
    foreach($_POST as $adi => $icerik)
    {
        $id     = $icerik;
        $ip     = GetIPAnket();
        $bul    = mysql_query("SELECT * FROM wp_anket WHERE ip='$ip'");
        if(mysql_num_rows($bul)<1)
        {
           mysql_query("INSERT INTO wp_anket (icerik,tip,ip) values ('$id','oy','$ip')");
        }
    }
    AnketGoster();

}elseif($_GET['Islem']=="Goster")
{
    AnketGoster();
}
else
{
    echo "Ýzinsiz iþlem!";
}
?>