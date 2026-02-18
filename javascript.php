<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JavaScript Topics - LERNEX</title>

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

    .topics-list p {
        color: #777676;
        margin: 3px 0 10px 5px;
        font-size: 14px;
    }
</style>
</head>

<body>

<!-- Sidebar -->
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
<!-- Main -->
<div class="main">
    <h1>JavaScript – Topics</h1>

    <div class="topics-list">

        <a href="js_intro.php">1. Introduction to JavaScript</a>
        <p>What JS is, features, how JS runs in browser</p>

        <a href="js_variables.php">2. Variables: var, let, const</a>
        <p>Difference between var, let, const</p>

        <a href="js_datatypes.php">3. Data Types</a>
        <p>String, Number, Boolean, Object, Array, etc.</p>

        <a href="js_operators.php">4. Operators</a>
        <p>Arithmetic, relational, logical, assignment</p>

        <a href="js_conditional.php">5. Conditional Statements</a>
        <p>if, else, else-if, switch</p>

        <a href="js_loops.php">6. Loops</a>
        <p>for, while, do-while, for-of, for-in</p>

        <a href="js_functions.php">7. Functions</a>
        <p>Normal, arrow functions, parameters, return</p>

        <a href="js_events.php">8. Events & Event Handling</a>
        <p>onclick, onchange, addEventListener</p>

        <a href="js_dom.php">9. DOM Manipulation</a>
        <p>getElementById, querySelector, innerHTML</p>

        <a href="js_objects.php">10. Objects & Arrays</a>
        <p>properties, methods, array operations</p>

        <a href="js_oop.php">11. OOP in JavaScript</a>
        <p>Classes, objects, constructor, inheritance</p>

        <a href="js_async.php">12. Asynchronous JavaScript</a>
        <p>callback, promises, async-await</p>

    </div>
</div>

</body>
</html>