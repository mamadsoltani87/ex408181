<?php

abstract class Shape {
    const UNIT = "cm";
 
    abstract public function area();
}

class Rectangle extends Shape {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function area() {
        return $this->width * $this->height;
    }
}
class Circle extends Shape {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}


$rectangle = new Rectangle(5, 17);
$circle = new Circle(9);


echo "Rectangle Area: " . $rectangle->area() . " " . Shape::UNIT . "<br>";
echo "Circle Area: " . $circle->area() . " " . Shape::UNIT . "<br>";
?>
