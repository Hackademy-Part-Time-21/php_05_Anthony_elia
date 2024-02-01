//TRACCIA 1

<?php

// Class Street{

//     public $nameStreet;

//     public function construct($nameStreet){
//         $this->nameStreet = $nameStreet;
//     }
// }


// Class City extends Street {
//     public $nameCity; 

//     public function construct($nameStreet,$nameCity){
//         parent::construct ($nameStreet);
//             $this->nameCity = $nameCity;

//     }

// }


// Class Province extends City{
//     public $nameProvince; 

// public function construct($nameStreet,$nameCity,$nameProvince){
//     parent::construct($nameStreet,$nameCity);
//     $this->nameProvince = $nameProvince;


// }

//     public function getMyCurrentLocation(){
//         echo "Mi trovo in  {$this-> nameStreet} nella città di {$this-> nameCity} nella provincia di {$this -> nameProvince}";
//     }
// }


// $Puglia = new Province("Viale Europa","Trani","Puglia");
// $Puglia->getMyCurrentLocation();

//TRACCIA 2
// class vertebrates{
//     protected function getVertebrato(){
//         echo "sono un animale vertebrato\n";
//     }
//     public function construct(){
//         $this->getVertebrato();
//     }
// }

// class warm_blooded extends vertebrates{

//     public function construct(){
//         parent::construct();
//         $this->Sanguecaldo();
//     }

//         protected function Sanguecaldo(){
//         echo "Ho il sangue caldo\n";
//     }
//     }

// class mammifero extends warm_blooded{
// public function construct(){
//     parent::construct();
//     $this->getMammifero();

// }

//     function getMammifero(){
//         echo "ruggisco aurgh!\n";
//     }
// }


// $leone = new mammifero();


class Car {
    public $num_telaio;
    public $targa;
    public function __construct($num_telaio,$targa){
        $this-> num_telaio=$num_telaio;
        $this-> targa=$targa;
    }
  }
  
  class Fiat extends Car { 
    protected $macchina;
    public function __construct($num_telaio,$targa,$macchina){
        parent::__construct($num_telaio,$targa);
        $this-> macchina=$macchina;
  }
  public function getPrint(){
    echo "la mia macchina è {$this->macchina} , con targa {$this::$targa} e numero di telaio $self::$num_telaio\n";
  }
}

   $car = new Fiat(1234,"FJ456LP","500");
   var_dump($car);
   $car->getPrint();