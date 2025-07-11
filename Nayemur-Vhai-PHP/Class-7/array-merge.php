<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-7</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
    
        // Array Merge
        $arr1 = ['Mango', 'Jackfruit'];
        $arr2 = ['Litchi', 'Pineapple'];
            //  এখানে দুটো indexed array তৈরি করা হয়েছে।

        $merged = array_merge($arr1 , $arr2);
            // array_merge() ফাংশন দুইটি বা তার বেশি অ্যারে একত্রে যোগ (combine) করে নতুন একটি অ্যারে তৈরি
            //  Indexed array গুলোর index গুলো নতুনভাবে সাজিয়ে নেয় (0 থেকে শুরু করে):

        print_r($merged);


    ?>





    
</body>
</html>