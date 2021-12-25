<?php 
include("admin/include/baglan.php");
if($_POST){
	$ebulten = $_POST['ebulten'];
	$tarih = date('d-m-Y');

	$ebulten_ekle_sorgu = mysql_query("insert into ebulten ( 
																	mail,
																	tarih) 
														   			values (
																   '$ebulten',
																   '$tarih')");
	echo 'E-Bültene Başarıyla Kayıt Oldunuz';
	}?>