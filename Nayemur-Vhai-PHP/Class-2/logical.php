<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-2</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        // and / && – Logical AND Operator
            // PHP-তে দুইটা AND অপারেটর আছে:
            // && → বেশি ব্যবহার হয় (Recommended)
            // and → কাজ একই, কিন্তু priority আলাদা
        // AND অপারেটরের কাজ হলো:
        // দুইটি শর্ত একসাথে সত্য (true) হলে তবেই পুরো রেজাল্ট true হবে। যদি যেকোনো একটি শর্ত মিথ্যা (false) হয় তাহলে রেজাল্ট false হবে।
        $a = 10;
        $b = 20;

        $result = ($a < 15) && ($b > 15);
        var_dump($result);
        echo "<br/>";
        // output bool(true)

        // or / || – Logical OR Operator
            // PHP-তে দুইটি OR অপারেটর আছে:
            // || → বেশি ব্যবহৃত হয় (Recommended)
            // or → একই কাজ, কিন্তু priority (গুরুত্বের ক্রম) আলাদা

        // OR অপারেটর ব্যবহার করা হয় — দুইটা শর্তের মধ্যে যেকোনো একটি সত্য (true) হলে, পুরো রেজাল্ট true হবে।
        // একটি শর্ত যদি true হয় → পুরো ফলাফল true
        // দুইটা শর্তই false হলে → ফলাফল false
        $a = 10;
        $b = 5;

        $result = ($a > 15) || ($b < 10);

        var_dump($result);
        echo "<br/>";
        // Output: bool(true)

        //  ! – Logical NOT Operator
            //  একে বলে "নট অপারেটর" বা "বিপরীত" অপারেটর।
            // ! অপারেটরের কাজ হলো:
            // যেটা সত্য (true) — সেটা মিথ্যা (false) করে
            // আর যেটা মিথ্যা (false) — সেটা সত্য (true) করে
        $loggedIn = true;
        $result = !$loggedIn;

        var_dump($result);  // Output: bool(false)
    ?>




    
</body>
</html>