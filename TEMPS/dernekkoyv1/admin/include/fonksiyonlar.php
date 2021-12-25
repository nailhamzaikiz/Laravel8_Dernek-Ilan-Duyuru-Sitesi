<?php

$tarih = date("d.m.Y");
$saat = date("h:i");

function oturumkontrolana(){
	 $kullanici = $_SESSION['yonetici_kullanici'];
	 $sifre = $_SESSION['yonetici_sifre'];
	 $oturumkontrol = mysql_query("select * from yonetici where yonetici_kullanici ='$kullanici' and yonetici_sifre ='$sifre'"); 
	 $durum = mysql_fetch_array($oturumkontrol);
	 if($durum){ }else{ echo '<script language="javascript">window.location="index.php";</script>'; die(); }
 }
 
 
 $ayarlar = mysql_query("select * from ayar where ayar_id ='1'"); 
	$ayar = mysql_fetch_array($ayarlar);
	
function turkce($turkce)
{
$yabancikelimeler=array("01","02","03","04","05","06","07","08","09","10","11","12");
$turkcekelimeler=array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos",
"Eylül","Ekim","Kasım","Aralık");
$degistir=str_replace($yabancikelimeler,$turkcekelimeler,$turkce);
return $degistir;
}
function p($par, $st=false){
	if($st){
		return htmlspecialchars(addslashes(trim($_POST[$par])));
		}else{
		return addslashes(trim($_POST[$par]));
		}
	}
	
function g($par){
		return strip_tags(trim(addslashes($_GET[$par])));
	}
	
function go ($url, $time = 0){
		if ($time) header("Refresh: {$time}; url={$url}");
		else header("Location: {$url}");
	}
function GetIP(){
    if(getenv("HTTP_CLIENT_IP")) {
         $ip = getenv("HTTP_CLIENT_IP");
     } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
         $ip = getenv("HTTP_X_FORWARDED_FOR");
         if (strstr($ip, ',')) {
             $tmp = explode (',', $ip);
             $ip = trim($tmp[0]);
         }
     } else {
     $ip = getenv("REMOTE_ADDR");
     }
    return $ip;
}
	function seo($tr1) {
	$turkce=array("ş","Ş","ı","ü","Ü","ö","Ö","ç","Ç","ş","Ş","ı","ğ","Ğ","İ","ö","Ö","Ç","ç","ü","Ü");
	$duzgun=array("s","S","i","u","U","o","O","c","C","s","S","i","g","G","I","o","O","C","c","u","U");
	$tr1=str_replace($turkce,$duzgun,$tr1);
	$tr1 = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i","-",$tr1);
	return $tr1;
} 
  function kisalt($metin, $uzunluk){
        $metin = substr($metin, 0, $uzunluk)."...";
        $metin_son = strrchr($metin, " ");
        $metin = str_replace($metin_son," ...", $metin);
        
        return $metin;
    }
?>
