<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-3</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        // While Loop
            // কতবার ঘুরবে সেটা জানা না  থাকলে।
        $correctPassword = "1234";
        $userInput ="";
        while ( $userInput !== $correctPassword){
            $userInput = readline("সঠিক পাসওয়ার্ড দিন।");
        }


        // for Loop
            // কতবার ঘুরবে সেটা জানা  থাকলে।

        for ($i = 1; $i <= 10; $i++){
            echo "9 x $i =" . (9 * $i) . "<br/>";
        }



        
    ?>




    
</body>
</html>