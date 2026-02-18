<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "login");

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'"));

// Fetch email history
$email_history_result = mysqli_query($conn, "SELECT email, created_at FROM user_emails WHERE user_id='$user_id' ORDER BY created_at DESC");
$email_history = [];
while ($row = mysqli_fetch_assoc($email_history_result)) {
    $email_history[] = $row;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $bio = mysqli_real_escape_string($conn, $_POST['bio']);
    $new_email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);

    // Handle profile pic upload
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
        $target_dir = "uploads/";
        $filename = time() . '_' . basename($_FILES["profile_pic"]["name"]);
        $target_file = $target_dir . $filename;

        if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
            if (!empty($user['profile_pic']) && file_exists('uploads/' . $user['profile_pic'])) {
                unlink('uploads/' . $user['profile_pic']);
            }
            mysqli_query($conn, "UPDATE users SET profile_pic='$filename' WHERE user_id='$user_id'");
        }
    }

    // Update username, bio, mobile
    mysqli_query($conn, "UPDATE users SET username='$username', bio='$bio', mobile='$mobile' WHERE user_id='$user_id'");

    // Email update: add to history if changed
    if ($new_email != $user['email']) {
        mysqli_query($conn, "UPDATE users SET email='$new_email' WHERE user_id='$user_id'");
        mysqli_query($conn, "INSERT INTO user_emails (user_id, email) VALUES ('$user_id', '$new_email')");
    }

    header("Location: profile.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<style>
body {
    font-family: Arial;
    background: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    width: 450px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}

.container h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"], input[type="email"], input[type="tel"], textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

textarea {
    resize: vertical;
}

.btn {
    padding: 10px;
    width: 100%;
    background: #B3688F;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    margin: 0 auto 10px auto;
}

input[type="file"] {
    display: block;
    margin-top: 5px;
}

.email-history {
    font-size: 12px;
    color: #555;
    margin-top: 5px;
}
</style>
</head>
<body>

<div class="container">
    <h2>Edit Profile</h2>
    <form method="POST" enctype="multipart/form-data">

        <!-- Profile Picture -->
        <div class="form-group">
            <img src="uploads/<?php 
                $profile_pic = isset($user['profile_pic']) ? $user['profile_pic'] : '';
                if ($profile_pic != '' && file_exists('uploads/' . $profile_pic)) {
                    echo $profile_pic;
                } else {
                    echo 'profile_image.png';
                }
            ?>" alt="Profile Picture">

            <input type="file" name="profile_pic" id="profile_pic" accept="image/*" style="display:none;">
            <label for="profile_pic" class="btn" style="width:auto; text-align:center; margin-top:5px;">Upload Picture</label>
        </div>

        <!-- Username -->
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo isset($user['email']) ? htmlspecialchars($user['email']) : ''; ?>" required>
            <div class="email-history">
                <strong>Previous Emails:</strong><br>
                <?php 
                if (!empty($email_history)) {
                    foreach ($email_history as $e) {
                        echo htmlspecialchars($e['email']) . " (" . $e['created_at'] . ")<br>";
                    }
                } else {
                    echo "No previous emails.";
                }
                ?>
            </div>
        </div>

        <!-- Mobile -->
        <div class="form-group">
            <label>Mobile Number:</label>
            <input type="tel" name="mobile" value="<?php echo isset($user['mobile']) ? htmlspecialchars($user['mobile']) : ''; ?>" required>
        </div>

        <!-- Bio -->
        <div class="form-group">
            <label>Bio:</label>
            <textarea name="bio" rows="3" placeholder="Write something about yourself..."><?php echo isset($user['bio']) ? htmlspecialchars($user['bio']) : ''; ?></textarea>
        </div>

        <button class="btn" type="submit">Save Changes</button>
    </form>
</div>

</body>
</html>
