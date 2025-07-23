<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-5</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // Anonymous Function বা Closure

        $greet = function (){
            echo "Hello, Future Developers!";
        };

        $greet();

        
        // $greet = function () {
        //     echo "Hello, Future Developers!";
        // };

        // এখানে function () { ... } অংশটি একটি anonymous function।
        // মানে এই ফাংশনের কোনো নাম নেই, কিন্তু তুমি এটা $greet নামের একটি ভ্যারিয়েবলে রেখে দিচ্ছো।
        //  অর্থাৎ:
        // তুমি function টিকে একটা ভ্যারিয়েবলের মান হিসেবে ব্যবহার করছো।

        // $greet();
        // এখানে $greet() লেখা মানে হচ্ছে — তুমি ফাংশনটি কল করছো।
        //  ফাংশনটি echo করছে: "Hello, Future Developers!"


        $add =fn($n1,$n2) => $n1 + $n2;

        echo $add(10,5);
    ?>





    
</body>
</html>