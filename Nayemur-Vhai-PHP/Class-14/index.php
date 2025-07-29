<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-14</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Student Information</h1>

        <?php

            session_start();

            $name = '';
            $email = '';
            $studentID = '';
            $group = '';
            $dateOfBirth = '';
            $gender = '';
            $address = '';
            $photo = '';
            $number = '';

            $students = [];
            $errors =[];
            $success = "";

            // যদি POST request হয় এবং submit button press করা হয়
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
                $name = $_POST['name'] ?? '';
                $email = $_POST['email'] ?? '';
                $studentID = $_POST['studentID'] ?? '';
                $group = $_POST['group'] ?? '';
                $dateOfBirth = $_POST['dateOfBirth'] ?? '';
                $gender = $_POST['gender'] ?? '';
                $address = $_POST['address'] ?? '';
                $photo = $_FILES['photo']['name'] ?? '';
                $number = $_POST['number'] ?? '';

                // Session তৈরি না থাকলে তৈরি করো
                if (!isset($_SESSION['students'])) {
                    $_SESSION['students'] = [];
                }

                // Input ফাঁকা না হলে session-এ যুক্ত করো
                if (!empty($name) && !empty($email) && !empty($studentID) && !empty($group) && !empty($dateOfBirth) && !empty($gender) && !empty($address) && !empty($photo) && !empty($number)) {
                    $newStudent = [
                        'name' => $name,
                        'email' => $email,
                        'studentID' => $studentID,
                        'group' => $group,
                        'dateOfBirth' => $dateOfBirth,
                        'gender' => $gender,
                        'address' => $address,
                        'photo' => $photo,
                        'number' => $number,
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

            // if(empty($name) || empty($email) || empty($group) || empty($number)) {
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
            if(empty($studentID)){
                $errors['studentID'] = "Student ID is required.";
            }
            if(empty($group)){
                $errors['group'] = "Group is required.";
            }
            if(empty($dateOfBirth)){
                $errors['dateOfBirth'] = "Date of Birth is required.";
            }
            if(empty($gender)){
                $errors['gender'] = "This Field is required.";
            }
            if(empty($address)){
                $errors['address'] = "Address is required.";
            }
            if(empty($photo)){
                $errors['photo'] = "Photo is required.";
            }
            if(empty($number)){
                $errors['number'] = "Number is required.";
            }

            // যদি সব ফিল্ড পূর্ণ থাকে তাহলে সফলতার বার্তা দেখাও

            if (empty($errors) && !empty($name) && !empty($email) && !empty($group)  && !empty($dateOfBirth)  && !empty($gender) && !empty($address) && !empty($photo) && !empty($number)) {
                 $success = "New student added successfully!";
            }

        ?>


        <div class="form-container">
            <form class="form-flex" action="" method="POST" enctype="multipart/form-data">
                <!-- Name -->
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input class="form-control" type="text" id="name" name="name" value="<?php echo htmlspecialchars($name ?? ''); ?>">
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['name'])): ?>
                    <p style="color:red;"><?php echo $errors['name']; ?></p>
                <?php endif; ?>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>">
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['email'])): ?>
                    <p style="color:red;"><?php echo $errors['email']; ?></p>
                <?php endif; ?>

                <!-- Student ID -->
                <div class="form-group">
                    <label for="StudentID">Student ID:</label>
                    <input class="form-control" type="text" id="studentID" name="studentID" value="<?php echo htmlspecialchars($studentID ?? ''); ?>">
                </div>
                    
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['studentID'])): ?>
                    <p style="color:red;"><?php echo $errors['studentID']; ?></p>
                <?php endif; ?>


                <!-- Group -->
                <div class="form-group">
                    <label for="group">Group:</label>
                    <input class="form-control" type="text" id="group" name="group" value="<?php echo htmlspecialchars($group ?? ''); ?>">
                </div>
                    
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['group'])): ?>
                    <p style="color:red;"><?php echo $errors['group']; ?></p>
                <?php endif; ?>

                <!-- Date of Birth -->
                <div class="form-group">
                    <label for="DateofBirth">Date Of Birth:</label>
                    <input class="form-control" type="date" id="dateOfBirth" name="dateOfBirth" value="<?php echo htmlspecialchars($dateOfBirth ?? ''); ?>">
                </div>
                    
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['dateOfBirth'])): ?>
                    <p style="color:red;"><?php echo $errors['dateOfBirth']; ?></p>
                <?php endif; ?>

                <!-- Gender -->
                <div class="form-group form-gender">
                    <label>Gender</label>
                    <input type="radio" id="male" name="gender" value="Male" <?php if($gender == "Male") echo "Checked"; ?> >
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="Female" <?php if($gender == "Female") echo "Checked"; ?> >
                    <label for="male">Female</label>

                </div>
                    
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['gender'])): ?>
                    <p style="color:red;"><?php echo $errors['gender']; ?></p>
                <?php endif; ?>

                <!-- Address -->
                <div class="form-group">
                    <label for="number">Address:</label>
                    <textarea class="form-control"  name="address" rows="2" value="<?php echo htmlspecialchars($address ?? ''); ?>"   id="address"></textarea>
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['address'])): ?>
                    <p style="color:red;"><?php echo $errors['address']; ?></p>
                <?php endif; ?>



                <!-- Photo -->
                <div class="form-group">
                    <label for="number">Photo:</label>
                    <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['photo'])): ?>
                    <p style="color:red;"><?php echo $errors['photo']; ?></p>
                <?php endif; ?>


                <!-- Phone -->
                <div class="form-group">
                    <label for="number">Phone:</label>
                    <input class="form-control" type="tel" id="number" name="number" value="<?php echo htmlspecialchars($number ?? ''); ?>">
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($errors['number'])): ?>
                    <p style="color:red;"><?php echo $errors['number']; ?></p>
                <?php endif; ?>

                <!-- Submit Button -->
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
                        <th>Student ID</th>
                        <th>Group</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Photo</th>
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

                        <?php if(isset($_POST['group'])) : ?>
                            <td><?php echo $_POST['group']; ?></td>
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
                            <td>2023001</td>
                            <td>Accounting</td>
                            <td>2005-01-10</td>
                            <td>Male</td>
                            <td>Dhaka</td>
                            <td>
                                <div class="user-bg">
                                    <img src="./Image/user.jpg" alt="user-img">
                                </div>
                            </td>
                            <td>00000000000</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach($students as $student) : ?>
                            <tr>
                                <td><?php echo htmlspecialchars($student['name']); ?></td>
                                <td><?php echo htmlspecialchars($student['email']); ?></td>
                                <td><?php echo htmlspecialchars($student['studentID']); ?></td>
                                <td><?php echo htmlspecialchars($student['group']); ?></td>
                                <td><?php echo htmlspecialchars($student['dateOfBirth']); ?></td>
                                <td><?php echo htmlspecialchars($student['gender']); ?></td>
                                <td><?php echo htmlspecialchars($student['address']); ?></td>
                                <td>
                                    <div class="user-bg">
                                         <img src="<?= $student['photo'] ?>" width="100" alt="Student Photo">
                                    </div>
                                </td>
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