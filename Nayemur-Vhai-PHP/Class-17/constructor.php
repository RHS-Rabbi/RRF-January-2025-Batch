<?php

    // class ParentClass {

    //     public function reading() {
    //         return "Parent reads book";
    //     }

    //     public function walking() {
    //         return "Parent walks in the morning";
    //     }
    // }

    // class childClass  extends ParentClass {
    //     // public function reading() {
    //     //     return "Child reads book";
    //     // }

    //     // public function walking() {
    //     //     return "Child walks in the morning";
    //     // }
    // }

    // $cc = new childClass();
    // echo $cc->reading() . "<br>";
    // echo $cc->walking() . "<br>";


    class Person{

        public $name;
        public $age;
        
        public function __construct($StudentName, $StudentAge){
           $this->name = $StudentName;
           $this->age = $StudentAge;

        }


        public  function showInfo(){
            echo "Name: $this->name, Age: $this->age <br>";
        }
    }

    

    $student1 = new Person("Rabbi", 25);


    $student1->showInfo();

   
?>