<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Functions - LERNEX</title>
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
<h1>Java – Functions</h1>
<p>Functions (also called methods) are used to perform specific tasks, and they help in code reusability.</p>

<h2>Key Points:</h2>
<ul>
<li><b>Function Declaration:</b> <code>returnType functionName(parameters) { … }</code></li>
<li><b>Function Call:</b> Execute the function by calling its name <code>functionName();</code></li>
<li><b>Parameters & Arguments:</b> Input values passed to functions.</li>
<li><b>Return Statement:</b> Sends a value back to the caller <code>return value;</code></li>
<li><b>Types of Functions:</b> Built-in (like <code>Math.sqrt()</code>) and User-defined.</li>
</ul>

<a class="more-link" href="https://www.w3schools.com/java/java_methods.asp" target="_blank">
Click For More
</a>

</div>
</body>
</html>