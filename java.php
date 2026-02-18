<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Java Topics - LERNEX</title>

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

    /* Topics List */
    .topics-list a {
        display: block;
        padding: 12px 0;
        border-bottom: 1px solid rgba(255,255,255,0.5);
        text-decoration: none;
        color: black;
        font-size: 18px;
        transition: 0.2s;
    }

    .topics-list a:hover {
        color: #be879c;
    }

    .topics-list a:last-child {
        border-bottom: none;
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
    <h1>Java – Topics</h1>

    <div class="topics-list">
        <a href="java_intro.php">1. Introduction to Java</a>
        <a href="java_jvm.php">2. JVM, JRE, JDK</a>
        <a href="java_datatypes.php">3. Data Types & Variables</a>
        <a href="java_operators.php">4. Operators</a>
        <a href="java_control_statment.php">5. Control Statements</a>
        <a href="java_loop.php">6. Loops</a>
        <a href="java_array.php ">7. Arrays</a>
        <a href="java_method.php">8. Methods</a>
        <a href="java_oop.php">9. Object Oriented Programming</a>
        <a href="java_inheritance.php">10. Inheritance</a>
        <a href="java_polymorphism.php">11. Polymorphism</a>
        <a href="java_abstract.php">12. Abstraction</a>
        <a href="java_interface.php">13. Interfaces</a>
        <a href="java_exceptionhandling.php">14. Exception Handling</a>
        <a href="java_collection.php">15. Collections Framework</a>
    </div>
</div>

</body>
</html>