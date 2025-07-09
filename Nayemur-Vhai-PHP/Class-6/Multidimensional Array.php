<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-6</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // Multidimensional Array
        $student =[
            ['name' => 'Abdur Rahim', 'age' => '25'],

            ['name' => 'Abdur karim', 'age' => '24'],

            ['name' => 'Abdur kaium', 'age' => '23'],
        ];

        // print_r($student);

        // echo $student[0]['name'];

        $data = ['name' => 'Abdur Rahim', 'age' => '25'];

        $serialized = serialize($data);  

        // print_r($serialized);

        $json_en = json_encode($data);

        $json_de = json_decode($json_en);

        print_r($json_en);

        print_r($json_de);



        $unserialized = unserialize($serialized);

        // print_r($unserialized);



        // serialize();
            // এই ফাংশন অ্যারেটিকে একটি special string format এ রূপান্তর করে,
            //  যেটা PHP আবার পরে বুঝতে পারবে।

        // আউটপুট হবে এমন কিছু:
            // a:2:{s:4:"name";s:12:"Abdur Rahim";s:3:"age";s:2:"25";}

        // এই string এর মানে কী?

            // a:2: ---> এটি একটি array, যার মধ্যে 2টি উপাদান আছে।
            // { ... } ---> এর মধ্যে থাকবে সেই 2টি key-value পেয়ার
            // s:4:"name"; ---> একটি string key যার নাম "name" (দৈর্ঘ্য 4 অক্ষর)
            // s:12:"Abdur Rahim" ---> তার মান হলো "Abdur Rahim" (12 অক্ষর)
            // s:3:"age" --->  আরেকটি key: "age" (3 অক্ষর)
            // s:2:"25" ---> তার মান হলো "25" (2 অক্ষর)

        // serialize() ---> Array/Object → String বানায়
        // unserialize() ---> String → আবার Array বানায়

        // serialize করা ডেটা সাধারণত ডেটাবেস, ফাইল, বা সেশন-এ রাখার জন্য ব্যবহার হয়।

    ?>





    
</body>
</html>