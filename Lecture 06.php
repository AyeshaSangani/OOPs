<?php
 
 class Demo1{

 public $name;

private function display(){                      [ .....if one function is public and other is private and 
                                        
  echo $this->name = "Ahmed";                             we don't want to use object then we use this method...... ]
}

 public function access(){

 $this->display();
 }  
 }
   //$demo1 = newDemo1();
   //$demo1->display();


   echo"<br>";

 
 
 class Demo2 extands Demo1{

    public $name2;
 
     public function display2(){
        echo $this->name2 = "Ali";
   $this->access();
     }
 
 }
 
 $demo2 = new Demo2();
 $demo2 = display2();
 //$demo = display()
 
 ?>
