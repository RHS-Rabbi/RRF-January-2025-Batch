<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-3</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        // PHP Spaceship Operator হচ্ছে একটি তুলনা (comparison) অপারেটর, যেটা PHP 7 থেকে এসেছে। চিহ্নটা এমন:
            // <=>
            // এর নাম "Spaceship Operator" কারণ দেখতে এটা একটা স্পেসশিপের মতো 

        $spaceShip1 = 5 <=> 10; 
        echo $spaceShip1 . "<br/>"; // Output: -1
        // বাম পাশে ছোট রিটার্ন ভ্যালু : -1 --- Left value is smaller

        $spaceShip2 = 10 <=> 10; 
        echo $spaceShip2 . "<br/>"; // Output: 0
        // সমান রিটার্ন ভ্যালু : 0 --- Both are equal

        $spaceShip3 = 15 <=> 10; 
        echo $spaceShip3 . "<br/>"; // Output: 1
        // ডান পাশে ছোট রিটার্ন ভ্যালু : 1 --- Right value is smaller


        
    ?>




    
</body>
</html>