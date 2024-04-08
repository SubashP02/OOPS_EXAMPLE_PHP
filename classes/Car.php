<?php
class Car{
    //properties
    public $name;
    public $type;
    public $speed="98";
    //constructor
    public function __construct($nameplaceholder,$typeplaceholder)
    {
        $this->name=$nameplaceholder;
        $this->type=$typeplaceholder;
    }
    //it is method not an function
    public function car_details(){
        return $this->name. " is an " .$this->type." type";
    }

    //getter and setter method
    //getter
    public function getmethod(){
        return $this->name;
    }
    //setter
    public function setmethod($palceholdername){
        return $this->name=$palceholdername;
    }

    //getter if condition 
    public function Setnamemethod($placeholdername){
        $brands=[
            "BMW",
            "AUDI",
            "THAR",
            "SCORPIO"
        ];
        if(in_array($placeholdername,$brands)){
            $this->name=$placeholdername;
        }

    }
    
}

$car1=new Car("BMW","fuel");//its a connection for below code
echo $car1->name;
echo '<br>';
echo $car1->type;
echo '<br>';
echo $car1->speed;
echo '<br>';
echo $car1->car_details();