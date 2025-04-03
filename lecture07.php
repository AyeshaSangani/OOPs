<?php
  
  
  class Demo1{
    
    public $name;

    private function display(){
        echo $this->name = "Ahmed";
    }

    function __construct()
    {
        $this->display();
    }
  }

//   $demo1 = new Demo1();
//   $demo1->display();


echo "<br>";
echo "<br>";


class Demo2 extends Demo1{

    public $name2;

    private function display2(){
        echo $this->name = "Waleed";
    }

    function __construct(){
        parent::__construct();
        $this->display2();
    }
} 
    $demo2 = new Demo2();
    
    // $demo2->display2();

?>