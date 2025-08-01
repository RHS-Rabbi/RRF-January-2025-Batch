<?php
    // class Product: এটি একটি ক্লাস ডিক্লেয়ার করা হয়েছে যার নাম Product।
    class product {
        // var: পুরনো পদ্ধতিতে ভেরিয়েবল ডিফাইন করতে var ব্যবহার করা হয় (বর্তমানে public ব্যবহার করা ভালো)।
        var $name = "Mobile";
        // $name = "Mobile": নাম হিসেবে ডিফল্ট "Mobile" দেওয়া হয়েছে।
        var $price = 2000;
        // $price = 2000: দাম হিসেবে ডিফল্ট 2000।
        var $category;
        var $brand;
        var $stock;
        var $sku;
        // বাকি প্রপার্টিগুলো ($category, $brand, $stock, $sku) এখনো কোনো মান পায়নি, তাই এরা NULL থাকবে।

        function showDetails(){
            echo "Name: $this->name, Price: $this->price";
        }
        // showDetails: এই মেথডটি প্রপার্টি $name ও $price এর মান দেখাবে।
        // $this->name: $this প্রপার্টি থেকে ক্লাসের বর্তমান অবজেক্টের $name প্রপার্টি অ্যাক্সেস করা হচ্ছে।
        // $this->price: একইভাবে $price প্রপার্টি অ্যাক্সেস করা হচ্ছে।
    }

    $product1 = new Product();
    // এখানে Product ক্লাসের একটি অবজেক্ট তৈরি করা হয়েছে যার নাম $product1।
    // এখন $product1 অবজেক্টটি Product ক্লাসের সব প্রপার্টি ও মেথড অ্যাক্সেস করতে পারবে।

    echo $product1->name . "<br>";
    // $product1->name এর মান হলো "Mobile" (কারণ ক্লাসে $name = "Mobile" ছিল)।
    // echo দিয়ে সেটি দেখানো হয়েছে এবং <br> দ্বারা লাইনে ব্রেক দেওয়া হয়েছে।

    // class --> ক্লাস মানে হলো ডিজাইন বা ব্লুপ্রিন্ট
    // object --> ক্লাস থেকে তৈরি করা বাস্তব রূপ (উদাহরণ: $product1)
    // var --> ভেরিয়েবল ডিফাইন করার পুরাতন উপায় (আধুনিকভাবে public ব্যবহার করা ভালো)
    // -> --> অবজেক্ট থেকে প্রপার্টি বা মেথড অ্যাক্সেস করার উপায়

    $product1->showDetails();
    // এখানে $product1 অবজেক্টের showDetails() মেথড কল করা হয়েছে।

?>