<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-5</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // Variable scope function


        // $globalVar = "Global";
            // এটা একটি global variable। অর্থাৎ, এটি ফাংশনের বাইরে ডিফাইন করা হয়েছে এবং পুরো স্ক্রিপ্টে ব্যবহারযোগ্য
            //  — তবে সরাসরি ফাংশনের ভিতরে কাজ করবে না, যদি না তাকে global করে ডাকা হয়।


        // function textScope(){
        //  global $globalVar;

            // এখানে একটি ফাংশন textScope() ডিফাইন করা হয়েছে।
            //  global $globalVar; মানে, ফাংশনের ভিতরে globalVar কে ব্যবহার করার অনুমতি দিচ্ছে। কারণ,
            //   সাধারণত ফাংশনের ভিতরে বাইরের ভ্যারিয়েবল কাজ করে না।
            //    global কীওয়ার্ড দিয়ে সেটাকে ফাংশনের ভিতরে আনা হয়েছে।
        

        // $local = "Mohammad Rabbi Hossain";   //local variable

            //  এটা একটি local variable। এটি শুধু ফাংশনের ভিতরেই কাজ করবে,
            //   ফাংশনের বাইরে এই ভ্যারিয়েবল অ্যাক্সেস করা যাবে না।
        
        // echo $globalVar . "<br/>";

            //  এখানে globalVar এর মান Global প্রিন্ট করবে, কারণ উপরে global করে আনা হয়েছে।

        // echo $local;
        // }

            // এখানে $local মানে Mohammad Rabbi Hossain প্রিন্ট হবে।


        // textScope();

            // অবশেষে textScope() ফাংশন কল করা হয়েছে। ফলে আউটপুট হবে:

        // Output
            // Global
            // Mohammad Rabbi Hossain
        
        // সংক্ষেপে স্কোপ ব্যাখ্যা:
            // Global Scope: ফাংশনের বাইরে ডিক্লেয়ার করা ভ্যারিয়েবল, যাকে ফাংশনের ভিতরে global দিয়ে আনা লাগে।
            // Local Scope: ফাংশনের ভিতরে ডিক্লেয়ার করা ভ্যারিয়েবল, যা শুধু সেই ফাংশনের ভিতরে কাজ করে।

        $globalVar = "Global";  //Global

        
        function textScope(){

            global $globalVar;

            $local = "Mohammad Rabbi Hossain"; //local variable
            echo $globalVar . "<br/>";

            echo $local . "<br/>";
        }
        textScope();


        $greet = function (){
            echo "Hello, Future Developers!";
        };

        $greet();
    ?>




    
</body>
</html>