<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-7</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
    

        // In Array
        $fruits = ['Mango', 'Jackfruit'];
            //  এটা একটি indexed array

        if(in_array('Mango', $fruits)){
                // in_array('Mango', $fruits) → চেক করে 'Mango' এই অ্যারেতে আছে কিনা
            echo 'Found';
                // যদি থাকে → true রিটার্ন করে, তাই echo 'Found';
        } else {
            echo 'Not Found!';
                // না থাকলে → false, তাই echo 'Not Found!';
        }

        // in_array(value, array) ----> অ্যারেতে নির্দিষ্ট মান খুঁজে


    ?>





    
</body>
</html>