<!--�smail Burak Kurhan 220201055
    Alpcan Y�ld�z 220201049 
	 -->
<?php
$host = "localhost";
$mysqladi = "id4357238_uye";
$mysqlsifre ="admin";
$db = "id4357238_uye";
@mysql_connect ("$host", "$mysqladi", "$mysqlsifre") or die ("MySql Baglantisinda Hata");
@mysql_select_db ("$db") or die ("�ye Veritabanina Baglanilamadi");
?>