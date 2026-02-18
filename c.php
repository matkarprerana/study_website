<!DOCTYPE php>
<php lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C Language Topics - LERNEX</title>

<style>
    body {
        margin: 0;
        font-family: Arial;
        background-image: url('image 3.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
    }

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

    h1 {
        margin-bottom: 20px;
        color:#f10dd6;
        font-size: 32px;
        letter-spacing: 1px;
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
        color: #868686;
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
    <h1>C Language – Topics</h1>

    <div class="topics-list">

        <a href="c_intro.php">1. Introduction to C</a>
        <p>History, features, structure of C program</p>

        <a href="c_variables.php">2. Variables & Data Types</a>
        <p>int, float, char, double</p>

        <a href="c_operators.php">3. Operators</a>
        <p>Arithmetic, relational, logical, increment/decrement</p>

        <a href="c_input_output.php">4. Input & Output</a>
        <p>scanf, printf, format specifiers</p>

        <a href="c_conditional.php">5. Conditional Statements</a>
        <p>if, else, nested if, switch</p>

        <a href="c_loops.php">6. Loops</a>
        <p>for, while, do-while</p>

        <a href="c_arrays.php">7. Arrays</a>
        <p>1D array, 2D array, string arrays</p>

        <a href="c_string.php">8. Strings</a>
        <p>String functions: strlen, strcpy, strcmp</p>

        <a href="c_functions.php">9. Functions</a>
        <p>User-defined functions, call by value/reference</p>

        <a href="c_pointer.php">10. Pointers</a>
        <p>Pointer basics, pointer arithmetic</p>

        <a href="c_struct.php">11. Structures</a>
        <p>Creating and using structures</p>

        <a href="c_file_handling.php">12. File Handling</a>
        <p>Open, read, write, fclose</p>

    </div>
</div>

</body>
</php>