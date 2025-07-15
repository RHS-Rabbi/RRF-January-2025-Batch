<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-9</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        $name = "Mohammad Rabbi Hossain";

        echo "My Name is \n \t $name" . "<br/>";
        echo "I'm $name" . "<br/>";
        echo "<br/>";


        //  PHP Heredoc Syntax
            // Heredoc হলো PHP-র একটি সিনট্যাক্স, যা দিয়ে একাধিক লাইনের স্ট্রিং (multiline string) সহজে লেখা যায়।
        $text = <<<EOT
        This is
            multiline
                String
        EOT;
        //যে নামটি আপনি <<< এর পরে দিবেন, সেই একই নাম একদম শেষে ব্যবহার করতে হবে।

        echo $text;

    ?>





    
</body>
</html>