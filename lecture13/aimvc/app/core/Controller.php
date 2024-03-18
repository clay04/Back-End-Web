<?php
    class Controller{
        public function __construct(){
            echo "Object is created.";
        }

        public function __destruct(){
            echo "Script is stopped or exited.";
        }
    }

?>