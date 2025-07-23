<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-6</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        // Associative Array
        $student =[

            'name' => 'Abdur Rahim',
            'age'  => 25,
            'department' => 'Mathematics'
        ];

        // print_r($student);

        // echo $student['name'] . "<br/>";


        $csv = "Mango,Jackfruit,Litchi";

        $fruits = explode(",", $csv);

        $fruitsString = implode("-", $fruits);

        print_r($fruits);
        print_r($fruitsString);

        // $csv = "Mango,Jackfruit,Litchi";
            // এখানে একটা কমা-সেপারেটেড স্ট্রিং আছে।

        // explode(",", $csv);
            // explode() ফাংশন স্ট্রিংকে অ্যারেতে ভেঙে ফেলে।
            //  এখানে , দিয়ে ভেঙে ফেলবে: $fruits = ["Mango", "Jackfruit", "Litchi"];
        
        // implode("-", $fruits);
            // implode() ফাংশন অ্যারের সব উপাদানকে আবার একটা স্ট্রিং-এ জোড়া দেয়,
            //  কিন্তু এবার - ব্যবহার করে। Mango-Jackfruit-Litchi
        
        // explode() ---> স্ট্রিং → অ্যারে == ["Mango", "Jackfruit", "Litchi"]

        // implode() ---> অ্যারে → স্ট্রিং (সেপারেটর সহ) == "Mango-Jackfruit-Litchi"

    ?>





    
</body>
</html>