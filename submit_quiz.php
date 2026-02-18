<?php
session_start();  // Start session to access user_id
include 'db.php';  // Include your database connection file (assuming it's db.php as in quiz.php)

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Redirect to login if not logged in
    exit();
}

$user_id = $_SESSION['user_id'];
$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Html';  // Default to 'Html' if not set, or pass it from quiz.php

// Fetch all questions for the subject to get correct answers
$query = "SELECT id, correct_option FROM questions WHERE subject = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $subject);
$stmt->execute();
$result = $stmt->get_result();

$questions = [];
while ($row = $result->fetch_assoc()) {
    $questions[$row['id']] = $row['correct_option'];  // Store question_id => correct_option
}
$stmt->close();

$total_questions = count($_POST['ans']);

$correct_answers = 0;

// Calculate correct answers based on user submissions (using ans[] array from quiz.php)
$user_answers = [];
foreach ($questions as $question_id => $correct_option) {
    $user_answer = isset($_POST['ans'][$question_id]) ? (int)$_POST['ans'][$question_id] : 0;  // Get user answer (1-4)
    $user_answers[$question_id] = $user_answer;
    if ($user_answer == $correct_option) {
        $correct_answers++;
    }
}

// Calculate score (as decimal, e.g., 0.70)
$score = $total_questions > 0 ? $correct_answers / $total_questions : 0;

// Insert into quiz_results
$query = "INSERT INTO quiz_results (user_id, subject, total_questions, correct_answers, score) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("isiii", $user_id, $subject, $total_questions, $correct_answers, $score);
$stmt->execute();
$result_id = $stmt->insert_id;  // Get the auto-generated result_id
$stmt->close();

// Insert each answer into quiz_answers
$query = "INSERT INTO quiz_answers (result_id, question_id, user_answer, correct_answer) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($query);
foreach ($user_answers as $question_id => $user_answer) {
    $correct_answer = $questions[$question_id];
    $stmt->bind_param("iiii", $result_id, $question_id, $user_answer, $correct_answer);
    $stmt->execute();
}
$stmt->close();

$conn->close();

// Redirect back to quiz.php with score and result_id (e.g., quiz.php?score=7/10&result_id=123)
$score_display = $correct_answers . "/" . $total_questions;
header("Location: quiz.php?score=" . urlencode($score_display) . "&subject=" . urlencode($subject) . "&result_id=" . $result_id);

exit();
?>