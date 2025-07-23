<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-5</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

    // Callback Function কী?
        // Callback মানে এমন এক ফাংশন, যেটাকে অন্য ফাংশনের ভিতরে প্যারামিটার হিসেবে পাঠানো হয়,
        //  এবং সেই ফাংশন কল করে কাজ করে।



    // Call Back Function
    function process($callback){
        return $callback ("Mohammad Rabbi Hossain");
    }

    $result = process(function($name){
        return "Hello, $name!";
    });

    echo $result;


    //  1. function process($callback)
        //  এখানে process() নামে একটি ফাংশন ডিক্লেয়ার করা হয়েছে,
        // যেটি একটি প্যারামিটার $callback গ্রহণ করে।
        //  এই $callback আসলে একটি function (ফাংশন কে প্যারামিটার হিসেবে পাঠানো)।
    
    // 2. return $callback("Mohammad Rabbi Hossain");
        // এই লাইনে $callback ফাংশনটিকে কল করা হয়েছে
        // এবং তাকে ইনপুট হিসেবে "Mohammad Rabbi Hossain" পাঠানো হয়েছে।
        //  অর্থাৎ: এটা হচ্ছে —
            // return function($name){ ... }("Mohammad Rabbi Hossain");

    //  3. $result = process(function($name){ return "Hello, $name!"; });
        //  এখানে process() ফাংশন কল করা হয়েছে।
        // প্যারামিটার হিসেবে পাঠানো হয়েছে একটি anonymous function:
            // function($name){
            //     return "Hello, $name!";
            // }
        //  এই ফাংশনটি Mohammad Rabbi Hossain নামটি পাবে এবং রিটার্ন করবে:
            // "Hello, Mohammad Rabbi Hossain!"

        //  4. echo $result;
            // অবশেষে, এই রিটার্ন ভ্যালু $result ভ্যারিয়েবলে রাখা হয়েছে এবং echo করে দেখানো হয়েছে।

        //  আউটপুট:   
            // Hello, Mohammad Rabbi Hossain!

        // সংক্ষেপে বোঝো:
            // function process($callback) ---> Callback function নেয়

            // $callback("Rabbi") ---> ফাংশনটিকে কল করে

            // function($name){ ... } ---> 	Anonymous function

            // Callback Function --->  ফাংশনকে প্যারামিটার হিসেবে পাঠানো

            // Output ---> Hello, Mohammad Rabbi Hossain!
    ?>





    
</body>
</html>