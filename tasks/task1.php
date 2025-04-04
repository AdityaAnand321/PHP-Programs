
<?php

//write a php script to demonstrate the concept of the 
//class named "Programming Language" use class memeber memeber must protected


class ProgrammingLanguage{
    protected $var1;
    protected $var2;

    public function __construct($val1,$val2)
    {
        $this->var1=$val1;
        $this->var2=$val2;
    }

    public function display(){
        $sum=$this->var1+$this->var2;
        echo "The sum is: ".$sum;
    }
}

$myObj= new ProgrammingLanguage(4,5);
$myObj->display();

?>