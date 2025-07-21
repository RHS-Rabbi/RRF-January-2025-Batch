<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Student Information</h1>

        <?php

            // $students = [];

            // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

            //     $name = $_POST['name'] ?? '';
            //     $email = $_POST['email'] ?? '';
            //     $subject = $_POST['subject'] ?? '';
            //     $number = $_POST['number'] ?? '';

            //     if (session_status() == PHP_SESSION_NONE) {
            //         session_start();
            //     }

            //     if (!isset($_SESSION['students'])) {
            //         $_SESSION['students'] = [];
            //     }

            //     if (!empty($name) && !empty($email) && !empty($subject) && !empty($number)) {

            //         $newStudent = [
            //             'name' => $name,
            //             'email' => $email,
            //             'subject' => $subject,
            //             'number' => $number
            //         ];
            //         array_push($_SESSION['students'], $newStudent);
            //     }

            //     if (isset($_SESSION['students'])) {
            //         $students = $_SESSION['students'];
            //     }
                
            // }

            session_start();

            $students = [];

            // যদি POST request হয় এবং submit button press করা হয়
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
                $name = $_POST['name'] ?? '';
                $email = $_POST['email'] ?? '';
                $subject = $_POST['subject'] ?? '';
                $number = $_POST['number'] ?? '';

                // Session তৈরি না থাকলে তৈরি করো
                if (!isset($_SESSION['students'])) {
                    $_SESSION['students'] = [];
                }

                // Input ফাঁকা না হলে session-এ যুক্ত করো
                if (!empty($name) && !empty($email) && !empty($subject) && !empty($number)) {
                    $newStudent = [
                        'name' => $name,
                        'email' => $email,
                        'subject' => $subject,
                        'number' => $number
                    ];

                    $_SESSION['students'][] = $newStudent;
                }

                // সর্বশেষ students গুলো দেখাতে চাইলে
                $students = $_SESSION['students'];
            } else {
                // POST না হলে (মানে: রিফ্রেশ বা সরাসরি আসলে) সেশন মুছে ফেলো
                session_unset();
                session_destroy();
            }
        ?>


        <div class="form-container">
            <form class="form-flex" action="" method="POST">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input class="form-control" type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input class="form-control" type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="number">Phone:</label>
                    <input class="form-control" type="tel" id="number" name="number" required>
                </div>
                <div class="form-btn">
                    <button class="btn" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <h1 style="text-align: center;">Submitted Data</h1>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    /*
                    <tr>
                        <?php if(isset($_POST['name'])) : ?>
                            <td><?php echo $_POST['name']; ?></td>
                        <?php endif; ?>

                        <?php if(isset($_POST['email'])) : ?>
                            <td><?php echo $_POST['email']; ?></td>
                        <?php endif; ?>

                        <?php if(isset($_POST['subject'])) : ?>
                            <td><?php echo $_POST['subject']; ?></td>
                        <?php endif; ?>

                        <?php if(isset($_POST['number'])) : ?>
                            <td><?php echo $_POST['number']; ?></td>
                        <?php endif; ?>
                    </tr>
                    */
                    ?>

                    <?php if(empty($students)) : ?>
                        <tr>
                            <td>Student Name 2</td>
                            <td>student2@gmail.com</td>
                            <td>Accounting</td>
                            <td>00000000000</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach($students as $student) : ?>
                            <tr>
                                <td><?php echo $student['name']; ?></td>
                                <td><?php echo $student['email']; ?></td>
                                <td><?php echo $student['subject']; ?></td>
                                <td><?php echo $student['number']; ?></td>
                            </tr>
                        <?php endforeach; ?>

                    <?php endif; ?>
                    
                </tbody>
            </table>

        </div>
    </div>

    
</body>
</html>