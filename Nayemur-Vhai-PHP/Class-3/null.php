<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-3</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // PHP তে null মানে কী?
            // null হচ্ছে এমন একটি special type, যা বোঝায় — "কোনো ভ্যালু নেই"। অর্থাৎ, একটি ভেরিয়েবলের মধ্যে যদি কোনো মান না থাকে, সেটি null হতে পারে।

        $customer = null;

        $result = $customer ?? 'Default Value';
        echo $result;


        
    ?>




    
</body>
</html>