<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRF January 2025 Batch Class-18</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <?php 
        function is_active($check){
            $requested_uri = $_SERVER['REQUEST_URI'];
            $search = strpos($requested_uri, $check);

            if($search !== false){
                return 'active';

            }
        }
        $menus = [
            'index' => 'Home',
            'about' => 'About',
            'gallery' => 'Gallery',
            'support' => 'Support',
            'contact' => 'Contact us'

        ];
    
    ?>
    <div class="container">
        <div class="header">
            <!-- <h1>This is Header</h1> -->
        </div>
        <div class="mainmenu">
            <ul>
                <?php foreach($menus as $key => $value) : ?>
                    <li><a class="<?php echo is_active($key); ?>" href="<?php echo $key; ?>.php"><?php echo $value; ?></a></li>
                <?php endforeach; ?>

            </ul>
        </div>
        <div class="main-content">