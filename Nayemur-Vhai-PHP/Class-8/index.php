<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-8</title>
    <style>
        *{
            padding: 0;
            margin: 0 ;
            box-sizing: border-box;
        }
        .container{
            max-width: 1170px;
            margin: 0 auto;
        }
        table {
            border-collapse: collapse;
        }
        td {
            padding: 12px;
            border: 2px solid #ddd;
            text-align: center;
        }
        body{
            margin-left: 100px;
            font-size:50px;
        }
    </style>
</head>
<body>
   <div class="container">
         <table>
            <?php for ($i = 1; $i <= 8; $i++) : ?> 
            <tr>
                <?php for($j = 1; $j <= 15; $j++ ) : ?>
                    <td><?php echo $i * $j; ?></td>
                <?php endfor;?>
            </tr>
            <?php endfor;?>
        </table>

        <?php $fruits = ["Apple", "Banana", "Orange", "Litchi", 20, "Jackfruit"]; ?>
        <ul>
            <?php foreach ($fruits as $fruit) : ?>
                <li> <?php echo $fruit; ?> </li>
            <?php endforeach ?>
        </ul>

   </div>
    
</body>
</html>