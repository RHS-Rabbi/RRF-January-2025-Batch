<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-9</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        // str word count
        $sentence = "PHP is Awesome";

        echo str_word_count($sentence) . "\n";

        /* str_word_count() হল একটি PHP ফাংশন,
        যা কোনো স্ট্রিংয়ের মধ্যে মোট কতটি শব্দ (word)
        আছে তা গুনে রিটার্ন করে। */
        // str_word_count() শুধু word character (A-Z, a-z) ধরবে।
        // কোনো সংখ্যা বা চিহ্ন (symbol) আলাদাভাবে ধরবে না যদি না তুমি custom $characters ব্যবহার করো।

    ?>
</body>
</html>