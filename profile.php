<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "login");

$user = [];

if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$id'");
    $user = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>LERNEX-Profile</title>
<style>
    body {
        margin: 0;
        font-family: Arial;
        display: flex;
        background-size: cover;
    }
   /* UNIVERSAL SIDEBAR FIX */
.sidebar {
    width: 220px;
    background: #B3688F;
    height: 100vh;
    box-shadow: 2px 0 8px rgba(0,0,0,0.2);
    padding-top: 20px;
    position: fixed;
    left: 0;
    top: 0;
}

.sidebar h2 {
    text-align: center;
    color: #ffffff;
    margin-top: 10px;
}

.sidebar a {
    display: block;
    padding: 12px 20px;
    color: #ffffff;
    text-decoration: none;
    margin: 5px 10px;
    border-radius: 5px;
}

.sidebar a:hover {
    background: #be879c;
    color: white;
}

/* Universal Main Section */
.main {
    margin-left: 220px;
    padding: 40px;
    color: black;
}
    
.box {
    background: #ffffff;
    width: 400px;
    padding: 20px;
    border-radius: 10px;
    color: black;
    text-align: center;
}

.btn {
    padding: 10px;
    width: 100%;
    background: #B3688F;
    color: white;
    border-radius: 5px;
    border: none;
    margin-top: 15px;
    cursor: pointer;
}

.bio {
    margin-top: 10px;
    font-style: italic;
    color: #555;
}

.quiz-history-card {
    background: #ffffff;
    color: #000;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

.quiz-history-card p {
    margin: 6px 0;
}

</style>
</head>

<body>

<div class="sidebar">
    <h2>LERNEX</h2>
    <a href="dashboard.php">Home</a>
    <a href="courses.php">Courses</a>
    <a href="api/quiz_topics.php">Quizzes</a>
    <a href="notes.php">Notes</a>
    <a href="profile.php">Profile</a>
    <a href="settings.php">Settings</a>
    <a href="index.php">Logout</a>
</div>

<div class="main">
    <h1>My Profile</h1>

    <div class="box">
        <img src="uploads/<?php 
            $profile_pic = isset($user['profile_pic']) ? $user['profile_pic'] : '';
            if ($profile_pic != '' && file_exists('uploads/' . $profile_pic)) {
                echo $profile_pic;
            } else {
                echo 'profile_image.png';
            }
        ?>" 
        width="120" height="120"
        style="border-radius:50%;display:block;margin: 0 auto 10px auto;">

        <p><b>Username:</b> <?php echo isset($user['username']) ? $user['username'] : 'Not Available'; ?></p>

        <p><b>Email:</b> <?php echo isset($user['email']) && $user['email'] != '' ? $user['email'] : 'Not Available'; ?></p>

        <!-- BIO Section -->
        <p class="bio"><?php echo isset($user['bio']) && $user['bio'] != '' ? htmlspecialchars($user['bio']) : 'Available'; ?></p>

        <a href="edit_profile.php"><button class="btn">Edit Profile</button></a>
    </div>

    <!-- Quiz History Section -->
    <h2>Your Quiz History</h2>
    <?php
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $query = "SELECT result_id, subject, correct_answers, total_questions, score, quiz_date FROM quiz_results WHERE user_id = ? ORDER BY quiz_date DESC";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $results = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        if (empty($results)) {
            echo "<p>No quiz attempts yet.</p>";
        } else {
            echo "<ul>";
            foreach ($results as $result) {
                echo "<li class='quiz-history-card'>";
                echo "<strong>Subject:</strong> " . htmlspecialchars($result['subject']) . "<br>";
                echo "<strong>Score:</strong> " . $result['correct_answers'] . "/" . $result['total_questions'] . "<br>";
                echo "<strong>Date:</strong> " . $result['quiz_date'] . "<br>";
                echo "<a href='api/view_result.php?result_id=" . $result['result_id'] . "'>
                <button class='btn' style='width: auto;'>View Result</button></a>";
                echo "</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</div>

</body>
</html>
