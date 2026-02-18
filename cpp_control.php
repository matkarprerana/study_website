<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Control Statements - C++ - LERNEX</title>
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
.more-link{background: #B3688F;padding:10px 18px;color:white;border-radius:5px;text-decoration:none;display:inline-block;margin-top:25px;}
pre{background: #f1f1f1;padding:10px;border-radius:5px;}
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
<h1>Control Statements</h1>
<p>C++ provides selection and branching statements like if, else-if, nested if, and switch.</p>

<pre><code>int x = 10;
if(x > 5){
    cout &lt;&lt; "Greater";
} else {
    cout &lt;&lt; "Smaller";
}
</code></pre>

<a class="more-link" href="https://www.w3schools.com/cpp/cpp_conditions.asp" target="_blank">
Click For More
</a>

</div>
</body>
</html>