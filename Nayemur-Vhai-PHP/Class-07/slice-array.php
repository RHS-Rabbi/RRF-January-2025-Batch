<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-7</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
    
        // Slice Array

        $numbers = range(1, 15);
            // range(1, 15) মানে:
            //  একটি অ্যারে তৈরি করবে যেটাতে থাকবে 1 থেকে 15 পর্যন্ত সব সংখ্যা।

        $sliced = array_slice($numbers, 5, 5);
            // array_slice() মানে:
            //  অ্যারের মধ্যে থেকে কোন index থেকে শুরু করে কতগুলো উপাদান (element) নিতে চাও — সেটা নির্ধারণ করো।
            // ----- array_slice(array, offset, length) -----
            // offset = 5 → মানে ৬ষ্ঠ position থেকে শুরু (কারণ index 0 থেকে গণনা শুরু হয়)
            // length = 5 → মোট ৫টি উপাদান নেবে

        print_r($sliced);

        $numbers = range(2, 15, 2);
            // range(start, end, step)
                // start → কোন সংখ্যায় শুরু করবে
                // end → কোথায় শেষ করবে
                // step → কত করে বাড়বে প্রতিটি ধাপে

        print_r($numbers);

    ?>





    
</body>
</html>