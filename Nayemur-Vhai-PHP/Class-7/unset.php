<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-7</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // Unset 
        $person = [
            'name' => 'Mohammad Rabbi Hossain',
            'City' => 'Gazipur',
            'phone' => '01900000000',
        ];

        unset($person['name']);  //unset() ব্যবহার করে অ্যারের যেকোনো key ও তার মান সহজেই মুছে ফেলা যায়।

        print_r($person);



    ?>





    
</body>
</html>