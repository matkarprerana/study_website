<?php
session_start();
include "api/db.php";

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT user_id, username, password FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {

        $user = mysqli_fetch_assoc($result);

        // ✅ ONLY THIS METHOD
        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];

            header("Location: dashboard.php");
            exit;

        } else {
            $error = "Wrong password";
        }

    } else {
        $error = "User not found";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f975b0;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-container {
            width: 900px;
            max-width: 95%;
            height: 580px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
            overflow: hidden;
            background:linear-gradient(135deg, #f585d3, #ffffff);
            position: relative;
        }

        .form-wrapper {
            width: 100%;
            max-width: 480px;
            margin: 0 auto;
            padding: 40px 50px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            position: relative;
            z-index: 2;
        }

        .main-container::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.35);
            z-index: 1;
            pointer-events: none;
        }

        h1 {
            text-align: center;
            margin-bottom: 35px;
            font-weight: 700;
            color: white;
            text-shadow: 0 2px 8px rgba(0,0,0,0.6);
        }

        .form-control {
            background: rgba(255,255,255,0.18);
            border: 1px solid rgba(233, 20, 162, 0.46);
            color: white;
            border-radius: 10px;
            padding: 13px 16px;
            margin-bottom: 20px;
            font-size: 15.5px;
            backdrop-filter: blur(2px);
        }

        .form-control::placeholder {
            color: rgba(236, 4, 124, 0.65);
        }

        .form-control:focus {
            background: rgba(255,255,255,0.28);
            border-color: #cc287d;
            box-shadow: 0 0 0 0.3rem rgb(255, 255, 255);
            color: white;
        }

        .btn-login {
            width: 100%;
            background: linear-gradient(135deg, #c49ec8, #8197cf);
            border: none;
            color: white;
            padding: 14px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 12px;
            transition: all 0.25s;
            box-shadow: 0 4px 15px rgba(120, 80, 220, 0.4);
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #8197cf, #c49ec8);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(120, 80, 220, 0.55);
        }

        .signup-link {
            text-align: center;
            margin-top: 30px;
            font-size: 14.5px;
            color: rgba(255,255,255,0.9);
            text-shadow: 0 1px 4px rgba(0,0,0,0.5);
        }

        .signup-link a {
            color: #df029d;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
            color: #dc6c9b;
        }

        .error {
            color: #ff4d4d;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 500;
            text-shadow: 0 1px 3px rgba(0,0,0,0.5);
        }

        .remember-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            color: rgba(0, 0, 0, 0.9);
            font-size: 14.5px;
        }

        .remember-container input {
            width: auto;
            margin-right: 10px;
            accent-color: #af567e;
        }

        @media (max-width: 768px) {
            .main-container {
                height: auto;
                min-height: 90vh;
                border-radius: 0;
            }
            .form-wrapper {
                padding: 50px 25px 70px;
            }
        }
    </style>
</head>
<body>

<div class="main-container">

    <div class="form-wrapper">

        <h1>Login</h1>

        <?php if (!empty($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="post">

            <input class="form-control" type="text" name="username" placeholder="Enter Username" required>

            <div class="remember-container">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>

            <input class="form-control" type="password" name="password" placeholder="Enter Password" required>

            <button class="btn-login" type="submit">Login</button>

        </form>

        <div class="signup-link">
            Don't have an account? <a href="signup.php">Sign up</a>
        </div>

    </div>

</div>

</body>
</html>