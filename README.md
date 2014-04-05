Sansür Sınıfı
=============

Kelime sansürleme için PHP Sınıfı

#### Örnek Kullanım

	include('baglan.php'); // veritabanı bağlantısının çağrıldığı sayfa
	require('sansurclass.php'); // sınıfımızı çağırıyoruz.
	$sansurum = new Sansur();
	$sansurum->sansural("SELECT * FROM sansur","kelime","sansuru");  // orjinali $sansurum->sansural("sansür tablosu sorgusu","sansürlenecek kelime sütun adı","sansürlü yazı sütun adı"); 
	$sansurum->sansurle('hey seni gidi kahrolası pislik'); 

#### Veritabanı Dosyası

[`veritabanı.sql.txt`](veritabani.sql.txt)
