<?php
    require_once('animal.php');

    class Frog extends animal {
        public $legs = 4;
        
        public function jump(){
            echo "Hop Hop";
        }
    }
?>