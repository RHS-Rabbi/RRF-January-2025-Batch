<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-3</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        // PHP Control Flow (ব্যাখ্যাসহ নোট)
            // Control Flow হচ্ছে প্রোগ্রামের ভেতরে কোড কোন পথে বা কোন শর্তে চলবে সেটা নিয়ন্ত্রণ করা।
            // কোন কোড কখন চলবে এবং কতবার চলবে তা নিয়ন্ত্রণ করাই Control Flow।”
    
        // if(condition){
        //     condition যদি সত্য না হয়। তাহলে কিছুই আউটপুট হবে না।
        // }
        $age = 25;

        if ($age >= 18) {
            echo "You are an adult." . "<br/>";
        }
        // ">=" (Greater than or equal) আমরা জানি এই ভেরিয়েবল দুইটা বিষয় চেক করে। 
        // বা পাশের মান বড় কি না অথবা মান সমান কি না যেকোনো একটা সত্য হলেই আউটপুট সত্য হয়।



        // <= (Less than or equal to) এই অপারেটরটি দুইটি বিষয় চেক করে:
        // বাম পাশে থাকা ভ্যালু ডান পাশের চেয়ে ছোট কি না অথবা দুইটা ভ্যালু সমান কি না
        // যদি যেকোনো একটি শর্ত সত্য হয়, তাহলে পুরো শর্তটি সত্য (true) হয় এবং if ব্লকের ভিতরের কোড চালু হয়।

        $age = 17;
        if ($age <= 18) {
            echo "You are not an adult." . "<br/>";
        }


        // if...else Statement

        $age = 15;

        if ($age >= 18) {
            echo "Adult";
        } else {
            echo "Minor";
        }
        //  ব্যাখ্যা: যদি শর্ত মিথ্যা হয়, else ব্লক চলে।


        // ternary version
        echo ($age >= 18) ? "Adult" : "Not Adult";




    
    ?>




    
</body>
</html>