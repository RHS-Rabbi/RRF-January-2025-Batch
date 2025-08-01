<?php
    class Product {
        public $name;
        public $price;
        public $category;
        public $brand;
        public $stock;
        public $sku;


        public function showDetails(){
            echo "Name: $this->name, Price: $this->price";
        }

    }

    $product1 = new Product();
    $product1->name = "Mobile";
    $product1->price = "2000";
    $product1->category = "Technology";
    $product1->brand = "Walton";
    $product1->stock = "40";
    $product1->sku = "WAL-12345";

    // $product1->showDetails();

    echo $product1->name . "<br>";


    $product2 = new Product();
    $product2->name = "Laptop";
    $product2->price = "8000";
    $product2->category = "Technology";
    $product2->brand = "Walton";
    $product2->stock = "20";
    $product2->sku = "WAL-67890";

    // $product1->showDetails();

    echo $product2->name . "<br>";

    class Person{
        public $name;
        public $age;
        public $email;
        public $phone;
        public $address;
        public $occupation;

        public function showDetails(){
            echo "Name: $this->name<br/>, Age: $this->age<br/>, Email: $this->email<br/>, Phone: $this->phone<br/>, Address: $this->address<br/>, Occupation: $this->occupation<br/>";
        }
    }

    $person1 = new Person();
    $person1->name = "Rabbi";
    $person1->age = 25;
    $person1->email ="rabbi@gmail.com";
    $person1->phone ="98765432100";
    $person1->address ="Dhaka, Bangladesh";
    $person1->occupation ="Devoloper";

    // echo $person1->name . "<br>";
    // echo $person1->age . "<br>";
    // echo $person1->email . "<br>";
    // echo $person1->phone . "<br>";
    // echo $person1->address . "<br>";
    // echo $person1->occupation . "<br>"; 

    $person1->showDetails();
    // এখানে $person1 অবজেক্টের showDetails() মেথড কল করা হয়েছে যা সব প্রপার্টির মান দেখাবে।


?>