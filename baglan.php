<?php

// Veritabanı ayarları
$vt_kullanici="root";
$vt_parola="";
$vt_isim="sansur";
$vt_sunucu="localhost";

$baglan=mysql_connect($vt_sunucu,$vt_kullanici,$vt_parola);
mysql_select_db($vt_isim,$baglan);
mysql_query("SET NAMES 'UTF8'");


?>