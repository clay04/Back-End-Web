<html>
    <body>
        <?php 
            class Fruit {
                public $name;
                public $color;

                function set_name($name) {
                    $this->name = $name;
                }

                function get_name() {
                    return $this->name;
                }
            }

            $aple = new Fruit();
            $banana = new Fruit();

            $aple->set_name('Apple');
            $banana->set_name('Banana');

            echo "Fruit #1 Name: ".$aple->get_name();
            echo "<br>";
            echo "Fruit #2 Name: ".$banana->get_name();
        ?>
    </body>
</html>