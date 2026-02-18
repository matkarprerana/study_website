<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "login");

$id = $_SESSION['user_id'];

$file = $_FILES['profile_pic']['name'];
$tmp = $_FILES['profile_pic']['tmp_name'];

$folder = "uploads/" . $file;

move_uploaded_file($tmp, $folder);

mysqli_query($conn, "UPDATE users SET profile_pic='$file' WHERE id='$id'");

header("Location: profile.php");
?>
