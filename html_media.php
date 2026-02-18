<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML – Audio & Video - LERNEX</title>
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
.more-link{display:inline-block;background:#B3688F;padding:10px 18px;color:white;border-radius:5px;text-decoration:none;margin-top:25px;}
pre{background:rgba(0,0,0,0.05);padding:10px;border-radius:5px;}
audio, video{display:block; margin:10px 0; max-width:100%;}
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
<h1>HTML – Audio & Video</h1>
<p>Audio and video files can be embedded using <code>&lt;audio&gt;</code> and <code>&lt;video&gt;</code> tags.</p>

<pre><code>&lt;audio controls&gt;
  &lt;source src="audio.mp3" type="audio/mpeg"&gt;
&lt;/audio&gt;

&lt;video width="320" height="240" controls&gt;
  &lt;source src="video.mp4" type="video/mp4"&gt;
&lt;/video&gt;</code></pre>

<a class="more-link" href="https://www.w3schools.com/html/html_media.asp" target="_blank">
Click For More
</a>

</div>
</body>
</html>