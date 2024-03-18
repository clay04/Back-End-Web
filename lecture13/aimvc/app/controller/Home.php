<?php
    class Home{
        public function __construct() {

            
        }

        public function index($name="Clay", $age="20"){
            echo "this is home/index";
            echo "<br>My name is $name and I'm $age years old this year";
        }

        public function page($current_page=2, $next_page=3, $prev_page=1){
            echo "this is page/index";
            echo "<br><b>Current Page: </b>$current_page";
            echo "<br><b>Next Page: </b>$next_page";
            echo "<br><b>Previous Page: </b>$prev_page";
        }

        //Get status
        private function _status(){
            echo "This is home/page";
        }
    }
?>