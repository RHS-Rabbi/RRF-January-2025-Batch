<?php

    class product{
        public $name;
        private $price;


        public function productInfo(){
            echo $this->price = 20000;
        }
    }

$product1 = new Product();


$product1->name = "Mobile";
echo $product1->name ."<br/>";

// $product1->price = 20000;
// echo $product1->price ."<br/>";
$product1->productInfo();

?>