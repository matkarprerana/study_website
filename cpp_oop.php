<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C++ – OOP Concepts - LERNEX</title>
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
.more-link{display:inline-block;background: #B3688F;padding:10px 18px;color:white;border-radius:5px;text-decoration:none;margin-top:25px;}
pre{background:rgba(0,0,0,0.05);padding:10px;border-radius:5px;}
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
<h1>C++ – Object Oriented Programming</h1>

<p>OOP is a programming style based on objects and classes. Main OOP concepts:</p>

<ul>
<li>Class & Object</li>
<li>Inheritance</li>
<li>Polymorphism</li>
<li>Abstraction</li>
<li>Encapsulation</li>
</ul>

<pre><code>#include &lt;iostream&gt;
using namespace std;

class Student {
public:
    void study(){
        cout &lt;&lt; "Studying...";
    }
};

int main(){
    Student s;
    s.study();
    return 0;
}
</code></pre>

<a class="more-link" href="https://www.w3schools.com/cpp/cpp_oop.asp" target="_blank">
Click For More
</a>

</div>
</body>
</html>