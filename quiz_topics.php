<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Learnex - Quiz</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url('image3.jpg');
    background-size: cover;
    background-position: center;
    display: flex;
}
 /* Sidebar */
    /* UNIVERSAL SIDEBAR FIX */
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

/* Universal Main Section */
.main {
    margin-left: 220px;
    padding: 40px;
    color: white;
}
    .main h1 {
        font-size: 32px;
        margin-top: 0;
    }

   
    /* Signup-style Button */
    .btn {
        width: 220px;
        background: #B3688F;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 5px;
        font-size: 17px;
        cursor: pointer;
        margin-top: 20px;
    }

    .btn:hover {
        background:#be879c;
    }
.courses {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
.course-link {
    flex: 1 1 calc(25% - 20px);
    text-decoration: none;
     color:black;
}
.course-card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: transform 0.2s;
}
.course-card:hover {
    transform: translateY(-5px);
}
</style>
</head>

<body>

<div class="sidebar">
    <h2>LERNEX</h2>
    <a href="../dashboard.php">Home</a>
    <a href="../courses.php">Courses</a>
    <a href="quiz_topics.php">Quizzes</a>
    <a href="../notes.php">Notes</a>
    <a href="../profile.php">Profile</a>
    <a href="../settings.php">Settings</a>
    <a href="../index.php">Logout</a>
</div>

<div class="main">
<h1>Quizzes</h1>

<div class="courses">

<!-- PYTHON -->
<a href="quiz_sel_qu.php?subject=Python" class="course-link">
<div class="course-card">
<h3>Python</h3>
<p>Programming Language Basics</p>
</div>
</a>

<!-- JAVA -->
<a href="quiz_sel_qu.php?subject=Java" class="course-link">
<div class="course-card">
<h3>Java</h3>
<p>Object Oriented Concepts</p>
</div>
</a>

<!-- JAVASCRIPT -->
<a href="quiz_sel_qu.php?subject=JavaScript" class="course-link">
<div class="course-card">
<h3>JavaScript</h3>
<p>Front-end Web Development</p>
</div>
</a>

<!-- HTML -->
<a href="quiz_sel_qu.php?subject=Html" class="course-link">
<div class="course-card">
<h3>HTML</h3>
<p>Web Page Design</p>
</div>
</a>

<!-- CSS -->
<a href="quiz_sel_qu.php?subject=Css" class="course-link">
<div class="course-card">
<h3>CSS</h3>
<p>Web Page Design</p>
</div>
</a>

<!-- C -->
<a href="quiz_sel_qu.php?subject=C" class="course-link">
<div class="course-card">
<h3>C</h3>
<p>Programming Basics</p>
</div>
</a>

<!-- C++ -->
<a href="quiz_sel_qu.php?subject=Cpp" class="course-link">
<div class="course-card">
<h3>C++</h3>
<p>Programming Basics</p>
</div>
</a>

<!-- DATABASE -->
<a href="quiz_sel_qu.php?subject=Database" class="course-link">
<div class="course-card">
<h3>Database</h3>
<p>MySQL Basics</p>
</div>
</a>

<!-- PYTHON GUI -->
<a href="quiz_sel_qu.php?subject=PythonGUI" class="course-link">
<div class="course-card">
<h3>Python GUI</h3>
<p>Tkinter and GUI Development</p>
</div>
</a>

</div>
</div>

</body>
</html>
