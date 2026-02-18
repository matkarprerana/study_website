<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C++ Topics - LERNEX</title>

<style>
    body {
        margin: 0;
        font-family: Arial;
        background-image: url('image 3.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
    }

    /* Sidebar (Same for all pages) */
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

    /* Topics list */
    .topics-list a {
        display: block;
        background: #ffffffcc;
        padding: 12px 15px;
        margin: 8px 0;
        border-radius: 5px;
        text-decoration: none;
        color: black;
        font-size: 18px;
        transition: 0.2s;
    }

    .topics-list a:hover {
        background: #be879c;
        color: white;
    }
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
    <h1>C++ – Topics</h1>

    <div class="topics-list">

        <a href="cpp_intro.php">1. Introduction to C++</a>
        <a href="cpp_basics.php">2. Basic Syntax</a>
        <a href="cpp_variables.php">3. Variables & Data Types</a>
        <a href="cpp_operators.php">4. Operators</a>
        <a href="cpp_control.php">5. Control Statements</a>
        <a href="cpp_loops.php">6. Loops</a>
        <a href="cpp_functions.php">7. Functions</a>
        <a href="cpp_arrays.php">8. Arrays</a>
        <a href="cpp_pointers.php">9. Pointers</a>
        <a href="cpp_oop.php">10. Object Oriented Programming</a>
        <a href="cpp_inheritance.php">11. Inheritance</a>
        <a href="cpp_polymorphism.php">12. Polymorphism</a>
        <a href="cpp_filehandling.php">13. File Handling</a>

    </div>

</div>

</body>
</html>