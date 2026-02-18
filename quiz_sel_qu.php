<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Take a Quiz - LERNEX</title>

<style>
body{
    margin:0;
    font-family:Arial, sans-serif;
    background:#f2f2f2;
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

/* Main Section */
.main {
    margin-left: 220px;
    padding: 40px;
    
}

/* Quiz Box */
.quiz-box{
    background:white;
    width:450px;
    padding:30px;
    border-radius:8px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
    text-align:center;
    color:#333;
}

.options label{
    margin:0 10px;
    font-size:18px;
}

button{
    padding:12px 30px;
    background:#B3688F;
    color:white;
    border:none;
    font-size:18px;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#be879c;
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
    <div class="quiz-box">
        <h2>Take a Quiz</h2>
        <p>How many questions you want to take?</p>

        <div class="options">
            <label><input type="radio" name="qcount" value="10"> 10</label>
            <label><input type="radio" name="qcount" value="20"> 20</label>
            <label><input type="radio" name="qcount" value="25"> 25</label>
        </div>

        <!-- Error Message -->
        <p id="errorMsg" style="color:red; margin-top:10px; display:none;">
            Please select number of questions
        </p>

        <button onclick="startQuiz()">Next</button>
    </div>
</div>

<script>
function startQuiz(){

    let selected = document.querySelector('input[name="qcount"]:checked');

    if(!selected){
        document.getElementById("errorMsg").style.display = "block";
        return;
    }

    document.getElementById("errorMsg").style.display = "none";

    let q = selected.value;

    let params = new URLSearchParams(window.location.search);
    let subject = params.get("subject");

    window.location.href = "quiz.php?subject=" + subject + "&questions=" + q;
}
</script>

</body>
</html>
