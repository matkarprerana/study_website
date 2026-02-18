<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Control Statements - LERNEX</title>
<style>
body{margin:0;
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
pre{
    background:rgba(0,0,0,0.2);
    padding:10px;
    border-radius:5px;}
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
<h1>Java – Control Statements</h1>
<p>Control statements are used to decide the flow of execution in a program based on conditions.</p>

<h2>If Statement:</h2>
<p>Executes a block of code if the condition is true.</p>
<pre><code>if(condition){
    // code to execute
}</code></pre>

<h2>If-Else Statement:</h2>
<p>Executes one block if condition is true, another if false.</p>
<pre><code>if(condition){
    // code if true
}else{
    // code if false
}</code></pre>

<h2>If-Else-If Ladder:</h2>
<p>Tests multiple conditions one by one.</p>
<pre><code>if(condition1){
    // code
}else if(condition2){
    // code
}else{
    // code if all false
}</code></pre>

<h2>Switch Statement:</h2>
<p>Used to select one block of code from many options based on a variable value.</p>
<pre><code>switch(variable){
    case value1:
        // code
        break;
    case value2:
        // code
        break;
    default:
        // code if no case matches
}</code></pre>

<h2>Break & Continue Statements:</h2>
<ul>
<li><b>Break:</b> Exits from loop or switch immediately.</li>
<li><b>Continue:</b> Skips current iteration and continues with next.</li>
</ul>

<a class="more-link" href="https://www.w3schools.com/java/java_conditions.asp" target="_blank">
Click For More (W3Schools)
</a>

</div>
</body>
</html>