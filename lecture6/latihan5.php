<!DOCTYPE html>
<html>
    <head>
        <title>PHP Get Current Class Name</title>
    </head>

    <body>
        <?php 
        class Clay {
            public function getClassName() {
                return __CLASS__;
            }
        }

        $obj = new Clay();
        echo "My Class name is "; 
        echo $obj->getClassName();
        ?>
    </body>
</html>