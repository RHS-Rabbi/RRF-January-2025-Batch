<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-3</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        // for each Loop

        $names = ["All", "Sami", "Tarek"];

        foreach ($names as $name){
            echo $name . "<br/>";
        }
        // ব্যাখ্যা: প্রতিটি মান ($name) একবার করে ধরে প্রিন্ট করে। Array এর জন্য সবচেয়ে সহজ।

        // Jump Statements (লাফ দেয়া বা কোড থামানো)


        // break
        for ($i = 1; $i <= 5; $i++) {

            if ($i == 3) {
                break;
            }
            echo $i . "<br/>";
        
        }

        // continue
        for ($i = 1; $i <= 5; $i++) {
            if ($i == 3) {
                continue;
            }
            echo $i . "<br/>";
        }


    
        

    
    ?>




    
</body>
</html>