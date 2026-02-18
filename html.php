<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML Topics - LERNEX</title>

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
h1{
    color: #f10dd6;
}
    /* Topic list */
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
        color: #6b6b6b;
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

<!-- Main Content -->
<div class="main">
    <h1>HTML – Topics</h1>

    <div class="topics-list">

        <a href="html_intro.php">1. Introduction to HTML</a>
        <p>What is HTML, features, structure of HTML document</p>

        <a href="html_elements.php">2. HTML Elements</a>
        <p>Tags, nested elements, attributes</p>

        <a href="html_headings.php">3. Headings & Paragraphs</a>
        <p>h1–h6 tags, p tag, line breaks</p>

        <a href="html_links.php">4. Links & Navigation</a>
        <p>Anchor tag, href, target attribute</p>

        <a href="html_images.php">5. Images</a>
        <p>img tag, image paths, alt text</p>

        <a href="html_lists.php">6. Lists</a>
        <p>Ordered list, unordered list, nested lists</p>

        <a href="html_tables.php">7. Tables</a>
        <p>table, tr, td, th, colspan, rowspan</p>

        <a href="html_forms.php">8. Forms</a>
        <p>input fields, labels, buttons, form validation</p>

        <a href="html_media.php">9. Audio & Video</a>
        <p>audio tag, video tag, controls, autoplay</p>

        <a href="html_semantics.php">10. Semantic Tags</a>
        <p>header, footer, section, article, nav</p>

    </div>
</div>

</body>
</html>