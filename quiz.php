<?php
include "db.php";

/* question limit */
$limit = 10;
if (isset($_GET['questions'])) {
    $limit = (int)$_GET['questions'];
}

/* subject */
$subject = "Html";
if (isset($_GET['subject'])) {
    $subject = $_GET['subject'];
}

$query = "SELECT * FROM questions 
          WHERE subject='$subject'
          ORDER BY RAND()
          LIMIT $limit";

$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $subject; ?> Quiz - LERNEX</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url('image3.jpg');
    background-size: cover;
    display: flex;
}
.sidebar {
    width: 220px;
    background: #B3688F;
    height: 100vh;
    position: fixed;
}
.sidebar h2 {
    text-align: center;
    color: #fff;
}
.sidebar a {
    display: block;
    padding: 12px 20px;
    color: #fff;
    text-decoration: none;
}
.sidebar a:hover {
    background: #be879c;
}
.main {
    margin-left: 220px;
    padding: 40px;
}
.quiz-box {
    background: #ffffffcc;
    padding: 25px;
    width: 500px;
    border-radius: 10px;
}
.question {
    display: none;
}
.question label {
    display: block;
    margin: 8px 0;
}
code {
    background: #f4f4f4;
    padding: 3px 6px;
    border-radius: 4px;
}
button {
    padding: 10px 25px;
    background: #B3688F;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.result-card {
    background: #ffffff;
    color: black;
    padding: 30px;
    border-radius: 15px;
    width: 500px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.3);
}

.result-card h1 {
    margin-top: 0;
}

.result-card p {
    font-size: 16px;
    margin: 8px 0;
}

.result-card button {
    margin-top: 15px;
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

<?php
// Check if score and result_id are in URL (from submit_quiz.php redirect)
// If yes, show result summary instead of quiz
if (isset($_GET['score']) && isset($_GET['result_id'])) {
    echo "<div class='result-card'>";
    echo "<h1>Quiz Completed!</h1>";
    echo "<p>Your Score: " . htmlspecialchars($_GET['score']) . "</p>";
    echo "<p>Subject: " . htmlspecialchars($_GET['subject']) . "</p>";
    echo "<a href='view_result.php?result_id=" . (int)$_GET['result_id'] . "'>
    <button>View Result</button>
    </a>";
    echo "</div>";
    exit();  // Stop showing the quiz form
}
?>

<h2><?php echo strtoupper($subject); ?> Quiz</h2>

<form method="post" action="submit_quiz.php">
<input type="hidden" name="subject" value="<?php echo htmlspecialchars($subject); ?>">

<?php $i=1; while ($row = mysqli_fetch_assoc($result)) { ?>
<div class="question">
    <p><b><?php echo $i.". ".$row['question']; ?></b></p>

   <label>
    <input type="radio" name="ans[<?php echo $row['id']; ?>]" value="1">
    <code><?php echo htmlspecialchars($row['option1']); ?></code>
</label>

<label>
    <input type="radio" name="ans[<?php echo $row['id']; ?>]" value="2">
    <code><?php echo htmlspecialchars($row['option2']); ?></code>
</label>

<label>
    <input type="radio" name="ans[<?php echo $row['id']; ?>]" value="3">
    <code><?php echo htmlspecialchars($row['option3']); ?></code>
</label>

<label>
    <input type="radio" name="ans[<?php echo $row['id']; ?>]" value="4">
    <code><?php echo htmlspecialchars($row['option4']); ?></code>
</label>

</div>
<?php $i++; } ?>

<button type="button" id="nextBtn">Next</button>
<button type="submit" id="submitBtn" style="display:none;">Submit</button>

</form>
</div>
</div>

<script>
let current = 0;
let questions = document.querySelectorAll(".question");

questions[0].style.display = "block";

document.getElementById("nextBtn").onclick = function () {

    let checked = questions[current].querySelector("input[type=radio]:checked");
    if (!checked) {
        alert("Please select an option first!");
        return;
    }

    questions[current].style.display = "none";
    current++;

    if (current < questions.length) {
        questions[current].style.display = "block";
    }

    if (current === questions.length - 1) {
        this.style.display = "none";
        document.getElementById("submitBtn").style.display = "inline-block";
    }
};
</script>

</body>
</html>