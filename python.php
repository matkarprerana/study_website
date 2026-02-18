<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Python Topics - LERNEX</title>

<style>
    body {
        margin: 0;
        font-family: Arial;
        background-image: url('image 3.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
    }

    /* Sidebar */

    /* Sidebar */
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

    /* Topics list with lines */
    .topics-list a {
        display: block;
        padding: 12px 0;
        margin: 0;
        text-decoration: none;
        color: black;
        font-size: 18px;
        transition: 0.2s;
    }

    .topics-list a:hover {
        color: #be879c;
    }

    .topics-list a:last-child {
        border-bottom: none; /* last item no line */
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
    <h1>Python – Topics</h1>

    <div class="topics-list">
        <a href="py_intro.php">1. Introduction to Python</a>
        <a href="python_variables.php">2. Variables & Data Types</a>
        <a href="python_operators.php">3. Operators</a>
        <a href="python_conditional.php">4. Conditional Statements</a>
        <a href="python_loops.php">5. Loops</a>
        <a href="python_functions.php">6. Functions</a>
        <a href="python_list.php">7. List</a>
        <a href="python_tuple.php">8. Tuple</a>
        <a href="python_dictionary.php">9. Dictionary</a>
        <a href="python_oop.php">10. Object Oriented Programming</a>
    </div>
</div>

</body>
</html>