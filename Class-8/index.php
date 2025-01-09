<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP For Absolute Beginners in Bangla</title>
    <style>
        .container {
            max-width: 1200px;
            margin:  0 auto;
        }

        * {
            padding: 0;
            margin: 0;
            background: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
        // Basic Syntax
        echo 'Hello World <br>';

        // Variable is "$"
        $food = "Pizza";
        $Food = "Burger";
        echo 'I Love to eat ' . $Food . '<br>' ;

        // Another Vriable Example
        $age = "20";
        echo 'My age is '. $age . '<br>';

        $x = 10;
        $y = 20;
        echo $x + $y . '<br>';

        // echo and print statement
        $x = 20;
        $y = 20;
        echo $x + $y . '<br>';
        echo ($x + $y) . '<br>';
        print $x + $y . '<br>';
        print ($x + $y) . '<br>';

        $food = "Pizza";
        print $food . '<br>' ;
        $foods = print('Drinks') .'<br>';
        $foods = print('Water');
        echo $foods;
        echo '<br>';


        // PHP Data Types
        $name = 'Ali' ;
        $name1 = "It's me" ;
        $age = 30;
        $age1 = 30.2;
        $religion = true;
        $people = array('Apple', 'Banana', 'Plum');
        $null = null ;

        var_dump($people [0]);

        echo '<br>';

        // PHP Object
        
        class phone {
            // var $model;
            function phoneModel($number){
                // global $model;
                $model = $number;
                echo "This is $model <br>";
            }
        }
        $apple = new Phone;
        $apple-> phoneModel ('i phone 13');
        $samsung = new Phone;
        $samsung-> phoneModel ('samsung galaxy dous 2');
        $vivo = new Phone;
        $vivo-> phoneModel (' Upcoming');


        // PHP Strings
            // lenth count koyta ase 'strlen'
        echo strlen('I Love to eat Pizza') . '<br>';
            // Reverse olta dike zay 'strrev'
        echo strrev('I Love to eat Pizza') . '<br>';
            // Position Check kore 'strpost'
        echo strpos('I Love to eat Pizza', 'eat') . '<br>';

        $title = strpos('I Love to eat Pizza', 'eat');

        var_dump($title);
        echo '<br>';
           // Replace for Use 
        echo str_replace('Pizza', 'Burger' , 'I Love to eat Pizza' . '<br>'); 

        // PHP Number
        $x = 5;
        $y = 10;
        echo '<br>';

        // PHP Math
        echo (pi());
        echo '<br>';
        // minimum number
        echo (min(0, 5, 10, 15, 20, 25, 30, 40, 50, 60, 70, 80, 90, 100) ."<br>");

        // Maximum Number
        echo (max(0, 5, 10, 15, 20, 25, 30, 40, 50, 60, 70, 80, 90, 100 )."<br>");

        // Absolute Number
        echo (abs(-10)."<br>");

        // square root  example: 5x5=25.
        echo(sqrt(25)."<br>");

        // Round 
        echo(round(pi()) ."<br>");

        // Random Number
        echo (rand(0, 50) . "<br>");

        // Contants PHP
            // Basic
        $x = 5;
        $x = 15;
        $y = 10;
        echo $x .'<br>';

        define('a', 20);
        define('A', 22);
        define('car',[
        'BMW',
        'Toyota',
        'Mazda'
        ]
        );
        echo (car[1]) . '<br>';
        // var_dump(car);

        function name(){
            echo (car[1]) . '<br>';
            $x = 50;
            echo $x . '<br>';
        }
        name();

        // PHP Operators
        $x = 2;
        $y = 3;

            // Addition (+):
        echo $x + $y  . "<br>";

            // Subtraction (-):
        echo $x - $y  . "<br>";

            // Multiplication (*):
        echo $x * $y  . "<br>";

            // Division (/):
        echo $x / $y  . "<br>";

            // Modulus (%):
        echo $x % $y  . "<br>";

            // Exponentiation (**):
        echo $x ** $y  . "<br>";


        echo "Addition: " . ($x + $y) . "<br>";          // 10 + 3 = 13
        echo "Subtraction: " . ($x - $y) . "<br>";       // 10 - 3 = 7
        echo "Multiplication: " . ($x * $y) . "<br>";    // 10 * 3 = 30
        echo "Division: " . ($x / $y) . "<br>";          // 10 / 3 ≈ 3.33
        echo "Modulus: " . ($x % $y) . "<br>";           // 10 % 3 = 1
        echo "Exponentiation: " . ($x ** $y) . "<br>";   // 10 ** 3 = 1000


        // Assignment Operators




        

    
    ?>
    </div>
    
</body>
</html>