<?php

    abstract class PaymentGateway {

        abstract public function pay($amount);

        public function refund(){

        }

    }

    class PayPal extends PaymentGateway{
        public function pay($amount){
            echo "Paid $$amount via PayPal <br/>";
        }

        public function makeRefund(){
            
        }
    }

    class Stripe extends PaymentGateway{
        public function pay($amount){
              echo "Paid $$amount via Stripe <br/>";
        }
    }


    class Bkash extends PaymentGateway{
        public function pay($amount){
            echo "Paid $$amount via Bkash <br/>";
        }
    }



    $paypal = new PayPal();
    $paypal->pay(100);


    $stripe = new stripe();
    $stripe->pay(200);


    $bkash = new bkash();
    $bkash->pay(300);

    // Pillars of opp
    // Inheritane
    // Abstraction
    // Encapsulation
    // Polymorphism


?>