<?php

    if(isset($_GET['accept_cookie'])){
        setcookie('cookie_accepted', 'yes', time() + (86400 * 30), "/"); // 30 days
        exit;
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-15</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Student Information</h1>
        <?php
            session_start();

            // Configuration for file uploads
            $uploadDir = __DIR__ . '/uploads/'; // Create this folder in your project root
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            $maxSize = 2 * 1024 * 1024; // 2MB

            // Initialize variables
            $name = $email = $studentID = $group = $dateOfBirth = $gender = $address = $photo = $number = '';
            $students = [];
            $errors = [];
            $success = "";

            // Create uploads directory if not exists
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear'])) {
                session_unset();
                session_destroy();
                header("Location: " . $_SERVER['PHP_SELF']); // Page reload without POST
                exit;
            }

            // নিচে দেখানোর জন্য (GET থেকে)
            $clear = '';
            if (isset($_GET['cleared']) && $_GET['cleared'] == 1) {
                $clear = "All student data has been cleared!";
            }


            // Handle form submission
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
                // Retrieve form data
                $name = $_POST['name'] ?? '';
                $email = $_POST['email'] ?? '';
                $studentID = $_POST['studentID'] ?? '';
                $group = $_POST['group'] ?? '';
                $dateOfBirth = $_POST['dateOfBirth'] ?? '';
                $gender = $_POST['gender'] ?? '';
                $address = $_POST['address'] ?? '';
                $number = $_POST['number'] ?? '';
                $photo = '';

                // Validate inputs
                if(empty($name)) $errors['name'] = "Name is required.";
                if(empty($email)) {
                    $errors['email'] = "Email is required.";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Invalid email format.";
                }
                if(empty($studentID)) $errors['studentID'] = "Student ID is required.";
                if(empty($group)) $errors['group'] = "Group is required.";
                if(empty($dateOfBirth)) $errors['dateOfBirth'] = "Date of Birth is required.";
                if(empty($gender)) $errors['gender'] = "Gender is required.";
                if(empty($address)) $errors['address'] = "Address is required.";
                if(empty($number)) $errors['number'] = "Number is required.";

                // Handle file upload
                if(isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                    $fileTmpPath = $_FILES['photo']['tmp_name'];
                    $fileName = $_FILES['photo']['name'];
                    $fileSize = $_FILES['photo']['size'];
                    $fileType = $_FILES['photo']['type'];
                    
                    // Validate file
                    if($fileSize > $maxSize) {
                        $errors['photo'] = "File size exceeds 2MB limit.";
                    } elseif(!in_array($fileType, $allowedTypes)) {
                        $errors['photo'] = "Only JPG, PNG & GIF files are allowed.";
                    } else {
                        // Generate unique filename
                        $newFileName = uniqid('', true) . '_' . $fileName;
                        $destPath = $uploadDir . $newFileName;
                        
                        if(move_uploaded_file($fileTmpPath, $destPath)) {
                            $photo = 'uploads/' . $newFileName; // Store relative path
                        } else {
                            $errors['photo'] = "File upload failed.";
                        }
                    }
                } else {
                    $errors['photo'] = "Photo is required.";
                }

                // Process form if no errors
                if (empty($errors)) {
                    // Initialize session array if needed
                    if (!isset($_SESSION['students'])) {
                        $_SESSION['students'] = [];
                    }

                    // Add new student
                    $newStudent = [
                        'name' => $name,
                        'email' => $email,
                        'studentID' => $studentID,
                        'group' => $group,
                        'dateOfBirth' => $dateOfBirth,
                        'gender' => $gender,
                        'address' => $address,
                        'photo' => $photo,
                        'number' => $number
                    ];

                    $_SESSION['students'][] = $newStudent;
                    $success = "New student added successfully!";
                    $clear = "Clear successfull!";
                    
                    // Reset form fields
                    $name = $email = $studentID = $group = $dateOfBirth = $gender = $address = $number = '';
                } else {
                        // POST না হলে (মানে: রিফ্রেশ বা সরাসরি আসলে) সেশন মুছে ফেলো
                        session_unset();
                        session_destroy();
                }
            }

            // Get students from session
            $students = $_SESSION['students'] ?? [];
            ?>

            <!-- HTML FORM SECTION -->
            <div class="form-container">
                <form class="form-flex" action="" method="POST" enctype="multipart/form-data">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input class="form-control" type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>">
                        <?php if (isset($errors['name'])): ?>
                            <p class="error"><?= $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>">
                        <?php if (isset($errors['email'])): ?>
                            <p class="error"><?= $errors['email'] ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Student ID -->
                    <div class="form-group">
                        <label for="studentID">Student ID:</label>
                        <input class="form-control" type="text" id="studentID" name="studentID" value="<?= htmlspecialchars($studentID) ?>">
                        <?php if (isset($errors['studentID'])): ?>
                            <p class="error"><?= $errors['studentID'] ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Group -->
                    <div class="form-group">
                        <label for="group">Group:</label>
                        <input class="form-control" type="text" id="group" name="group" value="<?= htmlspecialchars($group) ?>">
                        <?php if (isset($errors['group'])): ?>
                            <p class="error"><?= $errors['group'] ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Date of Birth -->
                    <div class="form-group">
                        <label for="dateOfBirth">Date Of Birth:</label>
                        <input class="form-control" type="date" id="dateOfBirth" name="dateOfBirth" value="<?= htmlspecialchars($dateOfBirth) ?>">
                        <?php if (isset($errors['dateOfBirth'])): ?>
                            <p class="error"><?= $errors['dateOfBirth'] ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Gender -->
                    <div class="form-group form-gender">
                        <label>Gender</label>
                        <input type="radio" id="male" name="gender" value="Male" <?= ($gender == "Male") ? "checked" : "" ?>>
                        <label for="male">Male</label>

                        <input type="radio" id="female" name="gender" value="Female" <?= ($gender == "Female") ? "checked" : "" ?>>
                        <label for="female">Female</label>
                        <?php if (isset($errors['gender'])): ?>
                            <p class="error"><?= $errors['gender'] ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Address -->
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" name="address" rows="2" id="address"><?= htmlspecialchars($address) ?></textarea>
                        <?php if (isset($errors['address'])): ?>
                            <p class="error"><?= $errors['address'] ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Photo Upload -->
                    <div class="form-group">
                        <label for="photo">Photo:</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                        <?php if (isset($errors['photo'])): ?>
                            <p class="error"><?= $errors['photo'] ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                        <label for="number">Phone:</label>
                        <input class="form-control" type="tel" id="number" name="number" value="<?= htmlspecialchars($number) ?>">
                        <?php if (isset($errors['number'])): ?>
                            <p class="error"><?= $errors['number'] ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-btn">
                        <button class="btn" type="submit" name="submit">Submit</button>

                        <?php if (!empty($students)): ?>
                            <button class="btn" type="submit" name="clear" onclick="return confirm('Are you sure you want to clear all student data?');">Clear All</button>
                        <?php endif; ?>
                    </div>


                    <?php if (!empty($success)): ?>
                        <p class="success"><?= $success ?></p>
                    <?php endif; ?>

                    
                    

                </form>
            </div>
    </div>
    
    <!-- RESULTS TABLE SECTION -->
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
                    <?php if (empty($students)): ?>
                        <tr>
                            <td colspan="9" style="text-align: center;">No records found</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($students as $student): ?>
                            <tr>
                                <td><?= htmlspecialchars($student['name']) ?></td>
                                <td><?= htmlspecialchars($student['email']) ?></td>
                                <td><?= htmlspecialchars($student['studentID']) ?></td>
                                <td><?= htmlspecialchars($student['group']) ?></td>
                                <td><?= htmlspecialchars($student['dateOfBirth']) ?></td>
                                <td><?= htmlspecialchars($student['gender']) ?></td>
                                <td><?= htmlspecialchars($student['address']) ?></td>
                                <td>
                                    <?php if (!empty($student['photo'])): ?>
                                        <div class="user-bg">
                                            <img src="<?= $student['photo'] ?>" width="100" alt="Student Photo">
                                        </div>
                                    <?php else: ?>
                                        No image
                                    <?php endif; ?>
                                </td>
                                <td><?= htmlspecialchars($student['number']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>


    <style>
        .error { color: red; }
        .success { color: green; }
        .form-group { margin-bottom: 15px; }
        .user-bg img { max-width: 100px; max-height: 100px; }
    </style>

    <?php if(!isset($_COOKIE['cookie_accepted'])) : ?>

        <!-- Cookie Area -->
        <div class="cookie-area" id="cookieBox">
            <div class="cookie">
                <div id="cookie-closebtn" class="cookie-close-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M13.1999 2.7998L2.7998 13.1999M2.7998 2.7998L13.1999 13.1999" stroke="#514F6E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="cookie-info">
                    <div class="cookie-icon">
                        <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_iii_1779_3649)">
                        <rect y="0.5" width="40" height="40" rx="9.67" fill="#EDECFF"/>
                        <g clip-path="url(#clip0_1779_3649)">
                        <path d="M23.0556 26.6111C23.7788 26.6111 24.3651 26.0248 24.3651 25.3015C24.3651 24.5783 23.7788 23.992 23.0556 23.992C22.3324 23.992 21.7461 24.5783 21.7461 25.3015C21.7461 26.0248 22.3324 26.6111 23.0556 26.6111Z" fill="#897FFF"/>
                        <path d="M16.0712 25.738C16.7945 25.738 17.3808 25.1517 17.3808 24.4285C17.3808 23.7053 16.7945 23.119 16.0712 23.119C15.348 23.119 14.7617 23.7053 14.7617 24.4285C14.7617 25.1517 15.348 25.738 16.0712 25.738Z" fill="#897FFF"/>
                        <path d="M15.1982 19.627C15.9214 19.627 16.5077 19.0407 16.5077 18.3175C16.5077 17.5942 15.9214 17.0079 15.1982 17.0079C14.475 17.0079 13.8887 17.5942 13.8887 18.3175C13.8887 19.0407 14.475 19.627 15.1982 19.627Z" fill="#897FFF"/>
                        <path d="M20.4365 21.373C21.1597 21.373 21.746 20.7867 21.746 20.0634C21.746 19.3402 21.1597 18.7539 20.4365 18.7539C19.7132 18.7539 19.127 19.3402 19.127 20.0634C19.127 20.7867 19.7132 21.373 20.4365 21.373Z" fill="#897FFF"/>
                        <path d="M30.4763 20.5001C29.0871 20.5001 27.7548 19.9482 26.7724 18.9659C25.7901 17.9835 25.2382 16.6512 25.2382 15.262C23.849 15.262 22.5167 14.7101 21.5343 13.7278C20.552 12.7454 20.0001 11.4131 20.0001 10.0239C17.9281 10.0239 15.9027 10.6383 14.1799 11.7894C12.4571 12.9406 11.1143 14.5767 10.3214 16.491C9.52846 18.4053 9.321 20.5117 9.72523 22.5439C10.1295 24.576 11.1272 26.4427 12.5923 27.9078C14.0575 29.373 15.9241 30.3707 17.9563 30.775C19.9885 31.1792 22.0949 30.9717 24.0092 30.1788C25.9235 29.3859 27.5596 28.0431 28.7108 26.3203C29.8619 24.5975 30.4763 22.5721 30.4763 20.5001Z" stroke="#897FFF" stroke-width="1.57143" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </g>
                        <defs>
                        <filter id="filter0_iii_1779_3649" x="0" y="-3.66667" width="40" height="45.3571" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="-4.16667"/>
                        <feGaussianBlur stdDeviation="2.38095"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.671684 0 0 0 0 0.712137 0 0 0 0 0.914402 0 0 0 0.3 0"/>
                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1779_3649"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="1.19048"/>
                        <feGaussianBlur stdDeviation="0.595238"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.35 0"/>
                        <feBlend mode="normal" in2="effect1_innerShadow_1779_3649" result="effect2_innerShadow_1779_3649"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="-1"/>
                        <feGaussianBlur stdDeviation="0.5"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.195669 0 0 0 0 0.195669 0 0 0 0 0.799617 0 0 0 0.13 0"/>
                        <feBlend mode="normal" in2="effect2_innerShadow_1779_3649" result="effect3_innerShadow_1779_3649"/>
                        </filter>
                        <clipPath id="clip0_1779_3649">
                        <rect width="22.8571" height="22.8571" fill="white" transform="translate(8.57129 9.07141)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="cookie-content">
                        <h4>We respect your privacy</h4>
                        <p>Our website use cookies. By continuing, we assume your permission to deploy cookies as detailed in our <a href="#">Privacy Policy.</a></p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="cookie-btns">
                    <button class="btn-decline">Decline cookies</button>
                    <button class="btn-accept" onclick="acceptCookie()">Accept cookies</button>
                </div>
            </div>
        </div>

    <?php endif;  ?>
    
    <script>
        let cookieCloseBtn = document.getElementById("cookie-closebtn");
        let cookieArea = document.querySelector(".cookie-area");
        let btnAccept = document.querySelector(".btn-accept");
        let btnDecline = document.querySelector(".btn-decline");
        cookieCloseBtn.addEventListener("click", function() {
            cookieArea.style.display = "none";
        });

        btnDecline.addEventListener("click", function() {
            cookieArea.style.display = "none";
        });


        function acceptCookie() {
            fetch('?accept_cookie')  // ঠিক করা হয়েছে
                .then(() => {
                    document.getElementById('cookieBox').style.display = 'none';
                });
        }
    </script>
</body>
</html>