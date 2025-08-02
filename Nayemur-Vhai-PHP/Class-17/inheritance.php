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
        protected $email = "admin@gmail.com";
        
        public  function showInfo(){
            echo "Parent Name: $this->name, Age: $this->age <br>, Email: $this->email";
        }
    }

    Class Student extends Person {

        public $roll;

        public function ShowStudentInfo(){
            parent::showInfo(); // Call the parent class method
            echo "Name: $this->name <br>, Age: $this->age <br>, Roll: $this->roll<br>, $this->email";
        }

        // public  function showInfo(){
        //     echo "Child Name: $this->name, Age: $this->age <br>";
        // }
    }

    $student1 = new Student();

    $student1->name ="Rabbi";
    $student1->age ="25";
    // $student1->email ="admin@gmail.com";
    $student1->roll =101;



    // $student1->showInfo();
    $student1->ShowStudentInfo();

    // Vehicle -> Car,Bus,etc
    // Employee -> Manager, Developer, etc
    // Animal -> Dog, Cat, etc
    // Shape -> Circle, Square, Rectangle etc
    // Device -> Phone, Laptop, etc


    class Shape{
        public $color;

        public function ShowColor(){
            echo "Color: $this->color <br>";
        }
    }

    class Rectangle extends Shape {
        public $width;
        public $height;

        public function area(){
            return $this->width * $this->height;
        }
    }

    $r = new Rectangle();
    $r->color = "Green";
    $r->width = 10;
    $r->height = 5;

    echo "Area of this Rectangle is:" . $r->area();




?>