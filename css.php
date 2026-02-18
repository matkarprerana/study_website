<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CSS Topics - LERNEX</title>

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
        color: #646464;
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
    <h1>CSS – Topics</h1>

    <div class="topics-list">

        <a href="css_intro.php">1. Introduction to CSS</a>
        <p>What is CSS, types of CSS, how CSS works</p>

        <a href="css_selectors.php">2. CSS Selectors</a>
        <p>Element, class, id, group, universal selectors</p>

        <a href="css_colors.php">3. Colors & Backgrounds</a>
        <p>background-color, images, gradients</p>

        <a href="css_text.php">4. Text & Fonts</a>
        <p>font-size, font-family, text-align, decoration</p>

        <a href="css_boxmodel.php">5. Box Model</a>
        <p>margin, padding, border, width, height</p>

        <a href="css_display.php">6. Display & Visibility</a>
        <p>block, inline, inline-block, none</p>

        <a href="css_positions.php">7. Positioning</a>
        <p>static, relative, absolute, fixed, sticky</p>

        <a href="css_flexbox.php">8. Flexbox</a>
        <p>flex-direction, align-items, justify-content</p>

        <a href="css_grid.php">9. CSS Grid</a>
        <p>grid-template, rows, columns, gaps</p>

        <a href="css_animations.php">10. Transitions & Animations</a>
        <p>animation, keyframes, transition effects</p>

    </div>
</div>

</body>
</html>