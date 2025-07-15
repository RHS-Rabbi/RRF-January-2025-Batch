<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-9</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        // strcmp
        $str1 = "apple";
        $str2 = "Apple";

        echo strcmp($str1, $str2) . "<br/>";  // strcmp() ---> স্ট্রিং তুলনা করে (case-sensitive)

        // strcmp() হল একটি PHP ফাংশন,
        // যা দুইটি স্ট্রিং তুলনা (compare) করে
        // এবং তাদের মধ্যে পার্থক্য বোঝাতে একটি সংখ্যা রিটার্ন করে।

        echo strcasecmp($str1, $str2) . "<br/>";
        // strcasecmp() হল একটি PHP ফাংশন যা দুইটি স্ট্রিং
        // তুলনা করে ঠিক strcmp() এর মতো,
        // কিন্তু এটি case-insensitive।
        // অর্থাৎ, বড় হাতের (A) এবং ছোট হাতের (a)
        //  অক্ষরের মধ্যে পার্থক্য করে না।

        $password = "secret";

        echo md5($password) . "<br/>";
        echo sha1($password) . "<br/>";

        
    ?>
    
</body>
</html>