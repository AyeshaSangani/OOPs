

<?php


          ///........Polymorphism......../////


class UserA {

    //method 

    public function name1(){
        echo "This is class user A <br>";
    }

}

class UserB {

    //method 

    public function name2(){
        echo "This is class user B <br>";
    }

}

class UserC {

    //method 

    public function name3(){
        echo "This is class user C <br>";
    }

}


$userA = new UserA();
$userB = new UserB();
$userC = new UserC();


$userA->name1();
$userB->name2();
$userC->name3();


?>