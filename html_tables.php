<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML – Tables - LERNEX</title>
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
.more-link{display:inline-block;background:#B3688F;padding:10px 18px;color:white;border-radius:5px;text-decoration:none;margin-top:25px;}
pre{background:rgba(0,0,0,0.05);padding:10px;border-radius:5px;}
table{border-collapse:collapse;width:80%;}
table, th, td{border:1px solid black;padding:8px;text-align:left;}
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
<h1>HTML – Tables</h1>
<p>Tables are created using the <code>&lt;table&gt;</code> tag. Rows are defined by <code>&lt;tr&gt;</code>, headers by <code>&lt;th&gt;</code>, and data by <code>&lt;td&gt;</code>.</p>

<pre><code>&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Age&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Alice&lt;/td&gt;
    &lt;td&gt;25&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;</code></pre>

<a class="more-link" href="https://www.w3schools.com/html/html_tables.asp" target="_blank">
Click For More
</a>

</div>
</body>
</html>