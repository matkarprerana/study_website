<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C – Operators - LERNEX</title>
<style>
body{margin:0;font-family:Arial;background-color:white;color:black;display:flex;}
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
pre{background:#f5f5f5;padding:10px;border-radius:5px;}
.more-link{display:inline-block;background: #B3688F;padding:10px 18px;color:white;text-decoration:none;border-radius:5px;margin-top:20px;}
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
<h1>Operators in C</h1>

<p>Operators are used to perform operations on variables and values.</p>

<h2>Types of Operators:</h2>
<ul>
<li><b>Arithmetic</b>: +, -, *, /, %</li>
<li><b>Relational</b>: ==, !=, >, <, >=, <=</li>
<li><b>Logical</b>: &&, ||, !</li>
<li><b>Assignment</b>: =, +=, -=, *=</li>
<li><b>Increment/Decrement</b>: ++, --</li>
</ul>

<h2>Example:</h2>
<pre><code>int a = 10, b = 5;
int sum = a + b;
int compare = (a > b);
</code></pre>

<a class="more-link" href="https://www.w3schools.com/c/c_operators.php" target="_blank">Click For More</a>

</div>
</body>
</html>