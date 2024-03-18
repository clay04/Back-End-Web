<html>
    <head>
        <title>Pengguanan Method POST</title>
    </head>
    <body>
        <form action="#" method="post">
            Nama: <input type="text" name="name"><br>

            <input type="submit">
        </form>

        <?php 
            if (isset($_POST["nama"]))
            {
                echo "Nama : ".$_POST["nama"];
            }
        ?>
    </body>
</html>