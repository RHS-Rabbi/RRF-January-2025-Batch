<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-7</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // Array Filter
        $data = ['Mango', '', null];

        $filtered = array_filter($data);  //array_filter() ডিফল্টভাবে ফাঁকা/false-equivalent মান গুলো সরিয়ে দেয়।

        print_r($filtered);

        echo "<br/>";

        $user = ['name' => 'Rabbi', 'email' => 'user@gmail.com'];

        extract($user); // extract() ফাংশন এই অ্যারে থেকে key অনুযায়ী ভেরিয়েবল তৈরি করে

        echo $name . "<br/>";
    ?>





    
</body>
</html>