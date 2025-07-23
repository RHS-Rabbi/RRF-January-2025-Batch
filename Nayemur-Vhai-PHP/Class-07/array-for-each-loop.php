<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-7</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php

        // PHP foreach loop Array
        $fruits = ['Mango', 'Jackfruit', 'Litchi'];

        foreach ($fruits as $fruit){

            echo $fruit . "<br/>";
        }

        // Associative Array
        $person = [
            'name' => 'Mohammad Rabbi Hossain',
            'City' => 'Gazipur',
            'phone' => '01900000000',
        ];
            // এটি একটি associative array, যেখানে key-value পেয়ার রয়েছে।
            // যেমন: 'name' হলো key, আর 'Mohammad Rabbi Hossain' হলো value।

        foreach ($person as $key => $value){
            echo "$key : $value" . "<br/>";
        }
            // foreach loop দিয়ে অ্যারেটার প্রতিটি key ও value বের করা হচ্ছে।
            // $key ধরে key গুলো পাওয়া যাচ্ছে (যেমন: name, City, phone)
            // $value ধরে value গুলো পাওয়া যাচ্ছে (যেমন: Mohammad Rabbi Hossain, Gazipur, 01900000000)
            // echo দিয়ে "key : value" ফর্ম্যাটে প্রতি লাইনে দেখানো হচ্ছে।

        print_r($person);


        $person = [
            'name' => 'Mohammad Rabbi Hossain',
            'City' => 'Gazipur',
            'phone' => '01900000000',
        ];

        unset($person['name']);  //unset() ব্যবহার করে অ্যারের যেকোনো key ও তার মান সহজেই মুছে ফেলা যায়।

        print_r($person);

    ?>





    
</body>
</html>