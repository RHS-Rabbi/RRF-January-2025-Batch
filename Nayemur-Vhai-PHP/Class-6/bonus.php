<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-6</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

       $students = [
            ['name' => 'Rafiq', 'age' => 20],
            ['name' => 'Shafiq', 'age' => 21],
        ];

        $serialized = serialize($students);

        print_r($serialized);

        $unserialized = unserialize($serialized);

        print_r($unserialized);

    ?>





    
</body>
</html>