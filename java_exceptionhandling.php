<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exception Handling - LERNEX</title>
<style>
body{
    margin:0;
    font-family:Arial;
    display:flex;}
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
.more-link{
    display:inline-block;
    background:#B3688F;
    padding:10px 18px;
    color:white;
    border-radius:5px;
    text-decoration:none;
    margin-top:25px;}
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
<h1>Java – Exception Handling</h1>
<p>Exception handling is a mechanism to handle runtime errors, ensuring normal program flow.</p>

<h2>Keywords:</h2>
<ul>
<li><b>try:</b> Block of code to monitor for exceptions.</li>
<li><b>catch:</b> Block to handle the exception.</li>
<li><b>finally:</b> Block always executed after try/catch.</li>
<li><b>throw:</b> Used to explicitly throw an exception.</li>
<li><b>throws:</b> Declares exceptions a method may throw.</li>
</ul>

<a class="more-link" href="https://www.w3schools.com/java/java_try_catch.asp" target="_blank">
Click For More
</a>

</div>
</body>
</html>