<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "login");

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'"));

/* ACCOUNT */
if (isset($_POST['save_account'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    if ($email != $user['email']) {
        mysqli_query($conn, "UPDATE users SET email='$email' WHERE user_id='$user_id'");
        mysqli_query($conn, "INSERT INTO user_emails (user_id,email) VALUES ('$user_id','$email')");
    }
    mysqli_query($conn, "UPDATE users SET username='$username' WHERE user_id='$user_id'");
    header("Location: settings.php");
}

/* PASSWORD */
if (isset($_POST['change_password'])) {
    if (password_verify($_POST['old_password'], $user['password'])) {
        $new = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
        mysqli_query($conn, "UPDATE users SET password='$new' WHERE user_id='$user_id'");
        $msg = "Password changed successfully";
    } else {
        $msg = "Old password incorrect";
    }
}

/* NOTIFICATIONS */
if (isset($_POST['save_notifications'])) {
    mysqli_query($conn, "UPDATE users SET notifications='{$_POST['notifications']}' WHERE user_id='$user_id'");
}

/* PRIVACY */
if (isset($_POST['save_privacy'])) {
    mysqli_query($conn, "UPDATE users SET profile_visibility='{$_POST['privacy']}' WHERE user_id='$user_id'");
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Settings - LERNEX</title>

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
.main {
    margin-left: 220px;
    padding: 40px;
    color: black;
}
/* Vertical cards */
.cards{
    display:flex;
    flex-direction:column;
    width:300px;
    gap:12px;
}
.card{
    background:#fff;
    padding:14px;
    border-radius:8px;
    cursor:pointer;
    box-shadow:0 0 8px #ccc;
    font-weight:bold;
}
.card:hover{
    background: #be879c;
    color:white;
}

/* Sections */
.section{
    display:none;
    background:#fff;
    padding:20px;
    border-radius:8px;
    margin-top:25px;
    box-shadow:0 0 8px #ccc;
}

input,select,button{
    width:95%;
    padding:10px;
    margin-top:10px;


}
button{
    background:  #B3688F;
    color: #fff;
    border:none;
    border-radius:5px;
    justify-content: center;
}
.msg{color:green;margin-top:10px}
.settings-container{
    display:flex;
    gap:30px;
    align-items:flex-start;
}

.content-area{
    flex:1;
    width: 800px;
}

</style>

<script>
function openSection(id){
    document.querySelectorAll('.section').forEach(s=>{
        s.style.display='none';
    });
    document.getElementById(id).style.display='block';
    document.getElementById(id).scrollIntoView({behavior:'smooth'});
}
</script>
</head>

<body>

<!-- SIDEBAR -->
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

<!-- MAIN -->
<div class="main">
<h1>Settings</h1>

<!-- VERTICAL OPTIONS -->
<div class="settings-container">

    <!-- LEFT CARDS -->
    <div class="cards">
        <div class="card" onclick="openSection('account')">Account Settings</div>
        <div class="card" onclick="openSection('password')">Change Password</div>
        <div class="card" onclick="openSection('notifications')">Notifications</div>
        <div class="card" onclick="openSection('privacy')">Privacy</div>
        <div class="card" onclick="openSection('about')">About App</div>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="content-area">

        <div id="account" class="section">
            <h3>Account Settings</h3>
            <form method="POST">
                <input type="text" name="username" value="<?= $user['username'] ?>" required>
                <input type="email" name="email" value="<?= $user['email'] ?>" required>
                <button name="save_account">Save</button>
            </form>
        </div>

        <div id="password" class="section">
            <h3>Change Password</h3>
            <form method="POST">
                <input type="password" name="old_password" placeholder="Old Password" required>
                <input type="password" name="new_password" placeholder="New Password" required>
                <button name="change_password">Change</button>
            </form>
            <?php if(isset($msg)) echo "<div class='msg'>$msg</div>"; ?>
        </div>

        <div id="notifications" class="section">
            <h3>Notifications</h3>
            <form method="POST">
                <select name="notifications">
                    <option value="1" <?= $user['notifications']?'selected':'' ?>>Enable</option>
                    <option value="0" <?= !$user['notifications']?'selected':'' ?>>Disable</option>
                </select>
                <button name="save_notifications">Save</button>
            </form>
        </div>

        <div id="privacy" class="section">
            <h3>Privacy</h3>
            <form method="POST">
                <select name="privacy">
                    <option value="public" <?= $user['profile_visibility']=='public'?'selected':'' ?>>Public</option>
                    <option value="private" <?= $user['profile_visibility']=='private'?'selected':'' ?>>Private</option>
                </select>
                <button name="save_privacy">Save</button>
            </form>
        </div>


        <div id="about" class="section">
            <h3>About LERNEX</h3>
            <p><b>Version:</b> 1.0</p>
            <p><b>Developer:</b> Prerna</p>
            <p><b>Purpose:</b> Online Learning Platform</p>
        </div>

    </div>
</div>

</div>
</body>
</html>
