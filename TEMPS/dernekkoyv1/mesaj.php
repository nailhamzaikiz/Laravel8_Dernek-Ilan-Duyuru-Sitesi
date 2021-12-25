<?php include("admin/include/baglan.php"); ?>
<?php include("admin/include/fonksiyonlar.php"); ?>
<?php 
	$isim = p('name');
	$telefon = p('telefon');
	$email = p('email');
	$firma   = p('firma');
	$message   = p('message');
	$tarih = date("d-m-Y");	
	$mailsorgu = mysql_query("INSERT INTO iletisim SET
								ad		=	'$isim',
								telefon	=	'$telefon',
								mail	=	'$email',
								firma	=	'$firma',
								mesaj	=	'$message',
								tarih	=	'$tarih'");
	if($mailsorgu){
		echo "Mailiniz başarılı bir şekilde gönderilmiştir..En kısa sürede dönüş yapılacaktır.!";
	}else{
		echo "Lütfen Gerekli Alanları Doldurunuz";
	}
        ?> 