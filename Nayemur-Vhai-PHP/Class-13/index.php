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

            session_start();

            $students = [];
            $errors =[];
            $success = "";

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

            // if(empty($name) || empty($email) || empty($subject) || empty($number)) {
            //     $errors[] = "All fields are required.";

            // }
            // যদি নাম ফাঁকা থাকে তাহলে ত্রুটি দেখাও
            if(empty($name)){
                $errors['name'] = "Name is required.";
            }
            if(empty($email)){
                $errors['email'] = "Email is required.";
            } elseif
                (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $errors['email'] = "Invalid email format.";
                }
            if(empty($subject)){
                $errors['subject'] = "Subject is required.";
            }
            if(empty($number)){
                $errors['number'] = "Number is required.";
            }

            // যদি সব ফিল্ড পূর্ণ থাকে তাহলে সফলতার বার্তা দেখাও

            if (empty($errors) && !empty($name) && !empty($email) && !empty($subject) && !empty($number)) {
                 $success = "New student added successfully!";
            }

        ?>


        <div class="form-container">
            <form class="form-flex" action="" method="POST">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input class="form-control" type="text" id="name" name="name" value="<?php echo htmlspecialchars($name ?? ''); ?>">
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['name'])): ?>
                    <p style="color:red;"><?php echo $errors['name']; ?></p>
                <?php endif; ?>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>">
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['email'])): ?>
                    <p style="color:red;"><?php echo $errors['email']; ?></p>
                <?php endif; ?>

                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input class="form-control" type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($subject ?? ''); ?>">
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['subject'])): ?>
                    <p style="color:red;"><?php echo $errors['subject']; ?></p>
                <?php endif; ?>


                <div class="form-group">
                    <label for="number">Phone:</label>
                    <input class="form-control" type="tel" id="number" name="number" value="<?php echo htmlspecialchars($number ?? ''); ?>">
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['number'])): ?>
                    <p style="color:red;"><?php echo $errors['number']; ?></p>
                <?php endif; ?>


                <div class="form-btn">
                    <button class="btn" type="submit" name="submit">Submit</button>
                </div>

                <?php if (!empty($success)) : ?>
                    <p style="color:green;"><?php echo $success; ?></p>
                <?php endif; ?>

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
                                <td><?php echo htmlspecialchars($student['name']); ?></td>
                                <td><?php echo htmlspecialchars($student['email']); ?></td>
                                <td><?php echo htmlspecialchars($student['subject']); ?></td>
                                <td><?php echo htmlspecialchars($student['number']); ?></td>
                            </tr>
                        <?php endforeach; ?>

                    <?php endif; ?>
                    
                </tbody>
            </table>

        </div>
    </div>

    
</body>
</html>