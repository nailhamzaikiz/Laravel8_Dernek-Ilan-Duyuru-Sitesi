<?php
if(isset($_GET['sayfa'])){
		$s = $_GET['sayfa'];
		switch($s){
		case 'sayfa';
		require_once("sayfalar/sayfa.php");
		break;
		
		case 'iletisim';
		require_once("sayfalar/iletisim.php");
		break;
		
		case 'foto-galeri';
		require_once("sayfalar/foto_galeri.php");
		break;
		
		case 'video-galeri';
		require_once("sayfalar/video_galeri.php");
		break;
		
		case 'faliyetler';
		require_once("sayfalar/faliyetler.php");
		break;
		
		case 'haberler';
		require_once("sayfalar/haberler.php");
		break;
		
		case 'manset-detay';
		require_once("sayfalar/manset_detay.php");
		break;
		
		case 'galeri-detay';
		require_once("sayfalar/galeri_detay.php");
		break;
		
		case 'uye-detay';
		require_once("sayfalar/uye_detay.php");
		break;
		
		case 'video-detay';
		require_once("sayfalar/video_detay.php");
		break;
		
		case 'faaliyet-detay';
		require_once("sayfalar/faaliyet_detay.php");
		break;
		
		case 'etkinlik-detay';
		require_once("sayfalar/etkinlik_detay.php");
		break;
		
		case 'etkinlikler';
		require_once("sayfalar/etkinlikler.php");
		break;
		
		case 'genc-is-adamlari-platformu';
		require_once("sayfalar/genc.php");
		break;
		
		case 'sosyal-aktiviteler-platformu';
		require_once("sayfalar/sosyal.php");
		break;
		
		default:
		require_once("sayfalar/anasayfa.php");
		}
}else{
		require_once("sayfalar/anasayfa.php");
	}
?>