<?php
    interface Payment{
        public function pay($amount);
    }

    class PayPal implements Payment{

        public function pay($amount){
            echo "Paid $amount via PayPal <br/>";
        }
    }

    class Stripe implements Payment{
        
        public function pay($amount){
            echo "Paid $amount via Stripe <br/>";
        }
    }

    // $paypal = new PayPal();
    // $paypal-> pay(100);

    // $stripe = new Stripe();
    // $stripe-> pay(100);

    $gateways = [new PayPal(),new Stripe()];

    foreach($gateways as $gateway){
        $gateway->pay(500);
    }

?>