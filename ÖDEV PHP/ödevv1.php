<?php


class odev



{

    function toplama($sayi1, $sayi2)


{
   return $sayi1+$sayi2;

}
 
function cikarma($sayi1, $sayi2)


{
   return $sayi1-$sayi2;

}

function carpma ($sayi1, $sayi2)

{
   
    return $sayi1*$sayi2;

}

function bol ($a, $b)

    {

        return $a /$b;
    }

}



$odev = new odev;


echo "<br> <br> <br> Bölme Sonucu :" . $sonuc = $odev->bol(10,2);

echo "<br> <br> Çarpma Sonucu :" . $odev-> carpma(5,2);


echo "<br> <br>  Çıkarma Sonucu :" . $sonuc = $odev->cikarma(10,2);

echo "<br> <br>  Toplama Sonucu :" . $sonuc = $odev->toplama(20,2);







?>