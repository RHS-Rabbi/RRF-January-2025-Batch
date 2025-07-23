<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-1</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
        echo "Hi Future Developers!" . "<br/>";

        echo "Hi Bangladesh" . "<br/>";

        // Variable
        $name = "Mohammad Rabbi Hossain" . "<br/>";

        echo $name;

        // Best Practice

        // $my_name    Snakecase (variable/function)

        // $my_Name    Camelcase (Method)

        // $My_Name    Titlecase/Pascalcase (Class)

        $name = "Mohammad Rabbi" . "<br/>";

        echo $name;

        // আমরা যেগুলো ব্যাবহার করতে পারব না সেগুলো হল
        // $123
        // $if



        // Constant
        // Constant বড় হাতে লিখতে হয়.
        define("CONSTANT_NAME", 23 );

        echo CONSTANT_NAME . "<br/>";

        define("PI", 3.1416);

        echo PI . "<br/>";

        /*
        Data Types

            Scalar Types.

                Integar.
                
                    $age = 25;

                Float/Double.

                    $price = 40.43;


                String.

                    $my_name = "Mohammad Rabbi Hossain";


                Boolean.
                    বুলিয়ান সত্য ও মিথ্যা যাচাই করে 

                    $is_user = false;



            Compound Types.

                Array.

                    $fruits =["Mango", "Banana", 25];

                    echo $fruits[0] . "<br/>";



                Object.

                    $user1 = new user();

                    class User {
                        public $name = "John";
                    }
                    $user1 = new User();


            Special Types.

                Null.

                    $variable = NULL;

                Resource

                    $file = fopen("text.txt", "r");

        */

        $age = 25;

        $price = 40.43;

        $my_name = "Mohammad Rabbi Hossain";

        // যদি এখানে false লিখি তাহলে ইউজার না 
        $is_user = false;

        // যদি এখানে true লিখি তাহলে ইউজার
        $is_user = true;

        $fruits =["Mango", "Banana", 25];

        echo $fruits[0] . "<br/>";

        // $user1 = new user();

        // $variable = NULL;

        // $file = fopen("text.txt", "r");

        echo "is_int($price)" . "<br/>";



        // Arithmetic Operators

        $a = 15;

        $b = 4;

        $addition = $a + $b;

        $subtraction = $a - $b;

        $Multiplication = $a * $b;

        $division = $a / $b;

        $modulus = $a % $b;

        $exponentiation = $a ** $b;

        echo $addition . "<br/>";

        echo $subtraction . "<br/>";

        echo $Multiplication . "<br/>";

        echo $division . "<br/>";

        echo $modulus . "<br/>";

        echo $exponentiation . "<br/>";



        // Assignment Operators

        // $a = $a + 2;

        // echo "$a <br/>";

        $a = $a += 2;   //$a = $a + 2;  

        echo "$a <br/>"; 

        $a = $a -= 2;   //$a = $a - 2;

        echo "$a <br/>";

        $a = $a *= 2;   //$a = $a * 2; 

        echo "$a <br/>";

        $a = $a /= 2;   //$a = $a / 2;
        
        echo "$a <br/>";

        $a = $a %= 2;   //$a = $a % 2;  
        
        echo "$a <br/>";








        

    
    
    ?>




    
</body>
</html>