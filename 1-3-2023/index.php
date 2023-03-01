<?php
class Car{
    private $name,$model;
    function __construct($name,$model){
        $this->name = $name;
        $this->model = $model;
    }
    protected function carData(){
        echo "Protected function called <br>";
    }
    public function carModel(){
        echo "Public function called <br>";
    }
}
Class Ford extends Car{
    public function ecoSport(){
        echo "Eco Sport is called <br>";
        $this->carData();
    }

} 
Class Honda{
    public static function activa(){
        echo "Activa is called <br>";
    }
}
$motor = new Ford('ford','2019');
$motor->carModel();
$motor->ecoSport();
Honda::activa();
?>