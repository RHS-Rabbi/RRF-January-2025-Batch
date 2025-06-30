<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-2</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        $n1 = 10;
        $n2 = "10";

        // এখানে "==" নাম হল Operator বা তুলনাকারি । এইটা শুধু Value চেক করে। Type চেক করে না। এক কথায় Value মান বা সমান কি না  চেক করে।
        $equal = $n1 == $n2;
        echo $equal . "<br/>";
        // output 1



        // এখানে != হল Not Equal Operator, যেটি দুইটি ভেরিয়েবলের মান (value) সমান নয় কি না, তা যাচাই করে।
        // এটি শুধু মান চেক করে, টাইপ (type) চেক করে না।
        // যদি মান সমান না হয়, তাহলে এটি সত্য (true) রিটার্ন করে,
        // আর যদি মান সমান হয়, তাহলে মিথ্যা (false) রিটার্ন করে।
        $notequal = $n1 != $n2;
        var_dump($notequal);
        echo "<br/>";
        // output bool(false)


        // "===" হল Strict Comparison Operator বা Identity Operator। এটি মান এবং টাইপ—দুটোই চেক করে। যদি দুই ভেরিয়েবলের মান এবং টাইপ এক হয়, তাহলে true, নয়তো false রিটার্ন করে।
        $identical = $n1 === $n2;
        var_dump($identical);
        echo "<br/>";
        // output bool(false)



        // "!==" হল Not Identical Operator। 
        // এটি মান এবং টাইপ—দুটোই চেক করে। 
        // যদি মান বা টাইপ ভিন্ন হয়, তাহলে true রিটার্ন করে। 
        // আর যদি মান ও টাইপ এক হয়, তাহলে false রিটার্ন করে।
        // !== চেক করে মান এবং টাইপ একসাথে সমান নয় কি না। যেকোনো একটা ভিন্ন হলেই true, নয়তো false।
        $notidentical = $n1 !== $n2;
        var_dump($notidentical);
        echo "<br/>";
        // output bool(true)



        // এখানে ">" হল Greater Than Operator।
        // এটি যাচাই করে বাম পাশে থাকা মান ডান পাশের মানের চেয়ে বড় কি না।
        // যদি বড় হয়, তাহলে true রিটার্ন করে, না হলে false।
        $m1 = 11;
        $m2 = "10";
        $greater = $m1 > $m2;
        var_dump($greater);
        echo "<br/>";
        // output bool(true)



        // "<" হল Less Than Operator। এটি চেক করে বামপাশের মান ডানপাশের মানের চেয়ে ছোট কি না।
        $less = $m1 < $m2;
        var_dump($less);
        echo "<br/>";
        // output bool(false)


        // "বড় অথবা সমান" (Greater than or equal to) এটি দুইটা বিষয় চেক করে:বাঁ পাশে থাকা মানটি ডান পাশের মানের চেয়ে বড় কি না, অথবা দুইটা মান সমান কি না যেকোনো একটা সত্য (true) হলে পুরো রেজাল্ট true হয়।
        $greaterOrEqual = $m1 >= $m2;
        var_dump($greaterOrEqual);
        echo "<br/>";
        // output bool(true)



        // "ছোট অথবা সমান" (Less than or equal to)
        // এটি দুইটি বিষয় চেক করে:
        // ১. বাঁ পাশে থাকা মানটি ডান পাশের মানের চেয়ে ছোট কি না
        // ২. অথবা, দুইটি মান সমান কি না
        // যেকোনো একটি সত্য (true) হলে পুরো রেজাল্ট true হয়।
        $lessOrEqual = $m1 <= $m2;
        var_dump($lessOrEqual);
        echo "<br/>";
        // output bool(true)



        // "সমান নয়" (Not Equal) এটি চেক করে — বাঁ পাশে থাকা মানটি ডান পাশের মানের সমান নয় কি না। যদি সমান না হয় → true যদি সমান হয় → false
        $notEqual = $m1 <> $m2;
        var_dump($notEqual);
        echo "<br/>";
        // output bool(true)






    
    
    ?>




    
</body>
</html>