<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-7</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
    
        // Array Diff
        $arr1 = ['Mango', 'Litchi'];
        $arr2 = ['Litchi', 'Pineapple'];

        $difference = array_diff($arr1, $arr2);
            //  array_diff($arr1, $arr2) কী করে?
            // এটি $arr1 থেকে এমন মানগুলো নেয় — যেগুলো $arr2 তে নেই।
            // এখানে 'Mango' → $arr1 এ আছে, কিন্তু $arr2 তে নেই
            // 'Litchi' → দুই অ্যারেতেই আছে, তাই বাদ যাবে

        print_r($difference);

        // array_diff($a, $b) ----> $a থেকে $b-তে না থাকা মানগুলো বের করে

    ?>





    
</body>
</html>