<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LERNEX - Courses</title>

<style>
    body {
        margin: 0;
        font-family: Arial;
        background-image: url('image 3.jpg');
        background-size: cover;
        background-position: center;
    }

    /* UNIVERSAL SIDEBAR */
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

    .card-container {
        display: grid;
        grid-template-columns: repeat(2, 250px);
        gap: 25px;
    }

    /* Course Cards */
    .card {
        background: #ffffffcc;
        padding: 20px;
        border-radius: 10px;
        color: rgb(10,10,10);
        text-align: center;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        font-size: 20px;
        cursor: pointer;
        transition: 0.2s;
    }

    .card:hover {
        transform: scale(1.06);
        background: #ffffffee;
    }
</style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>LERNEX</h2>
    <a href="dashboard.php">Home</a>
    <a href="courses.php">Courses</a>
    <a href="api/quiz_topics.php">Quizzes</a>
    <a href="notes.php">Notes</a>
    <a href="profile.php">Profile</a>
    <a href="settings.php">Settings</a>
    <a href="index.php">Logout</a>
</div>

<!-- Main Content -->
<div class="main">
    <h1>Courses</h1>

    <div class="card-container">

        <div class="card" onclick="location.href='python/python.php'">
            Python Programming
        </div>

        <div class="card" onclick="location.href='java/java.php'">
            Java Programming
        </div>

        <div class="card" onclick="location.href='html/html.php'">
            HTML 
        </div>

        <div class="card" onclick="location.href='c_topics/c.php'">
           c language 
        </div>
        
         <div class="card" onclick="location.href='cpp_topics/c++.php'">
           c++ language 
        </div>

        <div class="card" onclick="location.href='css_topics/css.php'">
            CSS
        </div>

        <div class="card" onclick="location.href='javascript/JavaScript.php'">
            JavaScript
        </div>

    </div>
</div>

</body>
</html>