<?php 
    class Fruit {
        public $name;
        public $color;

        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }

    class Strawberry extends Fruit {
        public function message() {
            echo "Do you like fruit? ";
        }
    }

    $strawberry = new Strawberry("Stawberry", "red");
    $strawberry->message();
    echo "<br>";
    $strawberry->intro();
?>