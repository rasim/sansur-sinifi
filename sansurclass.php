<?php
//********************************************* 
//Tarih:21.07.2010 Yazılımcı RaSiM ÖZDİNÇ	  * 
//********************************************* 

class Sansur { 
     
public $yazi; 
public $bul; 
public $degis; 
public $duzenli; 
public $sql; // sql sorgusu 
public $bulunacak; // bulunacak sütun 
public $degistirilecek; // değiştirilecek sütun 
public $sonuc; 

	function __construct(){ 
        $this->yazi=""; 
        $this->bul=""; 
        $this->degis=""; 
        $this->duzenli=""; 
	} 

    public function sansural($sql,$bulunacak,$degistirilecek) { 
        $this->bul=array(); 
        $this->degis=array(); 
        $sql=mysql_query($sql); 
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