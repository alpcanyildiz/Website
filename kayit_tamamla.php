<!--�smail Burak Kurhan 220201055
    Alpcan Y�ld�z 220201049 
	 -->
<?php
 
$ad = $_GET['ad'];
$kullaniciadi = $_GET['kullaniciadi'];
$sifre = $_GET['sifre'];
$posta = $_GET['posta'];
 
if(empty($ad)){
echo("<center><b>Ad�n�z� Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}elseif(empty($kullaniciadi)){
echo("<center><b>Kullan�c� Ad�n�z� Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}elseif(empty($sifre)){
echo("<center><b>�ifrenizi Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}elseif(empty($posta)){
echo("<center><b>E-Postan�z� Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}else{
include("db_ayar.php");
$sql = "INSERT INTO uye (ad, kullaniciadi, sifre, email)
values ('$ad', '$kullaniciadi', '$sifre', '$posta')";
$kayit = mysql_query($sql);



	
    $_SESSION['username'] = $kullaniciadi;
    $_SESSION['success'] = "You are now logged in";
    
}
if (isset ($kayit)){
echo "Uye Kaydiniz Basariyla Yapilmistir geri donup giris yapabilirsiniz";
}
else {
echo "Kay�t Ba�ar�s�z ";
}
?>