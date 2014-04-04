<?php 
//********************************************* 
//Tarih:21.07.2010 Yazılımcı RaSiM ÖZDİNÇ	  * 
//********************************************* 
//
include('baglan.php'); // veritabanı bağlantısının çağrıldığı sayfa 
require('sansurclass.php'); // sınıfımızı çağırıyoruz. 

$sansurum = new Sansur(); 

$sansurum->sansural("SELECT * FROM sansur","kelime","sansuru");  // orjinali $sansurum->sansural("sansür tablosu sorgusu","sansürlenecek kelime sütun adı","sansürlü yazı sütun adı"); 

$sansurum->sansurle('hey seni gidi kahrolası pislik'); 

?>