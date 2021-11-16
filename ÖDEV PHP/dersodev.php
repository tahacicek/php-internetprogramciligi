<?php

class hesap{

private $id = 1;
private $ad = "Taha ÇİÇEK";
private $bakiye= 100;

public function __construct($id, $ad, $bakiye)
{
    $this->id=$id;
    $this->ad=$ad;
    $this->bakiye=$bakiye;

}
public function getAd(){


    return $this->ad;
}
public function getid(){


    return $this->id;
}
public function sethesap($yenihesap){

    return $this->hesap=$yenihesap;
    return $this->bakiye;

}
 public function hepsi(){

 echo "Bilgiler <br>";
 echo "id: $this->id <br>";
 echo "Ad Soyad: $this->ad <br>";
 echo "Bakiye: $this->bakiye <br>";
 

 }

}

$hesap1 = new hesap(12,"Taha Ç", 2000);
$hesap2 = new hesap(5, "Harun Ç", 5000);
//echo $hesap1->getAd();
//echo $hesap1->getid();
//echo "<br>" . $hesap1->gethesap(); 

$hesap1->hepsi();
echo "<br> <br>". $hesap2->hepsi();






class SpecialAccount extends hesap{


private $interest;

public function __construct($id, $ad, $bakiye, $interest)
{

parent::__construct($id, $ad, $bakiye);
$this->interest=$interest;


}

public function getInterest()
{return  $this->interest;

}

public function showInfo(){



}


}


$vadeliHesap1 = SpecialAccount(1, "DRR", 500, 700);

echo $vadeliHesap1->getid() . "<br>";
echo $vadeliHesap1->getAd() . "<br>";
echo $vadeliHesap1->gethesap() . "<br>";
$vadeliHesap1->hepsi();






?>