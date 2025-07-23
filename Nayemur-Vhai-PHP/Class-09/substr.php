<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-9</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        // substr
        $extraSpace = " Laravel is very wonderful Framework ";

        echo substr($extraSpace, 0,7);
        // substr() হলো একটি PHP ফাংশন যা একটি স্ট্রিং-এর নির্দিষ্ট 
        // অংশ (substring) কেটে নেয় — অর্থাৎ, 
        // স্ট্রিংয়ের ভিতর থেকে নির্দিষ্ট পজিশনের
        //  অক্ষরগুলো নিয়ে আসে।
        // substr($extraSpace, 0, 7) মানে:
            // স্ট্রিং-এর index 0 (যেটা একটি space) থেকে শুরু করে
            // মোট 7 অক্ষর কেটে আনবে
    ?>
    
</body>
</html>