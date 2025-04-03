<?php

abstract class UserA { 

    abstract public function name1();

}

// $userA = new UserA();
// $userA->name1();


class UserB extends UserA{

    public function name1() {
        echo "This is an Abstration function";
        }
}

$userB = new UserB();
$userB->name1();

?>