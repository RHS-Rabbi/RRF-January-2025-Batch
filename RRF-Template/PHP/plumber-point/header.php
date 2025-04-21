<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumber-Point</title>
    <link rel="stylesheet" href="./assets/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>
<body class="font-robo">


    <?php
        function is_active($check){
            $requested_uri = $_SERVER['REQUEST_URI']

            $search = strpos($requested_uri, $check);


            if($search !== false){
                return 'active';
            }
        }

        $menus =[
            'index' => 'Home',
            'about' => 'About us',
            'services' => 'Services',
            'project' => 'Project',
            'blog' => 'Blogs',
            'contact' => 'Contact'
        ]
    
    ?>

    <!-- Header Area -->
    <header class="py-[9px] bg-white shadow-[0_4px_24px_0_rgba(0,0,0,0.05)]">
        <div class="container">
            <div class="row items-center">
                <div class="w-3/12 pd">
                    <div class="logo">
                        <a href="index.html">
                            <img class="w-[158px] h-[38px] object-cover" src="./assets/image/logo.png" alt="logo image">
                        </a>
                    </div>
                </div>
                <div class="w-7/12 pd">
                    <nav class="mainmenu">
                        <ul class="flex justify-end items-center gap-[30px]">
                            <?php foreach($menus as $key => $value): ?>
                                <li><a class="<?php echo is_active($key);?>" href="<?php echo $key; ?>.html"><?php echo $value; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
                <div class="w-2/12 pd">
                    <div class="text-end">
                        <a class="header-btn" href="#">Request a call Back</a>
                    </div>
                </div>
            </div>
        </div>
    </header>