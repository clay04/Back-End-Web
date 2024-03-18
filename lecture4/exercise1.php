<?php 
    class Phone_Number {
        var $no_hp;
        var $email;
    }

    $andi = new Phone_Number();
    $rudi = new Phone_Number();

    $andi->no_hp="0812345";
    $andi->email="andi@unklab.com";

    $rudi->no_hp="0854321";
    $rudi->email="rudi@unklab.com";

    echo "Andi Phone Number & email :"."<br>";
    echo $andi->no_hp;
    echo "<br />";
    echo $andi->email;
    echo "<br />";

    echo "<br><br>"."Rudi Phone Number $ email:"."<br>";
    echo $rudi->no_hp;
    echo "<br />";
    echo $rudi->email;
    echo "<br />";
?>