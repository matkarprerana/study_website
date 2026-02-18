<?php
header("Content-Type: application/json");
include "db.php";

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email    = mysqli_real_escape_string($conn, $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $check = mysqli_query($conn, "SELECT user_id FROM users WHERE email='$email'");

        if (mysqli_num_rows($check) > 0) {
            $response = ["status" => "error", "message" => "Email already exists"];
        } else {

            $insert = mysqli_query(
                $conn,
                "INSERT INTO users (username, email, password)
                 VALUES ('$username','$email','$password')"
            );

            if ($insert) {
                $response = ["status" => "success", "message" => "Account created successfully"];
            } else {
                $response = ["status" => "error", "message" => mysqli_error($conn)];
            }
        }

    } else {
        $response = ["status" => "error", "message" => "Missing fields"];
    }

} else {
    $response = ["status" => "error", "message" => "Invalid request"];
}

echo json_encode($response);
exit;
