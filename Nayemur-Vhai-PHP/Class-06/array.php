<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-6</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // Array
            // Array হলো একধরনের ভাণ্ডার (container)
            // যেখানে একটার বেশি মান (value) একসাথে একটা ভেরিয়েবলে রাখা যায়। সাধারণ ভেরিয়েবল
            // শুধু ১টি মান ধরে। অ্যারে অনেক মান একসাথে ধরে।
        
        // indexed array
        $fruits = array(
            "Mango", "Jackfruit", "Litchi"
        );
        // var_dump($fruits);
        // print_r($fruits)

        // $fruits = array(...)
            //  এখানে array() ফাংশনের মাধ্যমে একসাথে ৩টি ফলের নাম রাখা হয়েছে
            // এগুলোর প্রতিটির index number আছে, যা 0 থেকে শুরু হয়।

        // var_dump($fruits);
            // এই ফাংশন ভেরিয়েবলের ধরন (type) এবং সম্পূর্ণ স্ট্রাকচার দেখায়। প্রতিটা item কী ধরনের (string), কত character
        
        // print_r($fruits);
            // এই ফাংশন array-এর readable ভিউ দেখায়। এটা var_dump এর চেয়ে একটু cleaner output দেয়।

        // print_r() ---> শুধু array বা object-এর মান readableভাবে দেখায়
        // var_dump() ---> টাইপ, length, ভ্যালু সবকিছু বিস্তারিতভাবে দেখায়। ডেভেলপারদের জন্য ডিটেইল বোঝার জন্য

        $number =[ 10, 20, 30 ];

        array_push($number, 40);      // শেষে যোগ করে => [10, 20, 30, 40]
        array_unshift($number, 5);    // শুরুতে যোগ করে => [5, 10, 20, 30, 40]
        array_shift($number);         // শুরু থেকে ১ম উপাদান মুছে দেয় => [10, 20, 30, 40]
        array_pop($number);           // শেষে থেকে শেষ উপাদান মুছে দেয় => [10, 20, 30]

        print_r($number);

        // array_push() ---> অ্যারের শেষে মান যোগ করে => শেষে (end)
        // array_unshift() ---> অ্যারের শুরুতে মান যোগ করে => শুরুতে (start)
    ?>





    
</body>
</html>