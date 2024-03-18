<!DOCTYPE html>
<html>
    <body>
        <?php
            class Animal {
                var $name;
                var $color;

                function __construct($name, $color)
                {
                    $this->name = $name;
                    $this->color = $color;
                }

                function __destruct()
                {
                    echo "The animal is {$this->name} and the color is {$this->color}."; 
                }
            }

            $dog = new Animal("Dog", "red");
        ?>
    </body>
</html>