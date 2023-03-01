<?php
    class Shape{
        public $length;
        public $breadth;
        public $area;
        public function __construct($length,$breadth){
            $this->length = $length;
            $this->breadth = $breadth;
            echo "Constructor called <br>";
        }

        public function area2(){
            echo "Area is: " .$this->length*$this->breadth . "<br>";
        }
        function __destruct(){
            echo "Destructor is called <br>";
        }
    }
    class Square extends Shape{
        public function area3($length){
            $this->area = $length*$length;
            echo $this->area ."<br>";
        }
    }
    class Rectangle extends Square{
        public function area4($length,$breadth){
            $this->area = $length*$breadth;
            echo $this->area ."<br>";

        }
    }
    $shape1 = new Rectangle(10,30);
    $shape1->area4($shape1->length,$shape1->breadth);  
?>