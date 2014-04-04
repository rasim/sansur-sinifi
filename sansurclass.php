<?php
class Sansur {
	
public $yazi;
public $bul;
public $degis;
public $duzenli;
public $sql;
public $bulunacak;
public $degistirilecek;
public $sonuc;

function __construct(){
$this->yazi="";
$this->bul="";
$this->degis="";
$this->duzenli="";
}

public function sansural() {
$this->bul=array();
$this->degis=array();

$sql = mysql_query("SELECT * FROM sansur");
$bulunacak="kelime";
$degistirilecek="sansuru";
		
while($sonuc=mysql_fetch_assoc($sql)){
$this->bul[]= $sonuc[$bulunacak];
$this->degis[]= $sonuc[$degistirilecek];
}
}

public function sansurle($yazi){
$this->duzenli = str_replace($this->bul, $this->degis, $yazi);
echo $this->duzenli;
}

}


?>


