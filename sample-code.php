<?php 

class Person {

    
        protected $first = "Onyekachukwu";
        protected $last = "John";
        protected $age = 28;
    
    }
    
    class Details extends Person {
        public function owner() {
            $a = "My name is " . $this->first . " " . $this->last . " and I am " . $this->age . " years old";
            return $a;
        }
    }
    


?>



