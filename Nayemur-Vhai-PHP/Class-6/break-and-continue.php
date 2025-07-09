<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-6</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // PHP Loop & Break
        echo "<h1>PHP Loop & Break<h2/>";
        for ($i = 1; $i <= 5; $i++){
            if ($i%2 == 0){
                break;
            }
            echo $i . "<br/>";
        };

        // for ($i = 1; $i <= 5; $i++) {
            // এখানে $i = 1 → অর্থাৎ লুপ শুরু হবে 1 থেকে।
            // $i <= 5 → যতক্ষণ $i ৫-এর কম বা সমান, ততক্ষণ লুপ চলবে।
            // $i++ → প্রতি লুপ শেষে $i এর মান ১ করে বাড়বে।

        // if ($i % 2 == 0) { break; }
            // এখানে % হচ্ছে modulus operator → ভাগশেষ বের করে।
            // ($i % 2 == 0) মানে হচ্ছে: $i জোড় সংখ্যা কিনা।
            // যদি $i জোড় হয় (ভাগশেষ ০ হয়), তাহলে break; হবে, অর্থাৎ লুপ থেমে যাবে।

        //  break = "এই মানে পৌঁছালেই — লুপ শেষ"


        // PHP Loop & Continue
        echo "<h1>PHP Loop & Continue<h2/>";
        for ($i = 1; $i <= 5; $i++){
            if ($i%2 == 0){
                continue;
            }
            echo $i . "<br/>";
        };

        // for ($i = 1; $i <= 5; $i++)
            // লুপ শুরু হবে $i = 1 থেকে
            // যতক্ষণ $i <= 5, লুপ চলবে
            // প্রতি চক্রে $i++ মানে $i এর মান ১ করে বাড়বে
        // if ($i % 2 == 0)
            // % → Modulus Operator → ভাগশেষ বের করে
            // $i % 2 == 0 মানে $i যদি ২ দিয়ে নিঃশেষে ভাগ হয়, তাহলে সেটা জোড় সংখ্যা
        // continue;
            // যদি শর্ত সত্য হয়, অর্থাৎ $i জোড় হয়,
            // তাহলে continue; চালু হয়
            // এর মানে হলো এই রাউন্ডের বাকি অংশ (যেমন echo) স্কিপ করে পরের রাউন্ডে চলে যাওয়া
        // echo $i . "<br/>";
            // যদি $i % 2 == 0 সত্য না হয়, অর্থাৎ $i বিজোড় হয়, তাহলে সেই সংখ্যা echo দিয়ে দেখানো হবে

        for ($i = 1; $i <= 5; $i++){
            if ($i%2 !== 0){
                continue;
            }
            echo $i . "<br/>";
        };

        // ! (NOT) মানে হলো উল্টো করে দেওয়া
        // মনে রাখো:
            // true → !true = false
            // false → !false = true
        
    ?>





    
</body>
</html>