<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-2</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">

    <?php

        // Increment এবং Decrement কী?
            // Increment (++) মানে: ১ করে বাড়ানো
            // Decrement (--) মানে: ১ করে কমানো
        // এই দুইটা অপারেটর সাধারণত সংখ্যা (number) এর উপরে কাজ করে।
        
        //  ১. Increment Operator (++)
            // একটি ভেরিয়েবলের মান ১ বাড়াতে ++ ব্যবহার করা হয়।

        // দুই ধরনের Increment হয়:
            // ++$a	Pre-increment → আগে বাড়ায়, পরে ব্যবহার করে
            // $a++	Post-increment → আগে ব্যবহার করে, পরে বাড়ায়


        // উদাহরণ – Pre-increment (++$a):
        $a = 5;
        $b = ++$a;

        echo $a . "<br/>";  // Output: 6
        echo $b . "<br/>";  // Output: 6
        //  ব্যাখ্যা: আগে $a ১ বাড়ে → তারপর সেটি $b তে দেওয়া হয়

       
        // উদাহরণ – Post-increment ($a++):
        $a = 5;
        $b = $a++;

        echo $a . "<br/>";  // Output: 6
        echo $b . "<br/>";  // Output: 5
        // ব্যাখ্যা: আগে $a এর পুরাতন মান $b তে যায়, পরে $a ১ বাড়ে






        // ২. Decrement Operator (--)
            // একটি ভেরিয়েবলের মান ১ কমাতে -- ব্যবহার করা হয়।

        // দুই ধরনের Decrement হয়:
            // --$a	Pre-decrement → আগে কমায়, পরে ব্যবহার করে
            // $a--	Post-decrement → আগে ব্যবহার করে, পরে কমায়
        
        // উদাহরণ – Pre-decrement (--$a):
        $a = 5;
        $b = --$a;

        echo $a . "<br/>";  // Output: 4
        echo $b . "<br/>";  // Output: 4
        // ব্যাখ্যা: আগে $a ১ কমে → তারপর সেটি $b তে দেওয়া হয়

        // উদাহরণ – Post-decrement ($a--):
        $a = 5;
        $b = $a--;

        echo $a . "<br/>";  // Output: 4
        echo $b . "<br/>";  // Output: 5
        //  ব্যাখ্যা: আগে $a এর পুরাতন মান $b তে যায়, পরে $a ১ কমে

        //  ব্যবহার কোথায় হয়?
            // Loop (for, while)

            // Counter

            // Pagination

            // Number update

            // Auto ID, serial









    
    
    ?>



    
</body>
</html>