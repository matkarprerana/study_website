<?php
session_start();
include 'db.php';

// Check if user is logged in and result_id is provided
if (!isset($_SESSION['user_id']) || !isset($_GET['result_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$result_id = (int)$_GET['result_id'];

// Fetch quiz summary
$query = "SELECT * FROM quiz_results WHERE result_id = ? AND user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $result_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();
$quiz = $result->fetch_assoc();
$stmt->close();

if (!$quiz) {
    echo "Result not found.";
    exit();
}

// Fetch individual answers with question details (only where user_answer != 0, i.e., attempted questions)
$query = "SELECT qa.*, q.question, q.option1, q.option2, q.option3, q.option4 
          FROM quiz_answers qa 
          JOIN questions q ON qa.question_id = q.id 
          WHERE qa.result_id = ? AND qa.user_answer != 0";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $result_id);
$stmt->execute();
$answers = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Results</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: #f2f6f8;
}

/* main container */
.container {
    max-width: 900px;
    margin: 30px auto;
}

/* TOP RESULT CARD */
.result-header {
    background: #B3688F;
    color: white;
    padding: 25px;
    border-radius: 12px;
  
    margin-bottom: 25px;
}

.result-header h1 {
    margin: 0 0 10px;
}

.result-header p {
    margin: 5px 0;
    font-size: 16px;
}

/* QUESTION CARD */
.card {
    background: white;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    transition: transform 0.3s ease;
  
}

.card:hover {
    transform: translateY(-5px);
}

/* options list */
.card ul {
    list-style: none;
    padding: 0;
}

.card ul li {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}



.card { border: 1px solid #ccc; padding: 10px; margin: 10px; }
.green { color: green; font-weight: bold; }
.red { color: red; font-weight: bold; }

    </style>
</head>
<body>
    <div class="result-header">
    <h1>Quiz Results </h1>
    <p>Total Score: <?php echo $quiz['correct_answers'] . "/" . $quiz['total_questions']; ?></p>
    <p>Subject: <?php echo htmlspecialchars($quiz['subject']); ?></p>
    <p>Date: <?php echo $quiz['quiz_date']; ?></p>

     </div class="card">
    <?php if (empty($answers)): ?>
        <p>No questions were attempted.</p>
    <?php else: ?>
        <?php foreach ($answers as $answer): ?>
            <div class="card">
                <h3><?php echo htmlspecialchars($answer['question']); ?></h3>
                <ul>
    <li><?php echo htmlspecialchars($answer['option1']); ?></li>
    <li><?php echo htmlspecialchars($answer['option2']); ?></li>
    <li><?php echo htmlspecialchars($answer['option3']); ?></li>
    <li><?php echo htmlspecialchars($answer['option4']); ?></li>
</ul>

<?php
$correctText = $answer['option' . $answer['correct_answer']];
$userText    = $answer['option' . $answer['user_answer']];

// check user answer correct or not
$userClass = ($answer['user_answer'] == $answer['correct_answer']) ? 'green' : 'red';
?>

<p class="green">
    <b>Correct Answer:</b>
    Option <?php echo $answer['correct_answer']; ?> –
    <?php echo htmlspecialchars($correctText); ?>
</p>

<p class="<?php echo $userClass; ?>">
    <b>Your Answer:</b>
    Option <?php echo $answer['user_answer']; ?> –
    <?php echo htmlspecialchars($userText); ?>
</p>

            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>