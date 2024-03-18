<?php 
    class manusia{
        public $name = "My name is Juan Tan.";
        public $hair = "My hair color is black";

        function tampilkan_nama() {
            return $this->name."<br />";
        }

        function warna_rambut() {
            return "$this->hair <br />";
        }
    }

    $manusia = new manusia();

    echo $manusia->tampilkan_nama();

    echo $manusia->warna_rambut();
?>