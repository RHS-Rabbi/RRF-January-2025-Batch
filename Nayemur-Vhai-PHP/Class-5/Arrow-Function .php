<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-5</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // Arrow Function
        $add =fn($n1,$n2) => $n1 + $n2;

        echo $add(10,5);

        echo "<br/>";

        //  ব্যাখ্যা:

            //  ১. fn($n1, $n2) => $n1 + $n2
                // এটা একটি arrow function (লঘু সংস্করণ বা ছোট আকারের function)।
                // এটি anonymous function এরই শর্ট ভার্সন।
                //  এখানে:
                    // fn = function keyword
                    // ($n1, $n2) = প্যারামিটার
                    // => $n1 + $n2 = যেটা return করবে

                // মানে:
                    // function ($n1, $n2) {
                    //     return $n1 + $n2;
                    // }

                // এই কোডের শর্ট ফর্ম হচ্ছে:
                    // fn($n1, $n2) => $n1 + $n2
                
                //  ২. $add = fn($n1, $n2) => $n1 + $n2;
                    // এই লাইনটা একটি arrow function কে $add ভ্যারিয়েবলে সংরক্ষণ করছে।
                    //  এখন $add হল একটি function।

                // ৩. echo $add(10, 5);
                    // এখানে $add ফাংশন কল করা হয়েছে, যেখানে $n1 = 10 এবং $n2 = 5
                    // কাজ হবে: 10 + 5 = 15
                    // echo করে আউটপুট দেখানো হবে

                // আউটপুট:
                    // 15
                
                // Arrow Function-এর কিছু বৈশিষ্ট্য:
                    // fn() ----> নতুন টাইপ ফাংশন, ছোট এবং ক্লিন
                    // শুধুমাত্র এক্সপ্রেশন রিটার্ন করে ---> return লিখতে হয় না
                    // মাল্টিপল লাইন সাপোর্ট করে না ---> শুধু এক লাইনের কাজের জন্য

                //  Traditional:

                    // $add = function($n1, $n2) {
                    //     return $n1 + $n2;
                    // };

                // Arrow:
                    // $add = fn($n1, $n2) => $n1 + $n2;
    ?>





    
</body>
</html>