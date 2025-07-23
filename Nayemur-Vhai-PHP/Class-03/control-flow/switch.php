<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-3</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box;  max-width: 1190px; margin: 0 auto; font-size: 32px;">
    <?php
    
        $day = "Friday";

        switch ($day) {
            case "Friday":
                echo "Jummah";
                break;
            case "Saturday":
                echo "Weekend";
                break;
            default:
                echo "Regular day";
        }
        //  ব্যাখ্যা: একাধিক case এর মধ্যে মিল খুঁজে, সঠিক case চালায়। break দিয়ে থামানো হয়।




    
    ?>




    
</body>
</html>