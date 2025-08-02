<?php

    interface  PaymentGateway {

        public function pay($amount);

        // public function refund();

    }

    class PayPal implements PaymentGateway{
        public function pay($amount){
            echo "Paid $$amount via PayPal <br/>";
        }

    //    public function refund(){}

    }

    class Stripe implements PaymentGateway{
        public function pay($amount){
              echo "Paid $$amount via Stripe <br/>";
        }
        // public function refund(){}
    }





    $paypal = new PayPal();
    $paypal->pay(100);


    $stripe = new stripe();
    $stripe->pay(200);





?>