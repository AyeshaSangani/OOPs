<?php

    Encapsulation
           
 
 class Demo1{

 public $name;

private function display(){
  echo $this->name = "Ahmed";
}

 public function access(){
 $this->display();
 }  
   [{(we use construct for runnning private funtion and for public function object outside class)}]
   
   // function __construct()
   //  {
   //  $this->dispaly();
   //  }

 }
   //$demo1 = newDemo1();
   //$demo1->display();


   echo"<br>";
   echo"<br>";
 
 class Demo2()
                                ....Inheritance....
 
 class Demo2 extands Demo1 {
    public $name2;
 
     public function display2(){
        echo $this->name2 = "Ali";
     }
 
 }
 
 $demo2 = new Demo2();
 $demo2 = display2();
 $demo = display()
 
 ?>

