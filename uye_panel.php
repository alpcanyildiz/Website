<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>IYTECAR</title>
<meta charset="UTF-8">
<?php
if (isset($_REQUEST["kullanici"])) {
include("db_ayar.php");
$sql = ("select * from uye");
//echo ($_REQUEST["kullanici"]);
}

//$cookie = $_COOKIE['kullanici'];

//echo ($cookie);
//if ($cookie == "online"){

//echo "
//<table width=\"100%\">
//<tr>
//<td width=\"100%\">Kullan�c� Paneli</td>
//<td><a href=\"cikis.php\">��k��</a></td>
//</tr>
//</table>
//";
//}else{ 
//header('Location: index.php');

?>



<link rel="stylesheet" href="styles/kategoriler.css" type="text/css">
</head>
<body>
<div class="wrapper row1">
<h1>Uye Girisi Yaptiniz</h1>

  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">IYTECAR</a></h1>
      <h2>BURASI SIZIN YERINIZ</h2>
    </div>
    <nav>
      <ul>
        <li><a href="anasayfa.html">ANA SAYFA</a></li>
        <li><a href="kategoriler.html">KATEGORILER</a></li>
        <li><a href="haberbulteni.html">HABER BULTENI</a></li>
        <li><a href="iletisim.html">ILETISIM</a></li>
		<li class="last"><a href="cikis.php">��k�� Yap</a></li>
      </ul>
    </nav>
  </header>
</div>

<div class="wrapper row2">
  <div id="container" class="clear">
 
    <section id="slider"><a href="#"><img src="images/demo/960x360.gif" alt=""></a></section>

    <div id="homepage">
   
      <section id="services" class="clear">
        <article class="one_third">
          <figure><img src="images/demo/290x1801.gif" width="290" height="180" alt="">
            <figcaption>
              <h2>SPOR ARA�LAR</h2>
              <p>Spor ara� sevdal�lar�na �zel h�zl� ve g��l� ara�lar�m�z.</p>
              <footer class="more"><a href="spor.html">�ncelemek i�in t�klay�n�z... &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third">
          <figure><img src="images/demo/290x1802.gif" width="290" height="180" alt="">
            <figcaption>
              <h2>KLAS�K ARA�LAR</h2>
              <p> Klasik ara� sevdal�lar�na 1900'lerde ya�amak isteyenlere �zel  .</p>
              <footer class="more"><a href="klasik.html">�ncelemek i�in t�klay�n�z... &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third lastbox">
          <figure><img src="images/demo/290x1803.gif" width="290" height="180" alt="">
            <figcaption>
              <h2>HAVA ARA�LARI</h2>
              <p> Trafik �ilesinden b�k�p havada trafi�e ��z�m bulmak isteyenlere �zel .</p>
              <footer class="more"><a href="hava.html">�ncelemek i�in t�klay�n�z... &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
      
    </div>

  </div>
</div>

<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">IYTECAR <a href="#"></a></p>
  </footer>
</div>
