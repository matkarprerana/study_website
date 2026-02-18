<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Arrays - LERNEX</title>
<style>
body{margin:0;font-family:Arial;background-image:url('image 3.jpg');background-size:cover;background-position:center;display:flex;}
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

    /* MAIN */
    .main {
        margin-left: 220px;
        padding: 40px;
        color: rgb(12, 12, 12);
    }
h1{
    color:#f10dd6;
}
.more-link{display:inline-block;background:#B3688F;padding:10px 18px;color:white;border-radius:5px;text-decoration:none;margin-top:25px;}
</style>
</head>
<body>

<div class="sidebar">
    <h2>LERNEX</h2>
    <a href="../dashboard.php">Home</a>
    <a href="../courses.php">Courses</a>
    <a href="../api/quiz_topics.php">Quizzes</a>
    <a href="../notes.php">Notes</a>
    <a href="../profile.php">Profile</a>
    <a href="../settings.php">Settings</a>
    <a href="../index.php">Logout</a>
</div>
<div class="main">
<h1>Java – Arrays</h1>
<p>Arrays are used to store multiple values in a single variable. All elements in an array must be of the same type.</p>

<h2>Types of Arrays:</h2>
<ul>
<li><b>Single Dimensional Array:</b> Stores data in a single row.</li>
<li><b>Multi-Dimensional Array:</b> Stores data in multiple rows and columns (2D, 3D etc.).</li>
<li><b>Array Declaration:</b> <code>int arr[] = new int[5];</code></li>
<li><b>Accessing Array Elements:</b> <code>arr[0], arr[1], …</code></li>
<li><b>Looping Through Arrays:</b> Use <code>for</code> or <code>foreach</code> loops.</li>
</ul>

<a class="more-link" href="https://www.w3schools.com/java/java_arrays.asp" target="_blank">
Click For More
</a>

</div>
</body>
</html>