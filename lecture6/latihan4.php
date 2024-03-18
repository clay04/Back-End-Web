<!DOCTYPE html>
<html>
    <head>
        <title>PHP Get Current Function Name</title>
    </head>

    <body>
        <?php 
        function ClayAiken() {
            echo "Nama Function ini adalah - ", __FUNCTION__;
        }

        ClayAiken();
        ?>
    </body>
</html>