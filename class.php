<?php

class phpClass{
    public $var1;
    public $var2 = "constant string";

    //constructor method to initializze values
    public function __construct($val1)
    {
            $this->var1=$val1; 
    }

public function display(){
        echo "Value of var1: ".$this->var1."<br>";
        echo "Value of var2: ".$this->var2."<br>";

}
}

$myObject= new phpClass("Dynamic Value");
$myObject->display();
?>
