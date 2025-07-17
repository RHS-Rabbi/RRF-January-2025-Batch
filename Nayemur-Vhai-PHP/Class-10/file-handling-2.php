<?php

    // file-handling.php

    file_put_contents("test.text", "প্রযুক্তি প্লাস - ");
    file_put_contents("test.text", "যেখানে প্রযুক্তি গল্প হয় বাংলা ভাষায়", FILE_APPEND);
        // file_put_contents() ফাংশন দিয়ে ফাইল তৈরি করা হয়েছে এবং তাতে লেখা হয়েছে "Hello World!"।
        // যদি ফাইলটি আগে থেকে থাকে, তাহলে তার পুরোনো কনটেন্ট মুছে নতুন কনটেন্ট লেখা হবে।
    
    echo file_get_contents("test.text") . "<br/>";
        // file_get_contents() ফাংশন দিয়ে ফাইল থেকে কনটেন্ট পড়া হয়েছে।
        // এখানে "test.text" ফাইলের কনটেন্ট প্রিন্ট করা হবে, যা হবে "Hello World!"।

    file_put_contents("newfolder/rabbi.txt", "Rabbi");
        // file_put_contents() ফাংশন দিয়ে "newfolder" ফোল্ডারের মধ্যে
        // "rabbi.txt" নামের একটি ফাইল তৈরি করা হয়েছে এবং তাতে "Rabbi" লেখা হয়েছে।
    echo file_get_contents("newfolder/rabbi.txt") . "<br/>";
        // file_get_contents() ফাংশন দিয়ে "newfolder/rabbi.txt" ফাইল থেকে কনটেন্ট পড়া হয়েছে।
        // এখানে "Rabbi" প্রিন্ট হবে।


    // With variable

    $fileName = "test.text";
    $fileContent = "প্রযুক্তি প্লাস -";
    $fileContent2 = "যেখানে প্রযুক্তি গল্প হয় বাংলা ভাষায়";
    file_put_contents($fileName, $fileContent);
        // এখানে $fileName এবং $fileContent ভেরিয়েবল ব্যবহার করে ফাইল তৈরি করা হয়েছে।
        // "test.text" ফাইলের মধ্যে "প্রযুক্তি প্লাস -" লেখা হয়েছে।
    file_put_contents($fileName, $fileContent2, FILE_APPEND);

    echo file_get_contents("$fileName") . "<br/>";
        // এখানে $fileName ভেরিয়েবল ব্যবহার করে ফাইল থেকে কনটেন্ট পড়া হয়েছে।
        // "test.text" ফাইলের কনটেন্ট প্রিন্ট করা হবে, যা হবে "প্রযুক্তি প্লাস - যেখানে প্রযুক্তি গল্প হয় বাংলা ভাষায়"।

    $myfolder = "newfolder";

    if (!is_dir($myfolder)) {
        mkdir($myfolder);
        // is_dir() ফাংশন দিয়ে চেক করা হয়েছে যে "newfolder" ফোল্ডারটি আছে কিনা।
        // যদি না থাকে, তাহলে mkdir() ফাংশন দিয়ে নতুন ফোল্ডার তৈরি করা হয়েছে।
    } else {
        echo "Folder already exists.<br/>";
        // যদি ফোল্ডারটি আগে থেকেই থাকে, তাহলে একটি মেসেজ প্রিন্ট করা হয়েছে।
    }

    file_exists();
        // file_exists() ফাংশন দিয়ে চেক করা হয় যে ফাইলটি আছে কিনা।
        // যদি ফাইলটি থাকে, তাহলে true রিটার্ন করে, নাহলে false রিটার্ন করে।
    is_readable();
        // is_readable() ফাংশন দিয়ে চেক করা হয় যে ফাইলটি পড়ার উপযোগী কিনা।
        // যদি ফাইলটি পড়া যায়, তাহলে true রিটার্ন করে, নাহলে false রিটার্ন করে।
    is_writable();
        // is_writable() ফাংশন দিয়ে চেক করা হয় যে ফাইলটি লেখার উপযোগী কিনা।
        // যদি ফাইলটি লেখা যায়, তাহলে true রিটার্ন করে, নাহলে false রিটার্ন করে।
    is_executable();
        // is_executable() ফাংশন দিয়ে চেক করা হয় যে ফাইলটি এক্সিকিউট করা যায় কিনা।
        // যদি ফাইলটি এক্সিকিউট করা যায়, তাহলে true রিটার্ন করে, নাহলে false রিটার্ন করে।
    
    echo __DIR__;
        // __DIR__ কনস্ট্যান্ট দিয়ে বর্তমান ডিরেক্টরির পাথ প্রিন্ট করা হয়।
        // এটি ফাইলের অবস্থান দেখায় যেখানে কোডটি রান হচ্ছে।
?>