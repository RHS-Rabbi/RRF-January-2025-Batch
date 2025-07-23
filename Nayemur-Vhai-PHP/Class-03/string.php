<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-3</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        // PHP string হচ্ছে টেক্সট বা অক্ষরের সমষ্টি, যেটা আপনি উদ্ধৃতি চিহ্নের (" " বা ' ') ভিতরে রাখেন।
            //  সহজভাবে বুঝি:
                // PHP তে যেকোনো লেখা বা অক্ষরকে স্টোর করতে চাইলে আমরা সেটা string হিসেবে সংরক্ষণ করি।
        $firstName = "Mohammad Rabbi";
        // এখানে "Mohammad Rabbi" হলো একটা string। এটা $firstName নামের ভ্যারিয়েবলে রাখা হয়েছে।

        $lastName = "Hossain";
        // এখানে "Hossain" হলো একটা string। এটা $lastName নামের ভ্যারিয়েবলে রাখা হয়েছে।

        $fullName = $firstName . $lastName;
        echo $fullName . "<br/>";

        $product = "Laptop";
        $price = "85000";

        echo "Product Name:" . $product . "<br/>" . "Product Price:" . $price . "BDT";
        
    ?>




    
</body>
</html>