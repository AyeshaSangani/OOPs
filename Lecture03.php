<?php

           WHEN PROPERTY AND METHOD BOTH ARE PUBLIC

class Update {

//property


public $name;

//method

public function abc(){


$this->name = "Ahmed";


echo $this->name;

}
}


this is object



$Update new Update();

$Update->abc()




            WHEN PROPERTY IS PUBLC AND METHOD OR FUNCTION IS PRIVATE

class Update {

public $name;

private function abc (){

echo $this->name = "Ali";

}

function _construct()

$this->abc();

$abc new Update();

 //echo $abc->abc()



?>
