<?php
class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
    }
}

class Strawberry extends Fruit{
    public function message() {
        $this->intro();//Can be called from derived class
        echo "Am i a berry or fruit?<br>";
    }
}

$berry=new Strawberry("strawberry","pink");
$berry->message();
// $berry->intro();Cannot be called from outside the class or subclass
?>