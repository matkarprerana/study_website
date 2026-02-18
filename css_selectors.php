<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CSS – Selectors - LERNEX</title>
<style>
body{margin:0;font-family:Arial;display:flex;background:white;}
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
pre{background:#f2f2f2;padding:12px;border-radius:5px;}
.more-link{background: #B3688F;color:white;padding:10px 18px;border-radius:5px;text-decoration:none;}
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
<h1>CSS – Selectors</h1>

<p>Selectors specify which HTML element you want to style.</p>

<h2>Types of Selectors</h2>
<pre>
1. Element Selector  
2. Class Selector  
3. ID Selector  
4. Group Selector  
5. Universal Selector (*)  
</pre>

<h2>Example</h2>
<pre><code>p { color: blue; }
.myclass { background: yellow; }
#title { font-size: 25px; }
</code></pre>

<a class="more-link" href="https://www.w3schools.com/css/css_selectors.asp" target="_blank">Click For More</a>

</div>
</body>
</html>