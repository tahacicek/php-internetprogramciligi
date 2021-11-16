<?php




class Ogrenci{

    private $name;
    private $surname;
    private $vize;
    private $final;

    public function __construct($name,$surname,$vize,$final)
    {
        $this->name=$name;
        $this->surname=$surname;
        $this->vize=$vize;
        $this->final=$final;
    }


    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        return $this->name=$name;
    }

    function getSurName()
    {
        return $this->surname;
    }

    function setSurName($surname)
    {
        return $this->surname=$surname;
    }
    
    function getVize()
    {
        return $this->vize;
    }

    function setVize($newVize)
    {
        return $this->vize = $vize;
    }

    function getFinal()
    {
        return $this->final;
    }

    function setFinal($newFinal)
    {
        return $this->final = $newfinal;
    }

    

    public function showInfo()
    {
        echo "<h3> Öğrencinin Bilgileri</h3>";
        echo "ADI: "     . $this->name         . "<br>";
        echo "SOYADI: "    . $this->surname       . "<br>";
        echo "VİZE:". $this->vize    . "<br>";
        echo "FİNAL:". $this->final  . "<br>";

    }

}



$ogrenci1=new Ogrenci("Mehmet","CİVAN",70,75);
//$ogrenci1->showInfo();




class OnlisansOgrenci extends Ogrenci{


    private $nothesapla1;
    
    public function __construct($name,$surname,$vize,$final)
    {
    
        parent::__construct($name,$surname,$vize,$final);
        
        
    }
    
    function getnotHesapla1($vize,$final)
    {
        $nothesapla1 = ($vize * 0.3) + ($final * 0.7); 
        
        return $nothesapla1;

    }
    
    
    
    public function showInfo()
    {
        parent::showInfo();
        
        
        
        
    }
    
    }

    
    
    
    $onlisansOgrenci1=new OnlisansOgrenci("TAHA","ÇİÇEK",80,90);
  
    $onlisansOgrenci1->showInfo();
    echo "NOT ORTALAMASI:". $onlisansOgrenci1->getnotHesapla1(80,90)   . "<br>";

 
    echo "<hr>";

    
class LisansOgrenci extends Ogrenci{


    private $nothesapla1;
    
    public function __construct($name,$surname,$vize,$final)
    {
    
        parent::__construct($name,$surname,$vize,$final);
        
        
    }
    
    function getnotHesapla1($vize,$final)
    {
        $nothesapla1 = ($vize * 0.4) + ($final * 0.6); 
        
        return $nothesapla1;

    }
    
    
    
    
    public function showInfo()
    {
        parent::showInfo();
        
        
        
        
    }
    
    }
    
    
    $LisansOgrenci1=new LisansOgrenci("ENES ","NE BİLİYM",80,70);
  
    $LisansOgrenci1->showInfo();
    echo "NOT ORTALAMASI:". $LisansOgrenci1->getnotHesapla1(60,70)   . "<br>";

    echo "<hr>";

    
class LisansustuOgrenci extends Ogrenci{


    private $nothesapla1;
    private $proje;

    public function __construct($name,$surname,$vize,$final, $proje)
    {
    
        parent::__construct($name,$surname,$vize,$final);
        
        $this->proje=$proje;
    }
    
    function getProje()
    {
        return $this->proje;
    }

    function setProje($newProje)
    {
        return $this->proje = $newproje;
    }
    
    function getnotHesapla1($vize,$final, $proje)
    {
        $nothesapla1 = ($vize * 0.3) + ($final * 0.5) + ($proje * 0.2); 
        
        return $nothesapla1;

    }
    
    
    
    public function showInfo()
    {
        parent::showInfo();
        
        echo "PROJE:". $this->proje    . "<br>";
        
        
        
    }
    
    }
    
    
    $LisansustuOgrenci=new LisansustuOgrenci("YUNUS","EMRE",70,75,50);
  
    $LisansustuOgrenci->showInfo();
    echo "NOT ORTALAMASI:". $LisansustuOgrenci->getnotHesapla1(70,75,50)   . "<br>";

    
    


   
    
    

?>