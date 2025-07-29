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
        
        // Reset form fields
        $name = $email = $studentID = $group = $dateOfBirth = $gender = $address = $number = '';
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
        </div>

        <?php if (!empty($success)): ?>
            <p class="success"><?= $success ?></p>
        <?php endif; ?>
    </form>
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

<!-- Add some basic CSS -->
<style>
    .error { color: red; }
    .success { color: green; }
    .form-group { margin-bottom: 15px; }
    .user-bg img { max-width: 100px; max-height: 100px; }
    table { width: 100%; border-collapse: collapse; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
</style>