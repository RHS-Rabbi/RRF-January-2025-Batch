<?php
    // trait logger{
    //     public function log($message){

    //         // echo "Log: $message";
    //         echo "$message";
    //     }
    // }

    // trait TimeTracker{
        
    //     public function trackTime(){
    //         echo "Tracking Time:" . date('Y-m-d');
    //     }
    // }


    // class user {
    //     use logger, TimeTracker;

    //     public function createUser($username){

    //         $this->log("User $username has been created");
    //         $this->trackTime();
    //     }
    // }

    // $user = new user();
    // $user->createUser("Rabbi Hossain");



    trait logger{
        public function log(){

            // echo "Log: $message";
            echo "Loggar log Method";
        }
    }

    trait TimeTracker{
        
        public function log(){
            echo "TimeTracker log Method";
        }
    }


    class user {

        // use logger, TimeTracker {
        //     TimeTracker::log insteadof logger; 
        // }
        use logger{
            log as private;
        }

        public function createUser($userName){
            echo "Username $userName has been created ";
            $this->log();
        }
    }

    $user = new user();
    // $user->log();
    $user->createUser("Rabbi");

    /*
        Namespace:

        Project/
            frontEnd/
                Services.php

            backEnd/
                 Services.php


        namespace  project\frontEnd

        namespace  project\backEnd
    
    */

?>