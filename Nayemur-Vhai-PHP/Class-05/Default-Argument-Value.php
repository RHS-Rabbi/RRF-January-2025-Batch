<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-5</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // PHP Default Argument Value
        function addWithDefault($n1,$n2 = 5){

            return $n1 + $n2;
        }
        echo addWithDefault(10) . "<br/>";


        // ব্যাখ্যা:
            // function addWithDefault($n1, $n2 = 5)

                // এটা একটি function definition যেখানে দুইটা প্যারামিটার আছে:

                // $n1 যেটা required (মানে অবশ্যই দিতে হবে)

                // $n2 = 5 যেটা default value সহ একটি optional প্যারামিটার

                //  যদি $n2 এর মান না দাও, তাহলে এটা default মান হিসেবে 5 নিয়ে নিবে।


            // echo addWithDefault(10);

                // তুমি এখানে শুধু $n1 = 10 পাঠিয়েছো, কিন্তু $n2 পাঠাওনি।

                //  যেহেতু $n2-এর default value 5 সেট করা আছে, তাই PHP নিজে থেকেই $n2 = 5 ধরে নিবে।

            // ফলে কাজ হবে এমন:

                // return 10 + 5; // মানে 15

            // গুরুত্বপূর্ণ বিষয়:

                // ডিফল্ট প্যারামিটার সব সময় শেষে দিতে হয়।

                // এটা ভুল ❌
                    // function addWithDefault($n1 = 5, $n2)

                // এটা ঠিক ✅
                    // function addWithDefault($n1, $n2 = 5) 
    ?>




    
</body>
</html>