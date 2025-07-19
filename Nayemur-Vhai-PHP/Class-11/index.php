<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/output.css">
</head>
<body class="font-Poppins">
    <main>
        <!-- Header Section -->
        <?php include_once "header.php";?>

        <!-- Hero Section -->
        <?php include_once "sections/hero.php"; ?>

        <!-- Service Section -->
        <?php include_once "sections/service.php"; ?>

        <!-- About Section -->
        <?php include_once "sections/user-area.php"; ?>

        <!-- Intro Area Section -->
        <?php include_once "sections/intro-area.php"; ?>

        <!-- Hero Two Section -->
        <?php include_once "sections/herotwo.php"; ?>
    
        <!-- Blog Area -->
        <?php include_once "sections/blog-area.php"; ?>
        
        <!-- Footer Area -->
       <?php include 'footer.php'; ?>
    </main>

    <!-- Jquery 3.7.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Slick Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./main.js"></script>
    
</body>
</html>